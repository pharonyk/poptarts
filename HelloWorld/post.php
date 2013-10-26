<?php
sleep(3);

if (empty($_POST['email'])) {
	$return['error'] = true;
	$return['msg'] = 'Invalid email. Please try again.';
}
else {
	$return['error'] = false;
	$return['msg'] = 'You\'re email ' . $_POST['email'] . ' has been subscribed!';
	
	















	
	
	
$to      = $_POST['email'];
$subject = 'Presentation';
$message = 'WOW! FANTASTIC PRESENTATION, BASIM!
A++ KUDOS!';
$headers = 'From: MDeVito@po-box.esu.edu' . "\r\n" .
    'Reply-To: MDeVito@po-box.esu.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
	
	
}

echo json_encode($return);