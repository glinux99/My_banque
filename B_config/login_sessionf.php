<?php include('db_connex.php');
            $psswd = $_POST['psswd'];
            $nom = $_POST['pmail'];
            $prenom = $nom;
            $matricule =$nom;
            $email=$nom;
            $query= $db->prepare('SELECT * FROM Compte INNER JOIN Customers ON Customers.code_auth=Compte.code_auth  WHERE ((adresse_mail=:email OR nom=:nom OR prenom = :prenom OR Customers.matricule=:matricule) AND (password_customers =:psswd))');
            $query->execute(array(
                ':email'=>$email,
                ':nom'=>$nom,
                ':prenom'=>$prenom,
                ':matricule'=>$matricule,
                ':psswd'=>$psswd
            ));
            $stat=$query->fetch();
            $query= $db->prepare('SELECT * FROM Client INNER JOIN Customers ON Customers.id=Client.customers_id  WHERE ((Client.adresse_mail=:email OR nom=:nom OR prenom = :prenom OR matricule=:matricule) AND (password_customers =:psswd))');
            $query->execute(array(
                ':email'=>$email,
                ':nom'=>$nom,
                ':prenom'=>$prenom,
                ':matricule'=>$matricule,
                ':psswd'=>$psswd
            ));
        
            ?>