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
<form action="adminuye.php" method="post">
<div align="center">
<?php
include("baglan.php");
/*
if(isset($_POST['islem'])){
$islemdizi=explode("-",$_POST['islem']);
if($islemdizi[0]=='Onayla'){
$sorgu3="UPDATE onayli SET onay='1' WHERE koltuk='$islemdizi[1]'";
mysql_query($sorgu3,$baglan);
echo $islemdizi[1]."Onaylandı";
}
if($islemdizi[0]=='Sil'){
$sorgu2="DELETE FROM onayli WHERE koltuk='$islemdizi[1]'";
mysql_query($sorgu2,$baglan);
echo $islemdizi[1]." Silindi";
}
}


$sorgu1="SELECT * FROM bilet";
$giden1=mysql_query($sorgu1,$baglan);
while($gelen1=mysql_fetch_array($giden1)){
echo "<tr><td>".$gelen1[1]."</td><td>".$gelen1[0]."</td><td><input type=\"submit\" name=\"islem\" value=\"Onayla-$gelen1[0]\" class=\"myButton1\"></td><td><input type=\"submit\" name=\"islem\" value=\"Sil-$gelen1[0]\" class=\"myButton1\"></td></tr>";
}
echo "</table></font></br></br>";
echo '</br></br></br></br>';
*/

echo '<div class="border"></br></br>';

//echo '</br></br></br></br>';

echo "<font size=\"4px\"></br></br><table border=\"1\" align=\"center\">";

if(isset($_POST['islem'])){
$islemdizi=explode("-",$_POST['islem']);
if($islemdizi[0]=='Sil'){
$sorgu2="DELETE FROM musteri WHERE musteri_id='$islemdizi[1]'";
mysql_query($sorgu2,$baglan);

}
}
echo "<font size=\"4px\">";
echo'<tr><td colspan="6" align="center"></br><h3>ÜYELER</h3></br></br></td></tr>';
$sorgu2="SELECT * FROM musteri";
$giden2=mysql_query($sorgu2,$baglan);
while($gelen2=mysql_fetch_array($giden2)){

echo "<tr><td>".$gelen2['ad']."</td><td>".$gelen2['soyad']."</td><td>".$gelen2['telefon']."</td><td>".$gelen2['mail']."</td><td><input type=\"submit\" name=\"islem\" value=\"Sil-$gelen2[0]\" class=\"myButton1\"></td></tr>";
}

echo "</table></font></br></br>";
echo '</br></br></br></br>';

echo '</div>';
?>
</div>

<div style="clear: both;"> </div></div>

<div id="footer"></div>

</div>
</body>
</form>
</html>