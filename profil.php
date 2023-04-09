<?php

session_start();

require_once("baglan.php");
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
<div align="center">
<form method="post">
<?php

if($_SESSION['kulladi']){

	$ad=$_SESSION['kulladi'];
	
	
		echo '<div class="border">';
	echo '<font size="4px"><table border="15" align="center" style="border:5px solid #6c010b" >';
	
	echo '<tr>';
	echo '</br><td colspan="5" align="center"><h2></br>HOSGELDİN <font color="red">'.$_SESSION['kulladi'].'</font></h2><br /><br /></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td colspan="5" align="center"><h3><U></br>BİLGİLERİM</U></h3></br></br></td>';
	echo '</tr>';
	
	echo '<tr align="center"><td></br><H3><U>AD<U></H3></br></td><td><H3><U>SOYAD<U></H3></td><td><H3><U>TELEFON<U></H3></td><td><H3><U>MAİL<U></H3></td><td ></td></tr>';
	
$sorgu2="SELECT * FROM musteri where kulladi='$ad' ";
$giden2=mysql_query($sorgu2,$baglan);
while($gelen2=mysql_fetch_array($giden2)){
	
	
	echo '<tr align="center" ><td>'.$gelen2['ad'].'</td><td>'.$gelen2['soyad'].'</td><td>'.$gelen2['telefon'].'</td><td>'.$gelen2['mail'].'</td><td ><input type="submit" name="gun" value="Güncelle" class="myButton1"></td></tr>';}
	
	echo '<tr>';
	echo '<td colspan="5" align="center"><h3><U></br></br>REZERVASYONLARIM</U></h3></br></br></td>';
	echo '</tr>';
	if(isset($_POST['gun'])){
		
		header('location:guncelle.php');
	}
if(isset($_POST['isle'])){
$islemdizi=explode("-",$_POST['isle']);
if($islemdizi[0]=='Sil'){
$sorgu2="DELETE FROM bilet WHERE bilet_id='$islemdizi[1]'";
mysql_query($sorgu2,$baglan);

}
}
$sorgu2="SELECT * FROM bilet where ad='$ad'";
$giden2=mysql_query($sorgu2,$baglan);
while($gelen2=mysql_fetch_array($giden2)){
	
echo "<tr><td>".$gelen2['film_adi']."</td><td>".$gelen2['tarih']."</td><td>".$gelen2['seans_saati']."</td><td>".$gelen2['koltuk']."</td><td><input type=\"submit\" name=\"isle\" value=\"Sil-$gelen2[0]\" class=\"myButton1\"></td></tr>";}
	
	echo '<tr>';
	echo '<td align="center" colspan="5"></br></br></br>Çıkış yapmak için <a href="cikis.php">tıklayın.</a></br></br></br></td>';
	echo '</tr>';
	
}else{
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}
echo "</table></font></br>";
echo '</div>';
?>
</div>	



<div style="clear: both;"> </div>
</div>
</form>

<div id="footer">
</div>
</div>

</body>
</html>
