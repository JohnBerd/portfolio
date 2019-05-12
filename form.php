<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$error = 0;
	$name = $_POST['name'];
	$mail = $_POST['e-mail'];
	$message = $_POST['message'];
	if (!isset($name))
		$error++;
	if (strlen($name) < 3)
		$error++;
	if (!isset($message))
		$error++;
	if (strlen($message) < 3)
		$error++;
	if (!isset($mail))
		$error++;
	if (!filter_var($mail, FILTER_VALIDATE_EMAIL))
		$error++;

	foreach ($_POST as $display)
		echo $display.'<br>';
	if ($error == 0)
	{
		$da = 'lecunffxavier@gmail.com';
		$subject = 'New message from your e-portfolio';
		$content = '<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><title>E-Portfolio message</title></head><body>';
		$content .= '<p><strong>From:</strong> '.$name.'</p>';
		$content .= '<p><strong>E-mail:</strong> '.$mail.'</p>';
		$content .= '<p><strong>Message :</strong> '.$message.'</p></body></html>';
		$headers = 'MIME-Version: 1.0'."\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
		echo $content;
		var_dump(mail($da, $subject, $content, $headers));
	}
}
