<?php

session_start();

require_once("baglan.php");

$adim = @$_GET['adim'];
switch($adim){
case "": 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
<li><a href="gelecek.php">Gelecek Filmler</a></li>
<li><a href="sorgu.php">Bilet Sorgula</a></li>
<li><a href="iletisim.php">İletişim</a></li>

</ul>
</div>

<div id="content">

<div class="orta">

<div class="border">
<form action="giris_tamamla.php" method="post">
<body>
<br><div align="center"><br><h1>ÜYE GİRİŞİ</h1>
<br>
<br>
<table>
<tr>
<td><h3>Kullanıcı Adı :</h3></td>
<td><input type="text" name="grs_kulladi"></td>
</tr>
<tr>
<td><h3>Şifre:</h3></td>
<td><input type="password" name="grs_sifre"></td>
</tr>
</table>
</BR>
<input type="submit"  class="myButton" value="GİRİŞ" name="btn">
</form>
<form method="GET" >
<input type="submit" class="myButton" name="kayit" value="KAYIT OL" /> 
</form>
<?php
	if(isset($_GET['kayit'])){
	header("Location: kayit.php");
}
?>
<br><br>
<a href="index.php">Anasayfaya Dön</a><br><br>


</div>
</div>
<br><br><br>



<div style="clear: both;"></div>
</div>


<div id="footer"></div>
</div>

</body>
</html>
<?php

break;

case "girisonay":

$giris_adi 	 = $_POST['grs_kulladi'];
$giris_sifre = $_POST['grs_sifre'];

if(($giris_adi == "") or ($giris_sifre == "")){ 
	echo '<script type="text/javascript">alert("Boş bıraktığınız alanlar var!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=uyegiris.php">';
}else{ 
	$uyeler = mysql_query("SELECT * FROM musteri WHERE kulladi='$giris_adi' and kullsifre='$giris_sifre'");
	$uyebul = mysql_num_rows($uyeler);
	if($uyebul > 0){ 
		$mailcek = mysql_query("SELECT * FROM musteri WHERE kulladi='$giris_adi'"); 
		$mailcek2 = mysql_fetch_array($mailcek); 
		$_SESSION['kulladi'] = $giris_adi; 
		$_SESSION['email']   = $mailcek2['mail'];
		$_SESSION['kullsoyad']=$mailcek2['soyad'];
		$_SESSION['telefon']=$mailcek2['telefon'];	
		$_SESSION['ad']=$mailcek2['ad'];	
		
		echo '<script type="text/javascript">alert("Başarıyla giriş yaptınız! Profil sayfanıza yönlendirileceksiniz...");</script>';
		echo '<meta http-equiv="refresh" content="0;URL=profil.php">';
	}else{ 
		echo '<script type="text/javascript">alert("Kullanıcı adı veya şifreniz yanlış!");</script>';
		echo '<meta http-equiv="refresh" content="0;URL=uyegiris.php">';
	}
}
break;
}
?>