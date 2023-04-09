<?php 
session_start();
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sinema 17</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
$(document).ready(function(){
	
	$('#tarih').change(function(){

		
		var deger =$(this).val();
		var degeri =$('#id').val();
		$('#saat').empty();
		
		$.post("saatseans.php",{idgun:deger,idfilm:degeri},function(a){
			
			$('#saat').append(a);
		})	
	});
});
</script>
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
<?php
include('baglan.php'); 
?>
<div id="content">

<div class="border">
<div class="orta"> 
<div align="center">

<?php

if(isset($_POST['bilet'])){
	if(empty($_SESSION['kulladi'])){
	echo'<meta http-equiv="refresh" content="0;URL=uyegiris.php">';
	echo'<script type="text/javascript">alert("BİLET ALABİLMEK İÇİN ÜYE GİRİŞİ YAPINIZ!");</script>';
}
}
echo '<table border="0" width="750">';
$ar=$_POST['filid'];	

$sorgu2=mysql_query("select * from film where film_id='$ar'");
	if (mysql_num_rows($sorgu2)){
		$sayac=1;
		while($kayit=mysql_fetch_array($sorgu2)){
			$sayac++;
			
			echo '<tr><td width="310px" height="360px" align="center"><img src="'.$kayit["resim"].'" width="270" height="330"/></td>';
			
			
		}
		
	}
	
	$bugun=date("Y-m-d", time() + 10800);
	

	echo '<form method="post" action="index1.php" >'; 

	echo '<td align="center"><h2>TARİH SEÇİNİZ</h2>';
		echo '<select name="tarih" id="tarih">';	
		echo'<option value="0">TARİH SEÇİNİZ</option>';
			$sql = "SELECT * FROM gun WHERE film_id='$ar' and tarih>='$bugun' ";// 
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['tarih'];
		echo"<option value='".$yaz['gun_id']."'>".substr($isim,8,2)."-".substr($isim,5,2)."-".substr($isim,0,4)."</option>";
		
		}
		echo '</select>';
		
		echo'</br></br></br>';
	
	
		echo '<h2>SAAT SEÇİNİZ</h2>';
		echo '<select name="saat" id="saat">';	
			echo'<option value="0">SEANS SEÇİNİZ</option>';
	echo '</select></tr></td>';
	echo '</table>';
	
	echo'</br></br></br>

	<input type="hidden" name="filmadi" value="'.$_POST["filmadi"].'">
	<input type="hidden" name="filid" id="id" value="'.$_POST["filid"].'" >
	<input type="submit" class="myButton" value="BİLET AL" name="biletal" /></br></br>';
	

echo '</form>';
	?>

	
	
<div style="clear: both;"> </div>



<div id="footer"></div>
</div>

</body>
</html>