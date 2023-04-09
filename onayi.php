<?php ob_start();
@session_start();
include("baglan.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sinema 17</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
$(document).ready(function(){
	
	$('#film').change(function(){

		
		var deger =$(this).val();
		$('#gunleri').empty();
		
		$.post("gunler.php"	,{id:deger},function(a){
			
			$('#gunleri').append(a);
		})	
		
	});

		

	$('#gunleri').change(function(){
		
		var degeral =$(this).val();
		var filmm =$("#film").val();
		$('#seanslari').empty();
		$.post("seanslar.php",{gun:degeral,idi:filmm},function(b){
			
			$('#seanslari').append(b);
			
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

<div id="content"><br/><br/>
<div class="orta">
<a href="admin.php" class="myButton1"><p>Admin Paneli</p></a></td>

<div align="center"><font size="4" ><h1>ADMİN İŞLEMLERİ</h1></font></br></br>

</div>
<br>

<div align="center">
<?php
echo '<form action="listele.php" method="post">';
echo '<div class="border"></br></br>';
echo'<select id="film" name="filmii">';
echo'<option value="0">FİLM SEÇ</option>';

	$bul = mysql_query('select * from film');
	while($goster = mysql_fetch_array($bul)){
		
		$isim=$goster['film_adi'];
		echo"<option value=".$goster["film_id"].">$isim</option>";
	}
	
	echo'</select><br/><br/>';
	
echo'<select id="gunleri" name="tarihii">';
echo'<option value="0">GÜN SEÇ</option>';
echo'</select><br/><br/>';

echo'<select id="seanslari" name="seansii">';
echo'<option value="0">SEANS SEÇ</option>';
echo'</select><br/><br/><br/>';
echo'<input type="submit" name="listele" value="LİSTELE" class="myButton"><br/><br/>';
echo '</div>';
echo '</form>';
?>





</div>

<div style="clear: both;"> </div></div>

<div id="footer"></div>

</div>
</body>
</html>