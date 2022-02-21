<?php
session_start();
include('../B_config/db_connex.php');
$cli=$db->prepare("SELECT * FROM Messages INNER JOIN Customers ON Customers.matricule=Messages.source_id WHERE ((source_id=:source AND destination_id=:dest) OR (source_id=:dest AND destination_id=:source))");
$cli->execute(array(
    ':source'=>$_SESSION['matricule'],
    ':dest' =>$_SESSION['mat_dest']
));
$clip=$db->prepare("SELECT * FROM Messages INNER JOIN Customers ON Customers.matricule=Messages.source_id WHERE ((source_id=:source AND destination_id=:dest) OR (source_id=:dest AND destination_id=:source))");
$clip->execute(array(
    ':source'=>$_SESSION['matricule'],
    ':dest' =>$_SESSION['mat_dest']
)); 
$group=$db->query("SELECT * FROM Messages INNER JOIN Customers ON Customers.matricule=Messages.source_id WHERE mode=1");
$pic=$db->prepare("SELECT * FROM Customers WHERE matricule=:dest ");
$pic->execute(array(
    ':dest' =>$_SESSION['mat_dest']
));   
$pic2=$pic->fetch();

    ?>