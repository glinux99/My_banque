<?php include('db_connex.php');
$cli_m=$db->prepare("SELECT * FROM Customers INNER JOIN Client ON Customers.id=Client.customers_id WHERE Customers.matricule!=:matricule");
     $cli_m->execute(array(
     ':matricule'=>$_SESSION['matricule']
  ));
  
 ?>