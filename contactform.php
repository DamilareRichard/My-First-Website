<?php 

if (isset($_POST['submit'])) {
	$fname = $_['firstname'];
	$lname = $_['lastname'];
	$mailFrom = $_['mail'];
	$country = $_['country'];
	$message = $_['message'];

	$mailTo ="damilareshinaayo@gmail.com";
	$headers ="From: .$mailFrom";
	$txt ="You have received an e-mail from ".$name. ".\n\n".$message;

	mail($mailTo, $subject, $text, $headers);
	header("Location: index.php?mailsend");
}
?>

