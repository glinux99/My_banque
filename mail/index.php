<?php
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
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
	$mail->addAttachment('../B_img/logo1.png');
	$mail->Body = "<h1>Nuru Banque</h1></br><p>Ceci est un code de verification</p>";
	$mail->addAddress('genesiskikimba@gmail.com');
	if ( $mail->send() ) {
		header('location: ../B_users/confirm.php');
	}else{
		echo "Le code n'a pas pu etre envoyer reesayer: "{$mail->ErrorInfo};
	}
	$mail->smtpClose();
	?>
