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
<link rel="stylesheet" type="text/css" href="yazdir.css" media="print" />
</head>

<body>
<div id="arka">
<div id="wrap">

<div id="top"> </div>

<div id="header">

<a href="index.php"><img src="images/logo2.png" width="300" height="100" ></a>
<img src="images/logo11.png" width="300" height="100" ></a>
<div id="headeraa" align="center">
<img src="images/logo2.png" width="300" height="100" ></a>
<img src="images/logo11.png" width="300" height="100" ></a>
</div>
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
<a href="admin.php" class="myButton1" id="ac"><p>Admin Paneli</p></a></td>

<div id="aa" align="center"><font size="4" ><h1>ADMİN İŞLEMLERİ</h1></font></br></br>

</div>
<br>

<div align="center">
<?php
include("baglan.php");
$fii =$_POST['filmii'];
$guu = $_POST['tarihii'];
$saa = $_POST['seansii'];

$sorgu2="SELECT * FROM gun  WHERE  film_id='".$fii."' AND gun_id='".$guu."' ";
$giden2=mysql_query($sorgu2,$baglan);
while($gelen2=mysql_fetch_array($giden2)){
	$tarih = $gelen2['tarih'];
}

$sorgu1="SELECT * FROM seans  WHERE  film_id='".$fii."' AND gun_id='".$guu."' and seans_id='".$saa."'   ";
$giden1=mysql_query($sorgu1,$baglan);
while($gelen1=mysql_fetch_array($giden1)){
	$seans = $gelen1['seans_saati'];
}
$sorgu3="SELECT * FROM film  WHERE  film_id='".$fii."'";
$giden3=mysql_query($sorgu3,$baglan);
while($gelen3=mysql_fetch_array($giden3)){
	$film = $gelen3['film_adi'];
}

?>
<form action="listele.php" method="post">

<input type="hidden" name="filmii" value="<?=$fii?>">
<input type="hidden" name="tarihii" value="<?=$tarih?>">
<input type="hidden" name="seansii" value="<?=$seans?>">    

<?php
echo '<div id="arkaa">'; 
echo '<div id="no">'; 
echo '<br/><br/><h1>FİLM ADI = '.$film.'</h1> ';
echo '<h1>TARİH = '.$tarih.'</h1>  ';
echo '<h1>SEANS = '.$seans.'</h1><br/><br/><br/>  ';
echo '</div>';


echo '<div id="yazz"><table border="1" align="center">';
echo'<tr align=center><td width="250px;"><ins>AD</ins></td><td width="250px;"><ins>SOYAD</ins></td><td width="250px;"><ins>TELEFON</ins></td><td width="250px;"><ins>E-MAİL</ins></td><td width="250px;"><ins>KOLTUK</ins></td></tr>';	
$sorgu1="SELECT * FROM bilet  WHERE  film_id='".$fii."' AND tarih='".$tarih."' AND seans_saati='".$seans."' ";//
$giden1=mysql_query($sorgu1,$baglan);
while($gelen1=mysql_fetch_array($giden1)){

echo "<tr ><td width='250px;'>".$gelen1['ad']."</td><td width='250px;'>".$gelen1['soyad']."</td><td width='250px;'>".$gelen1['telefon']."</td><td width='250px;'>".$gelen1['mail']."</td><td width='250px;'>".$gelen1['koltuk']."</td></tr>";
}
echo '</table></div>';
echo '</div>';
echo '<div id="yazma" class="border"></br></br>';
echo "<font size=\"4px\"></br></br><table border=\"1\" align=\"center\" >";



	/*echo'<input type="text"  value="'.$_POST["filmi"].'">';
	echo'<input type="text"  value="'.$_POST["tarihi"].'">';
	echo'<input type="text"  value="'.$_POST["seansi"].'">';*/
	
	
if(isset($_POST['isle'])){
$islemdizi=explode("-",$_POST['isle']);
if($islemdizi[0]=='Sil'){
$sorgu2="DELETE FROM bilet WHERE bilet_id='$islemdizi[1]'";
mysql_query($sorgu2,$baglan);
header("location:http://localhost/son/onayi.php");
}
}


echo "<font size=\"4px\">";
$sorgu2="SELECT * FROM bilet  WHERE  film_id='".$fii."' AND tarih='".$tarih."' AND seans_saati='".$seans."' ";//
$giden2=mysql_query($sorgu2,$baglan);
while($gelen2=mysql_fetch_array($giden2)){
	
echo "<tr ><td>".$gelen2['ad']."</td><td>".$gelen2['soyad']."</td><td>".$gelen2['telefon']."</td><td>".$gelen2['film_adi']."</td><td>".$gelen2['tarih']."</td><td>".$gelen2['seans_saati']."</td><td>".$gelen2['koltuk']."</td><td id=\"cc\"><input type=\"submit\" name=\"isle\" value=\"Sil-$gelen2[0]\" class=\"myButton1\"></td></tr>";
}

echo "</table></font></br></br>";
echo'<a href="javascript:void(0)" Onclick="window.print()" class="myButton" id="yaz">YAZDIR</a>';
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