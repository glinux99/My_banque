<?php 
    session_start();
    include('login_sessionf.php');
        if(isset($_POST['pmail']) && isset($_POST['psswd'])){
            $query2= $query->fetch(PDO:: FETCH_COLUMN);
            if($query2>1 && ($stat['status_compte']!='1')) {
            include('login_sessionf.php');
            $sess = $query->fetch();
            $_SESSION['matricule'] = $sess['matricule'];
        header ('location: ../B_users/modifier_compte.php');
            }
            else{
                // Caissier
                $queryC= $db->prepare('SELECT * FROM Caissier INNER JOIN Customers ON Customers.id=Caissier.customers_id WHERE ((Customers.adresse_mail=:email OR nom=:nom OR prenom = :prenom OR matricule=:matricule) AND (password_customers =:psswd))');
                $queryC->execute(array(
                ':email'=>$email,
                ':nom'=>$nom,
                ':prenom'=>$prenom,
                ':matricule'=>$matricule,
                ':psswd'=>$psswd
                ));
                $query2C=$queryC->rowCount();
                // Caissier
                $query= $db->prepare('SELECT * FROM Admins INNER JOIN Customers ON Customers.id=Admins.customers_id WHERE ((Customers.adresse_mail=:email OR nom=:nom OR prenom = :prenom OR matricule=:matricule) AND (password_customers =:psswd))');
                $query->execute(array(
                ':email'=>$email,
                ':nom'=>$nom,
                ':prenom'=>$prenom,
                ':matricule'=>$matricule,
                ':psswd'=>$psswd
                ));
                $query2=$query->rowCount();
                if($query2>0){
                    $query2=$query->fetch();
                    $_SESSION['nom'] = $query2['nom'];
                    $_SESSION['prenom'] = $query2['prenom'];
                    $_SESSION['email'] = $query2['email'];
                    $_SESSION['psswd'] = $query2['psswd'];
                    $_SESSION['matricule']=$query2['matricule'];
                    $_SESSION['type_compte']='admin';
                    header('location: ../B_admin/admin_N.php');
                } else if($query2C>0){
                    $query2C=$queryC->fetch();
                    $_SESSION['nom'] = $query2C['nom'];
                    $_SESSION['prenom'] = $query2C['prenom'];
                    $_SESSION['email'] = $query2C['email'];
                    $_SESSION['psswd'] = $query2C['psswd'];
                    $_SESSION['matricule']=$query2C['matricule'];
                    $_SESSION['type_compte']='caissier';
                    header('location: ../B_caissier/caissier_N.php');
                }
                else   header ('location: ../B_users/loginsecure.php?error=1');
            }
        }
?>