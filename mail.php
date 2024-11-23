<?php 
$name = $_POST['nom'];
$email = $_POST['mail'];
$message = $_POST['message'];
$formcontent="De: $name \n Message: $message";
$recipient = "a.bardin@codeur.online";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
if(mail($recipient, $subject, $formcontent, $mailheader)) {
	//echo "Thank You!";
	$arr = ['Response' => 'success', 'Message' => "Thank You!"];
}
else {
	$arr = ['Response' => 'error', 'Message' => "Un problème est survenu!"];
}
echo json_encode($arr);
//include('./page3.php');
?>

