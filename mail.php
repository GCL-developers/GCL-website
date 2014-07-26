<?php
// Enter your email address
$to = 'pawanpal004@gmail.com';

$subject = $_POST['subject'];

if($to) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	$fields = array(
		0 => array(
			'text' => 'Name',
			'val' => $_POST['name']
		),
		1 => array(
			'text' => 'Email address',
			'val' => $_POST['email']
		),
		2 => array(
			'text' => 'Message',
			'val' => $_POST['message']
		)
	);

	//$message = "Fuck OFF.";

	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
	}

	$headers = '';
	$headers .= 'From: ' . $name . ' <' . $email . '>';
	$headers .= "Reply-To: " .  $email;
	$headers .= "MIME-Version: 1.0";
	$headers .= "Content-Type: text/html; charset=UTF-8";


	if (mail($to, $subject, $message)){
		$arrResult = array ('response'=>'success');
	} else{
		$arrResult = array ('response'=>'error');
	}

	echo json_encode($arrResult);
}
?>