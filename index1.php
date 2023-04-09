<?php 
session_start();
include("baglan.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sinema 17</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />

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
<li><a href="Sorgu.php">Bilet Sorgula</a></li>
<li><a href="iletisim.php">İletişim</a></li>

</ul>
</div>

<div id="content">

<div class="orta">
<?php

if(empty($_POST['tarih'])){
	$filmid =$_POST['filid'];
	echo'<meta http-equiv="refresh" content="0;URL=filmler.php?id='.$filmid.'">';
	echo'<script type="text/javascript">alert("BİLET ALABİLMEK İÇİN BİR TARİH SEÇİNİZ!");</script>';
	}	
	if(empty($_POST['saat'])){
	$filmid =$_POST['filid'];
	echo'<meta http-equiv="refresh" content="0;URL=filmler.php?id='.$filmid.'">';
	echo'<script type="text/javascript">alert("BİLET ALABİLMEK İÇİN BİR SAAT SEÇİNİZ!");</script>';
	}	
	
?>

<?php
$ad=$_SESSION['kulladi'];
@$soyad=$_SESSION['kullsoyad'];
@$mail=$_SESSION['email'];
@$tel=$_SESSION['telefon'];
$tarihii =$_POST['tarih'];
$saati =$_POST['saat'];
$film = $_POST['filmadi'];
$filmid =$_POST['filid'];


?>
<form action="index1.php" method="post">

<input type="hidden" name="filmadi" value="<?=$film?>">
<input type="hidden" name="filid" value="<?=$filmid?>">
<input type="hidden" name="tarih" value="<?=$tarihii?>">    
<input type="hidden" name="saat" value="<?=$saati?>">
<table border="1" align="center">
<tr>
<tr> <h1><div align="center">Lütfen Koltuğunuzu Seçiniz</h1><br<h3><div valign="bottom" align="center">Mavi koltuklar rezerve edilmiş koltuklardır.</div></div></h3></br></br>
<?php

$sorgu4="SELECT * FROM gun  WHERE  film_id='$filmid' AND gun_id='$tarihii' ";
$giden4=mysql_query($sorgu4,$baglan);
while($gelen4=mysql_fetch_array($giden4)){
	$tarihi = $gelen4['tarih'];
}

if(isset($_POST['btn3'])){
if($_POST['btn3']=='Rezerve Et'){
	
$sorgu1="INSERT INTO bilet(ad,soyad,telefon,koltuk,seans_saati,film_adi, film_id,tarih) VALUES ('$_POST[ad]','$_POST[soyad]','$_POST[telefon]','$_POST[btnad]','$saati','$film','$filmid','$tarihi')";
mysql_query($sorgu1,$baglan);

}
}

if(isset($_POST['btn2'])){
if($_POST['btn2']=='EVET'){
$sorgu1="INSERT INTO bilet(ad,soyad,mail,telefon,koltuk,seans_saati,film_adi, film_id,tarih) VALUES ('$ad','$soyad','$mail','$tel','$_POST[btnad]','$saati','$film','$filmid','$tarihi')";
mysql_query($sorgu1,$baglan);

}
}

$dizi=array("Z20");
$sorgu1="SELECT koltuk FROM bilet WHERE film_id=".$filmid." AND tarih='".$tarihi."'  AND seans_saati='".$saati."'";//
$giden1=mysql_query($sorgu1,$baglan);
$sq=0;
while($gelen1=mysql_fetch_array($giden1)){
$dizi[$sq]=$gelen1[0];
$sq++;
}
for($i=0;$i<=99;$i++){
if($i%10==0){
$k=chr(round($i/10)+65);
echo "<tr><td bgcolor=\"orange\">".$k;
}
$j=($i%10)+1;
foreach($dizi as $deger){
if($deger=="$k$j"){
$each=1;
break;
}
else{
$each=0;
}
}
if($each==1){
echo "<td bgcolor=\"grey\"><input type=\"submit\" disabled=\"false\" class=\"awesome2\" name=\"btn\" value=\"$k$j\" /></td>";
}
else{
echo "<td bgcolor=\"grey\"><input type=\"submit\" class=\"awesome\" name=\"btn\" value=\"$k$j\" /></td>";
}
}

?>
</td>
</tr>
</table>
<div align="center">
<?php
if(isset($_POST['btn3'])){
if($_POST['btn3']=='Rezerve Et'){
echo "<h3>Koltuk Basariyla Rezerve Edildi</h3>";

}}
$isim = 'admin';
if($_SESSION['kulladi'] == $isim){
if(isset($_POST['btn2'])){
if($_POST['btn2']=='EVET1'){
	
echo "<div align=\"center\"><h4><br>Koltuk Basariyla Rezerve Edildi</h4></div>";
echo "<p>Lütfen işlemi tamamlamak için müşteri bilgilerinizi giriniz</p><br>";
echo "<h3>İsim:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" name=\"ad\"></h3><br/>";
echo "<h3>Soyad:&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"text\" name=\"soyad\"></h3><br/>";
echo "<h3>Telefon:&nbsp;&nbsp;<input type=\"text\" name=\"telefon\"></h3>";
echo "<h4><br>Koltuk No: ". $_POST['btnad'].'</h4>';
$btnad=$_POST['btnad'];
echo "<input type=\"hidden\" name=\"btnad\" value=\"$btnad\">";
echo "<br><input type=\"submit\" name=\"btn3\" value=\"Rezerve Et\" class=\"myButton\"> <input type=\"submit\" name=\"btn3\" value=\"Iptal\" class=\"myButton\">";
}
if($_POST['btn2']=='HAYIR'){
echo "<br><div align=\"center\"><h4>Koltuk Rezerve Edilmedi</h4></div>";
}
}
}
if($_SESSION['kulladi']){
if(isset($_POST['btn2'])){
if($_POST['btn2']=='EVET'){
echo "<div align=\"center\"><h4><br>Koltuk Basariyla Rezerve Edildi</h4></div>";
//echo "<br>Koltuk No:". $_POST['btnad'];
$btnad=$_POST['btnad'];
echo "<input type=\"hidden\" name=\"btnad\" value=\"$btnad\">";
}
}}

if($_SESSION['kulladi'] == $isim){
if(isset($_POST['btn'])){
$btnad=$_POST['btn'];
echo "<div align=\"center\"<br><h3>".$_POST['btn']." Numaralı Koltugu sectiniz rezerve etmek ister misiniz?</h3></div>";
echo '<br><div align="center"> <input type="submit" name="btn2" value="EVET1" class="myButton"> <input type="submit" name="btn2" value="HAYIR" class="myButton"></div>';
echo "<input type=\"hidden\" name=\"btnad\" value=\"$btnad\">";
}
}
else if(isset($_POST['btn'])){
$btnad=$_POST['btn'];
echo "<div align=\"center\"<br><h3>".$_POST['btn']." Numaralı Koltugu sectiniz rezerve etmek ister misiniz?</h3></div>";
echo '<br><div align="center"> <input type="submit" name="btn2" value="EVET" class="myButton"> <input type="submit" name="btn2" value="HAYIR" class="myButton"></div>';
echo "<input type=\"hidden\" name=\"btnad\" value=\"$btnad\">";
}




?>
</div></div>
<br><br><br> 
<div style="clear: both;"> </div>
</div>

<div id="footer">
</div>
</div>
</body>
</form>
</html>
