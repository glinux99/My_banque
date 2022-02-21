<?php 
include('db_connex.php'); 
$grp=$db->query("SELECT * FROM Messages INNER JOIN Customers ON Customers.matricule=Messages.source_id WHERE mode=1");
?>