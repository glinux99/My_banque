<?php 
session_start();
include('db_connex.php');
$matricule = $_SESSION['matricule'];
$psswd = $_POST['psswd'];
$ncompte = $_POST['ncompte'];
$compte = $_POST['compte2'];
$montant =$_POST['montant3'];
$montant=abs($montant);
$dollars = $_POST['dollars'];
$query= $db->prepare("SELECT * FROM Customers WHERE (password_customers=:psswd AND matricule=:matricule) ");
$query->execute(array(
    ':psswd'=>$psswd,
    ':matricule'=>$matricule
));
$query=$query->fetch();
$query_name=$query['nom'].' '.$query['prenom'];
$code=$query['code_auth'];
if(($code)==NULL) {
    $_SESSION['error']='psswd';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
}
$taux=2000;
if($query){
    $query= $db->prepare("SELECT solde FROM Compte WHERE code_auth=:code_auth");
    $query->execute(array(
    ':code_auth'=>$code
    ));
    $query=$query->fetch();
    if($dollars=='CDF'){
        $dollars =$montant/$taux;
    }
    $solde = $query['solde']-$montant;
    $query= $db->prepare("SELECT solde FROM Compte WHERE matricule=:matricule");
    $query->execute(array(
    ':matricule'=>$compte
    ));
    $querys=$query->fetch();
    $soldeAdd=$querys['solde']+$montant;
    if($solde>5){
        $query= $db->prepare("UPDATE Compte SET solde =:solde WHERE matricule=:matricule");
        $query->execute(array(
            ':solde'=>$solde,
            ':matricule'=>$matricule
        ));
        $query= $db->prepare("UPDATE Compte SET solde =:solde WHERE matricule=:matricule");
        $query->execute(array(
            ':solde'=>$soldeAdd,
            ':matricule'=>$compte
        ));
        $codex = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6);
        $codex = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6).'.'.$codex;
        $codex = substr(str_shuffle("0123456789"), 0, 6).'.'.$codex;
        $codex = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6).'.'.$codex;
        $vir=$db->prepare("INSERT INTO Transactions(date_trans, montant_ret, solde, motif, trans_mat, client_mat) VALUES(NOW(),:montant, :solde, :motif, :trans_mat, :client_mat)");
        $vir->execute(array(
            ':montant'=>$montant,
            ':solde'=>$solde,
            ':motif'=>'Virement effectue par '.$query_name,
            ':trans_mat'=>$codex,
            ':client_mat'=>$compte
        ));
        $_SESSION['error']='success';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        $_SESSION['error']='solde';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>  