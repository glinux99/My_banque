<?php session_start();
include('../B_config/db_connex.php');
$matricule= $_POST['matricule2'];
$matricule=str_replace('-','', $matricule);
$psswd=$_POST['psswd'];
$query=$db->prepare("SELECT * FROM Customers INNER JOIN Compte ON Customers.matricule=Compte.matricule WHERE Customers.matricule=:matricule and password_customers=:psswd");
$query->execute(array(
    ':matricule'=>$matricule,
    ':psswd'=>$psswd
));
$query2=$query->rowCount();
if($query2){
    $_SESSION['matricule']=$matricule;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else {
    $_SESSION['error']=1;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}


?>