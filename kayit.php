		<?php
		
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
		<li><a href="#">Gelecek Filmler</a></li>
		<li><a href="sorgu.php">Bilet Sorgula</a></li>
		<li><a href="iletisim.php">İletişim</a></li>

		</ul>
		</div>

		<div id="content">

		<div class="orta">
		<div align="center">
		<div class="border">
		
				<form action="kayit.php?adim=kayitonay" method="POST"><br><br>
			<table>
		<tr>
		<td><h2>Kullanıcı Adı</h2></td>
		<td><input name="kyt_kulladi" type="text" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h2>Şifreniz<h2></td>
		<td><input name="kyt_sifre" type="password" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h2>Şifreniz Tekrar<h2></td>
		<td><input name="kyt_sifretekrar" type="password" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h2>İsim<h2></td>
		<td><input name="kyt_isim" type="text" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h2>Soyad<h2></td>
		<td><input name="kyt_soyad" type="text" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h2>Telefon<h2></td>
		<td><input name="kyt_tel" type="text" /> <font color="#FF0000">*</font></td>
		</tr>
		<tr>
		<td><h2>E-Mail<h2></td>
		<td><input name="kyt_email" type="text" /><br></td>
		</tr>
		<tr >
	
		<td colspan="2" align="center"><br><input type="submit" value="Kayıt Ol" class="myButton" /></td>
		</tr>
			</table>
				</form>

		<br />Giriş yapmak için <a href="uyegiris.php">tıklayınız</a>


</div>
</div>
</div>		




		<div style="clear: both;"> </div>
		</div>


		<div id="footer">
		</div>
		</div>

		</body>
		</html>
<?php
		break;

		case "kayitonay":

$kullanici_adi 	       = $_POST['kyt_kulladi'];
$kullanici_sifre       = $_POST['kyt_sifre'];
$kullanici_sifretekrar = $_POST['kyt_sifretekrar'];
$kullanici_isim        = $_POST['kyt_isim'];
$kullanici_soyad       = $_POST['kyt_soyad'];
$kullanici_tel         = $_POST['kyt_tel'];
$kullanici_email       = $_POST['kyt_email'];

		



		if(($kullanici_adi == "") and ($kullanici_sifre == "") and ($kullanici_sifretekrar == "")){ 
	echo '<script type="text/javascript">alert("Boş bıraktığınız alanlar var!");</script>';
		echo '<meta http-equiv="refresh" content="0;URL=kayit.php">';
		}elseif($kullanici_sifre != $kullanici_sifretekrar){ 
	echo '<script type="text/javascript">alert("Şifreleriniz birbiriyle uyuşmuyor!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=kayit.php">';}
		

else{ 
	$kullanici_kaydet = mysql_query("INSERT INTO musteri (kulladi,soyad,telefon,mail,kullsifre,ad) VALUES ('$kullanici_adi','$kullanici_soyad','$kullanici_tel','$kullanici_email','$kullanici_sifre','$kullanici_isim')"); //Kullanıcıyı veritabanına kaydedicek mysql kodu
		echo '<script type="text/javascript">alert("Kayıt işleminiz başarıyla gerçekleşti!");</script>';
		echo '<meta http-equiv="refresh" content="0;URL=uyegiris.php">';
		}

		break;
		}
	
?>