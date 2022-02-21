<?php
    include('db_connex.php');
    $client=$db->query('SELECT * FROM Customers INNER JOIN Client ON Customers.id=customers_id INNER JOIN Compte ON Customers.matricule=Compte.matricule '); 
?>