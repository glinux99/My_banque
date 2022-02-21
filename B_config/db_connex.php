<?php 
    try{
        $db=new PDO('mysql: host=localhost; dbname=nuru_db', 'nuru_banque', 'nuru_banque');
    }
    catch(Exception $e){
        die('Nous sommes desole');
    }
?>