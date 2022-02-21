<?php  
session_start();
include('db_connex.php');
if(isset($_POST['authen'])){
            $code_auth=$_POST['authen'];
            $query= $db->prepare("SELECT COUNT(*) FROM Inscription WHERE code=:code_auth");
            $query->execute(array(
                ':code_auth'=>$code_auth
            ));
            try{
                if($query){
                    $matricule = substr(str_shuffle("1234567890"), 0, 12);
                    $matricule2 = substr(str_shuffle("1234567890"),0,2);
                    $matricule = "4970".$matricule.$matricule2;
                    session_start();
                    $_SESSION['matricule']=$matricule;
                    $numero="";
                    $genre="";
                    $photo = "";
                    $code = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 6);
                    $query= $db->query("INSERT INTO Operations(date_op, montant_op, etat_op) VALUES(NOW(), 0, 0)");
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
                        ':nom'=>$_SESSION['nom'],
                         ':prenom'=>$_SESSION['prenom'],
                         ':adresse_mail'=>$_SESSION['email'],
                         ':matricule'=>$matricule,
                         ':password_customers'=>$_SESSION['psswd'],
                         ':numero_tel'=>$numero,
                         ':type_compte'=>$type,
                         ':genre'=>$genre,
                         ':photo'=>$photo,
                         ':code_auth'=>$code_auth
                     ));  
                     $query= $db->prepare("INSERT INTO Client (adresse_mail, customers_id, adresse_id) VALUES(:adresse_mail, (SELECT id FROM Customers WHERE code_auth=:code_auth),(SELECT id FROM Adresse WHERE code_auth=:code_auth))");
                     $query->execute(array(
                         ':adresse_mail'=>$_SESSION['email'],
                         ':code_auth'=>$code_auth
                     ));
                     header('location: ../B_users/modifier_compte.php');
                    }
                    else if($_GET['user']==1){
                        header('location: ../B_users/modifier_compte.php');
                    }
                    else{
                        header('location: ../B_users/confirm.php?error=1');
                    }
            }
            catch(Exception $e){
                echo 'ERREUR';
            }
        }
?>