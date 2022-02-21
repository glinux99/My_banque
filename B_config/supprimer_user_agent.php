<?php include('db_connex.php');
    if(isset($_GET['action'])){
        $code=$_GET['code_auth'];
        echo $code;
        if($_GET['action']=='desactiver'){
            $desc= $db->prepare("UPDATE Compte SET status_compte=1 WHERE code_auth=:code");
            $desc->execute(array(
                ':code'=>$code
            ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        }else if($_GET['action']=='supprimer'){
            $desc =$db->prepare("DELETE  FROM Customers WHERE code_auth=:code");
            $desc->execute(array(
                ':code'=>$code
            ));
            $desc =$db->prepare("DELETE  FROM Compte WHERE code_auth=:code");
            $desc->execute(array(
                ':code'=>$code
            ));
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else {
            $desc= $db->prepare("UPDATE Compte SET status_compte=0 WHERE code_auth=:code");
            $desc->execute(array(
                ':code'=>$code
            ));
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }else $client=$db->query('SELECT * FROM Customers INNER JOIN Compte ON Compte.matricule=Customers.matricule WHERE Customers.id!=1'); 
?>




