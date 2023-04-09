<?php ob_start();
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sinema 17</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>

<div id="arka">
<div id="wrap">

<div id="top"> </div>

<div id="header">

<a href="index.php"><img src="images/logo2.png" width="300" height="100" ></a>
<img src="images/logo11.png" width="300" height="100" ></a>
<div class="admin"><br/><br/>
<?php include ('buton1.php');?>
</div>
</div>

<div id="menu">
<ul>
<li><a href="index.php">Vizyondaki Filmler</a></li>
<li><a href="#">Gelecek Filmler</a></li>
<li><a href="sorgu.php">Bilet Sorgula</a></li>
<li><a href="iletisim.php">İletişim</a></li>

</ul>
</div>

<div id="content"><br/><br/>


<div class="orta">
<div class="border"></br>
		
<h1 align="center">SİNEMA 17 TİC.PAZ.LTD.ŞTİ</h1><br/><br/><br/>

<fieldset align="center"></br>
<h2>ADRES : ÇANAKKALE 0NSEKİZ MART ÜNİVERSİTESİ</h2><br/>
<h2>TELEFON : 0555 555 55 55</h2><br/>
<h2>E-MAİL : sinema17@hotmail.com</h2><br/>
</fieldset> 



<br/><br/><br/>
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

		<form method="post" align="center">
			<h3>İSİM :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="isim"  /><br /><br />
			E-POSTA :&nbsp; <input type="text" name="e_posta" /><br /><br />
			MESAJ : &nbsp;&nbsp;&nbsp;&nbsp;<textarea name="mesaj"></textarea><br /><br /></h3>
			
			

			<input type="submit" class="myButton" value="GÖNDER" /></br></br>
		</form>
		</form>
	

  </div>




<div style="clear: both;"> </div>
</div>


<div id="footer">
</div>
</div>

</body>
</html>