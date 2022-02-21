<?php session_start();
    include('db_connex.php');
    $retr=$_POST['retrait'];
    $retr=abs($retr);
    $soldV=$_POST['soldeV'];
    $compte=$_POST['compteR'];
    $_SESSION['ret']='ret';
    //echo $soldV;
    if($soldV<$retr){
        //erreur d envoie solde insufisant
        $_SESSION['retrEror']='soldeIns';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        if(($soldV-5)<$retr){
            //pas d envoie car solde inferieur a 5usd;
            $_SESSION['retrEror']='erreur5';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }else{
            //envoie avec success
            $_SESSION['retrEror']='success';
            $solde=$soldV-$retr;
            $succ=$db->prepare('UPDATE Compte set solde=:solde WHERE matricule=:compte');
            $succ->execute(array(
                ':solde'=>$solde,
                ':compte'=>$compte
            ));
            $code = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6);
            $code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6).'.'.$code;
            $code = substr(str_shuffle("0123456789"), 0, 6).'.'.$code;
            $code = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6).'.'.$code;
            $succ=$db->prepare('INSERT INTO Transactions(date_trans, montant_ret, solde, caissier_id, client_mat, motif, trans_mat) values (NOW(), :ret,:solde, (SELECT Caissier.id FROM Caissier INNER JOIN
            Customers ON Customers.id=customers_id WHERE matricule=:caissier),:client, :motif, :trans_mat)');
            $succ->execute(array(
                ':solde'=>$soldV,
                ':ret'=>$retr,
                ':caissier'=>$_SESSION['matricule'],
                ':client'=>$compte,
                ':motif'=>'retrait',
                ':trans_mat'=>$code
            ));
           header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        
    }
   // $ret=$db->prepare("SELECT")
?>