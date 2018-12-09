<?php

if(isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	
	$mailTo = "mauzycreations@gmail.com";
	$headers = "From: ".$email;
	$txt = "You have recevied an email from ".#lname.".\n\n".$subject;
	
	mail($mailTo, $lname, $txt, $headers);
	
	header("Location: action_page.php?mailsend");
}