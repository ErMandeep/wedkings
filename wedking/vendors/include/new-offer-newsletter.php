<?php

require_once("config/db.php");

require 'class/class.phpmailer.php';

$mail = new PHPMailer();

$link="";


$emailBody = "This is new offer".$newOffer."";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = '587';  
$mail->Username = 'admin@wedkings.in';
$mail->Password = '45rude88mud';
$mail->Host     = 'mail.wedkings.in';

$query = "SELECT * FROM users";
$run = mysqli_query($connection, $query);

foreach ($run as $row) {
$mail->addBCC($row['email']);
}

$mail->addReplyTo('admin@wedkings.in', 'Wedkings');
$mail->setFrom('admin@wedkings.in', 'Wedkings ');
// $mail->addAddress($to); 
$mail->Subject = "New Offer For You";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if($mail->Send()) {

	$success_message = 'Offer send Successfully';
	// echo $success_message;

} else {
	
	$error_message = 'Offer sending failed!';
	echo $error_message;
}

?>
