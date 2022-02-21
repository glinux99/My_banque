<?php 
    include('db_connex.php');
    $tra=$db->prepare(("SELECT * FROM Transactions INNER JOIN Caissier ON Caissier.id=caissier_id INNER JOIN Customers ON Customers.id=customers_id WHERE Customers.matricule=:matricule AND (datediff(date_trans, current_time)<=:jours)  "));
    $tra->execute(array(
        ':matricule'=>$_SESSION['matricule'],
        ':jours'=>0
    ));
    if(isset($_POST['jours'])){
        $tra=$db->prepare(("SELECT * FROM Transactions INNER JOIN Caissier ON Caissier.id=caissier_id INNER JOIN Customers ON Customers.id=customers_id WHERE Customers.matricule=:matricule AND (datediff(date_trans, current_time)<=:jours) "));
        $tra->execute(array(
            ':matricule'=>$_SESSION['matricule'],
            ':jours'=>$_POST['jours']
        )); 
    }
?>