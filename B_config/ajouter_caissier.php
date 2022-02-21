<?php session_start();
include('db_connex.php');
      try{
        if(1){
            $code_auth = (STRING) (rand(1,9)).(STRING) (rand(1,9)).(STRING) (rand(1,9)).(STRING) (rand(1,9));
            $matricule = substr(str_shuffle("1234567890"), 0, 12);
            $matricule = "4970".$matricule;
            session_start();
            $type=$_POST['type_compte'];
            $numero=$_POST['numero_tel'];
            $genre=$_POST['genre'];
            include('photo_data.php');
            $photo = 'nuru_banque'.$_SESSION['matricule'].'.png';
            $code = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6);
            $query= $db->prepare("INSERT INTO Operations(date_op, montant_op, etat_op, code_auth) VALUES(NOW(), 0, 0, :code_auth)");
            $query->execute(array(
                ':code_auth'=>$code_auth
            ));
            $query= $db->prepare("INSERT INTO Compte (date_creation, solde, status_compte, code_auth, matricule) VALUES (NOW(), 0,0,:code_auth,:matricule)");
            $query->execute(array(
                ':code_auth'=>$code_auth,
                ':matricule'=>$matricule
            ));
            $query= $db->prepare("INSERT INTO TransactionType(trans_id, trans_desc, date_trans, solde) VALUES(:trans_id, '',NOW(),0)");
            $query->execute(array(
                ':trans_id'=>$code
            ));
            $query= $db->prepare("INSERT INTO Adresse(quart_av, ville, province, pays, apropos, id_compte, code_auth) VALUES ('','','','','', (SELECT id FROM Compte WHERE code_auth=:code_auth),:code_auth)");
            $query->execute(array(
                ':code_auth'=>$code_auth
            ));
            $query= $db->prepare("INSERT INTO Customers (nom, prenom,adresse_mail,matricule, password_customers, numero_tel, type_compte, genre, adresse_id,photo, code_auth)
                                    VALUES (:nom, :prenom,:adresse_mail,:matricule,:password_customers,:numero_tel,:type_compte,:genre,(SELECT id FROM Adresse WHERE code_auth=:code_auth),:photo, :code_auth)");
             $query->execute(array(
                ':nom'=>$_POST['nom'],
                 ':prenom'=>$_POST['prenom'],
                 ':adresse_mail'=>$_POST['email'],
                 ':matricule'=>$matricule,
                 ':password_customers'=>$_POST['psswd'],
                 ':numero_tel'=>$numero,
                 ':type_compte'=>$type,
                 ':genre'=>$genre,
                 ':photo'=>$photo,
                 ':code_auth'=>$code_auth
             ));  
             $query= $db->prepare("INSERT INTO Caissier(customers_id, adresse_id, operation_id, transactionType_id) VALUES((SELECT id FROM Customers WHERE code_auth=:code_auth),(SELECT id FROM Adresse WHERE code_auth=:code_auth), (SELECT id FROM Operations WHERE code_auth=:code_auth), (SELECT id FROM TransactionType WHERE trans_id=:code))");
             $query->execute(
                 array(
                     ':code_auth'=>$code_auth,
                     ':code'=>$code
                 )
                 );
            header('location: ../B_admin/admin_N.php?error=0');
            }
}
    catch(Exception $e){
        echo 'ERREUR';
    }
?>