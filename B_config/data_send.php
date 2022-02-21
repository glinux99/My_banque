<?php session_start();
    include('db_connex.php');
    $_SESSION['solde_vue']='solde';
    if($_GET['soldeR']==1){
        $_SESSION['solde_vue']='soldeR';
    }
    $compte=$_SESSION['compte'];
    $solV=$db->prepare('SELECT * FROM Customers INNER JOIN Compte ON Customers.matricule=Compte.matricule WHERE Customers.matricule=:compte');
    $solV->execute(array(
        ':compte'=>$compte
    ));
    if(isset($_POST['compte'])){
        $_SESSION['compte']=$_POST['compte'];
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>