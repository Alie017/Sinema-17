<?php

require_once 'lib/swift_required.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.live.com', 587, 'tls')
  ->setUsername('bugra.ulku@hotmail.com')
  ->setPassword('lordrock41')
  ;
  

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$mesaj = "
	
	İsim: ".$_POST['isim']."
	E-Posta: ".$_POST['e_posta']."
	Mesaj: ".$_POST['mesaj']."
	IP: ".$_SERVER['REMOTE_ADDR']."
	";
	
$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('İletişim Formundan Gelen Mesaj')
  ->setFrom(array('bugra.ulku@hotmail.com' => 'Bugra ÜLKÜ'))
  ->setTo(array('bugra.ulku@hotmail.com'))
  ->setBody($mesaj)
  ;

$result = $mailer->send($message);


}	
	
?>  