<?php
session_start();
include('db_connex.php');
$solde_C= $db->prepare("SELECT solde FROM Compte WHERE matricule=:matricule");
$solde_C->execute(array(
    ':matricule'=>$_SESSION['matricule']));
$solde_C=$solde_C->fetch();
?>
