<?php session_start();
    include('db_connex.php');
    $compte=$_POST['compte'];
    $depot=$_POST['mount'];
    $solde_C= $db->prepare("SELECT * FROM Compte WHERE matricule=:matricule");
    $solde_C->execute(array(
        ':matricule'=>$compte));
    $tes=$solde_C;
    $solde_C=$solde_C->fetch();
    $solde=$solde_C['solde']+abs($depot);
    $in=$db->prepare("UPDATE Compte set solde=:solde WHERE matricule=:matricule");
    $in->execute(array(
        ':solde'=>$solde,
        ':matricule'=>$compte
    ));
    $err=$tes->rowCount();
    if(!$err){
        $_SESSION['depotError']='error';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        $_SESSION['depotError']='success';
        $code = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6);
        $code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6).'.'.$code;
        $code = substr(str_shuffle("0123456789"), 0, 6).'.'.$code;
        $code = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6).'.'.$code;
        $succ=$db->prepare('INSERT INTO Transactions(date_trans, montant_ret, solde, caissier_id, client_mat, motif, trans_mat) values (NOW(), :ret,:solde, (SELECT Caissier.id FROM Caissier INNER JOIN
        Customers ON Customers.id=customers_id WHERE matricule=:caissier),:client, :motif, :trans_mat)');
        $succ->execute(array(
            ':solde'=>$solde_C['solde'],
            ':ret'=>abs($depot),
            ':caissier'=>$_SESSION['matricule'],
            ':client'=>$compte,
            ':motif'=>'depot',
            ':trans_mat'=>$code
        ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>