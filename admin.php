<?php ob_start();
session_start();
?>
<?php
if(!isset($_SESSION['ad'])){
echo "yanlış sularda yüzüyorsun";

}
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

<div class="border"><br><br>
<div align="center"><font size="4" ><h1>ADMİN İŞLEMLERİ</h1></font></br></br></div>
<br>
<div align="center">
	<table border="0">
	<tr>
	<td align="center"><a href="adminuye.php" class="myButton"><p>ÜYELER</p></a></td>
	</tr>
	
	<tr>
	<td align="center"><a href="adminfilm.php" class="myButton"><p>YENİ FİLM EKLE</p></a></td>
	</tr>
	<!--<tr>
	<td align="center"><a href="adminis.php" class="myButton"><p>GELECEK FİLM EKLE</p></a></td>
	</tr>-->
	<tr>
	<td align="center"><a href="adminseans.php" class="myButton"><p>SEANS İŞLEMLERİ</p></a></td>
	</tr>
	<tr>
	<td ><a href="onayi.php" class="myButton"><p>REZERVASYON İŞLEMLERİ</p></a></td>
	</tr>
	</table><br><br>
	<tr>
	<td ><br/><br/><a href="cikis.php" class="myButton"><p>ÇIKIŞ</p></a></td>
	</tr>
</div>
</div>
</div><br><br>
<!--<div align="center"><h3><a href="admin1.php">Anasayfaya Dön</a></div></h3>-->


<div style="clear: both;"> </div>
</div>

<div id="footer"></div>

</div>
</body>
</form>
</html>