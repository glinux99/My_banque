<?php include('db_connex.php');
    $titre='';
   if(isset($_POST['jours'])){
       $query=$db->prepare(("SELECT * FROM Transactions INNER JOIN Caissier ON Caissier.id=caissier_id INNER JOIN Customers ON Customers.id=customers_id WHERE Customers.matricule=:matricule AND (datediff(date_trans, current_time)<=:jours) AND client_mat=:client_mat"));
       $query->execute(array(
           ':matricule'=>$_SESSION['matricule'],
           ':jours'=>$_POST['jours'],
           ':client_mat'=>$_POST['compte']
       )); 
   }else {
    $query=$db->prepare(("SELECT * FROM Transactions INNER JOIN Caissier ON Caissier.id=caissier_id INNER JOIN Customers ON Customers.id=customers_id WHERE Customers.matricule=:matricule AND (datediff(date_trans, current_time)<=:jours)"));
    $query->execute(array(
        ':matricule'=>$_SESSION['matricule'],
        ':jours'=>1
    )); 
    $titre='1';
}
if(($_POST['compte'])==$_SESSION['matricule']){
    $query=$db->prepare(("SELECT * FROM Transactions INNER JOIN Customers ON matricule=client_mat WHERE client_mat=:matricule AND password_customers=:psswd AND(datediff(date_trans, current_time)<=:jours);"));
    $query->execute(array(
        ':matricule'=>$_SESSION['matricule'],
        ':psswd'=>$_POST['psswd2'],
        ':jours'=>7
    ));
    $titre='1';
    }
   //$query=$db->query("SELECT * FROM Transactions INNER JOIN Caissier ON Caissier.id=caissier_id INNER JOIN Customers ON Customers.id=customers_id");
?>