<?php ob_start();
@session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sinema 17</title>
</head>
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

<div id="content"><br/><br/>
<div class="orta">

</div>

<div align="center">

<?php
	
	include("baglan.php");
					
	 if(isset($_POST["kaydet"])){
					$isim2=$_POST["isim1"];
					$soyad2=$_POST["soyad1"];
					$tel2=$_POST["tel1"];
					$mail2=$_POST["mail1"];
					$a = $_SESSION['kulladi'];
					$sorgu=mysql_query("update musteri set ad='$isim2' , soyad='$soyad2' , telefon='$tel2' , mail='$mail2' where kulladi='$a' ");		
					if ($sorgu){
						$_SESSION['ad'] = $isim2;
						$_SESSION['kullsoyad'] = $soyad2;
						$_SESSION['telefon'] = $tel2;
						$_SESSION['email'] = $mail2;
						echo'güncellendi';
						
						
					}
					else
					{echo'olmadıııııı';}
		
	}
	
?>
<div class="border">
<div align="center">

<form method="post">

<?php 
$adi = $_SESSION['kulladi'];


$sorgu2=mysql_query("select * from musteri where kulladi='$adi'");


echo'<table border="0" width="740px" >';
echo '<tr>';
echo'<br/><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="profil.php" class="myButton1"><p>Geri</p></a></td>';
echo '<tr>';
echo '<tr>';
	echo'<td align="center" colspan="3"></br><h1><u>ÜYELİK GÜNCELLE</u></h1><br/></br></br></br></td>';

echo '</tr>';
echo '<tr>';
echo'<td align="right">
		<h2> İSİM :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</h2><br/>
		<h2> SOYAD : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2><br/>
		<h2> TELEFON : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2><br/>
		<h2> MAİL : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2><br/></br></br>
		</td>';

echo '<td colspan="3">
<input type="text" value="'.$_SESSION['ad'].'" name="isim1"/><br/><br/>
<input type="text" value="'.$_SESSION['kullsoyad'].'" name="soyad1"/><br/><br/>
<input type="text" value="'.$_SESSION['telefon'].'" name="tel1"/><br/><br/>
<input type="text" value="'.$_SESSION['email'].'" name="mail1"/><br/><br/></br></br>

</td>';
echo '</tr>';
echo '<tr>';
	echo'<td align="center" colspan="3"><input type="submit" name="kaydet" class="myButton" value="Güncelle"/><br/></br></td>';
echo '</tr>';


echo '</table>';

?>
</form>
</div>
</div>
<div style="float:left; padding:0px 0px 0px 0px;" >


</div>
</div>
<!--<div align="center"><h3><a href="admin1.php">Anasayfaya Dön</a></div></h3>-->


<div style="clear: both;"> </div></div>

<div id="footer"></div>

</div>
</body>
</html>