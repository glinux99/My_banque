<?php
	require '../mail/includes/PHPMailer.php';
	require '../mail/includes/SMTP.php';
	require '../mail/includes/Exception.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
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
    $ok ="<h1>Nuru Banque</h1></br><p>oooooooooooooooooooooo</p>".$code;
	$mail->addAttachment('../B_img/logo1.png');
	$mail->Body = $ok;
	$mail->addAddress('genesiskikimba@gmail.com');
	if ( $mail->send() ) {
		header('location: ../B_users/confirm.php');
	}else{
		echo "Le code n'a pas pu etre envoyer reesayer: "{$mail->ErrorInfo};
	}
	$mail->smtpClose();
	?>