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
<?php
if(!isset($_SESSION['ad'])){
echo "yanlış sularda yüzüyorsun";

}
?>
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
<a href="admin.php" class="myButton1"><p>Admin Paneli</p></a></td>

<div align="center"><font size="4" ><h1>ADMİN İŞLEMLERİ</h1></font></br></br>

</div>
<br>

<div align="center">
<?php
include("baglan.php");
echo '<form action="listele.php" method="post">';
echo '<div class="border"></br></br>';
echo "<font size=\"4px\"></br></br><table border=\"1\" align=\"center\">";

		echo '<select name="filmii">';
			$sql = "SELECT * FROM film ";
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['film_adi'];
		echo"<option >$isim</option>";
		
		}		
	echo '</select>';	
	echo '</br></br>';
	echo '<select name="tarihii">';
			$sql = "SELECT * FROM gun ";
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['tarih'];
		echo"<option value=".$yaz['tarih']." >".substr($isim,8,2)."-".substr($isim,5,2)."-".substr($isim,0,4)."</option>";
		
		}		
	echo '</select>';
	
	echo '<select name="seansii">';
			$sql = "SELECT * FROM seans ";
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['seans_saati'];
		echo"<option>$isim</option>";
		
		}		
	echo '</select>';
	
	
	echo '</br></br>';
	/*echo'<input type="text" name="filmsec1" value="'.$_POST["filmsec"].'">';
	echo'<input type="text" name="tarihsec1" value="'.$_POST["tarihsec"].'">';
	echo'<input type="text" name="seanssec1" value="'.$_POST["seanssec"].'">';*/
	
	echo'<input type="submit" name="listele" value="LİSTELE" class="myButton">';
	

	
echo "</table></br></br>";
echo '</div>';
echo '</form>';
?>
</div>

<div style="clear: both;"> </div></div>

<div id="footer"></div>

</div>
</body>

</html>