<?php session_start();
    include('db_connex.php');
    require '../mail/includes/PHPMailer.php';
    require '../mail/includes/SMTP.php';
    require '../mail/includes/Exception.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $code = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ123456789"), 0, 20);
    $code1 = (STRING) (rand(1,9)).(STRING) (rand(1,9)).(STRING) (rand(1,9)).(STRING) (rand(1,9));
    $code ="NuruBanque-<b>".$code1."<b>";
    $mail=$_POST['email'];
    $query= $db->prepare("SELECT * FROM Inscription WHERE adresse_mail=:adresse");
    $query->execute(array(
        ':adresse'=> $mail
    ));
    $query=$query->rowCount();
    if($query>1){ 
        header('Location: ../B_users/loginsecure.php?email=2');
    }
    else{
        $query= $db->prepare("INSERT INTO Inscription (adresse_mail, code) VALUES(:adresse,:code)");
        $query->execute(array(
                ':adresse'=> $_POST['email'],
                ':code'=> $code1
            ));
            
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";
            $mail->Username = "nurubanque@gmail.com";
            $mail->Password = "Nurubanque2022";
            $mail->Subject = "Code d'Authentification";
            $mail->setFrom('nurubanque@gmail.com');
            $mail->isHTML(true);
            //$code =222;
            $ok ="<h1 style='color: green'>Nuru Banque</h1></br><p style='font-size: 21px;'> Votre code d'authentifiaction lie a votre compte est </p>".$code." ou cliquez directement sur ce lien <a href='http://localhost/My_Banque/'>ici</a>";
            $mail->addAttachment('../B_img/logo1.png', "Nuru Banque logo");
            $mail->Body = $ok;
            $mail->addAddress($_POST['email']);
            session_start();
            $_SESSION['nom'] = $_POST['nom'];
            $_SESSION['prenom'] = $_POST['prenom'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['psswd'] = $_POST['psswd'];
            if ( $mail->send() ) {
                header('location: ../B_users/confirm.php');
            }else{
                echo "Le code n'a pas pu etre envoyer reesayer: "{$mail->ErrorInfo};
            }
            $mail->smtpClose(); 
        }
?>