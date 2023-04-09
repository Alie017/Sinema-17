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
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
$(document).ready(function(){
	
	
	
	$('#gun').change(function(){

		
		var deger =$(this).val();
		var degera =$('#name').val();
		$('#seans').empty();
		$.post("adminse.php",{idgun:deger,idfilm:degera},function(a){
			
			$('#seans').append(a);
		})	
	});
});

</script>

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
<?php
include("baglan.php");
				if(isset($_POST["kaldirgun"])){
					$id=$_POST["id"];
					$gunn=$_POST["gun"];
					$_SESSION['gunn'] = $gunn;
					$kaldir =(mysql_query("delete from gun where film_id='$id' and gun_id='$gunn'"));
					
}
if(isset($_POST["kaldirseans"])){
					$id=$_POST["id"];
					$seans=$_POST["seans"];
					$kaldir =(mysql_query("delete from seans where film_id='$id' and seans_id='$seans'  "));
					
}
if(isset($_POST["gunee"])){
					$id=$_POST["id"];
					$tarih=$_POST["gunekle"];
					$gunekle = mysql_query("insert into gun (film_id,tarih) values ('$id','$tarih')");
					
					
}
if(isset($_POST["seansekle"])){
					$id=$_POST["id"];
					$seans=$_POST["seanss"];
					$gun=$_POST["gun"];
					$gunekle = mysql_query("insert into seans (film_id,gun_id,seans_saati) values ('$id','$gun','$seans')");
					
					
}
?>

<div class="border">
<div align="center">

<form method="post" name="form1" enctype="multipart/form-data">

<?php

include("baglan.php");
echo '<table border="1" width="740" style="border:#6c010b; size:1px;">';

	$sorgu2=mysql_query("select * from film ");
	if (mysql_num_rows($sorgu2)){
		echo '<table border="1" width="740" style="border:#6c010b; size:1px;">';
		
		while($kayit=mysql_fetch_array($sorgu2)){
			
			echo '<form action="" method="post" >';
			echo '<tr>';
			echo '<td><img src="'.$kayit["resim"].'" width="190" height="250"/></td>';
			
			echo '<td align="right" width="260px">
			
		<h3> TARİH : </h3></br></br>
			<h3> SEANS SAATİ : </h3></br>
				<h3> YENİ TARİH : </h3></br>
		<h3> YENİ SEANS SAATİ : </h3>
		</td>';
		
		?>
		
		<td width="800px">
		
		
	<?php
		echo '<select name="gun" id="gun" >';
		echo '<option value="0">GUN</option>';
			$sql = "SELECT * FROM gun where film_id='".$kayit["film_id"]."' ";
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['tarih'];
		echo"<option value=".$yaz['gun_id']." >$isim</option>";
		
		}	
		echo '</select>';	
	echo'<input type="submit" name="kaldirgun" class="myButton1" value="Tarih Kaldır"/>';
	echo '</br></br>';
	
			echo '<select name="seans" id="seans">';
			echo '<option value="0">SEANS</option>';
			$sql = "SELECT * FROM seans where film_id='".$kayit["film_id"]."' ";// where film_id=".$kayit['film_id']." and gun_id='$guun'
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['seans_saati'];
		echo"<option value=".$yaz['seans_id']." >$isim</option>";
		
		}
		
			echo '</select>';	
			
	echo'<input type="submit" name="kaldirseans" class="myButton1" value="Seans Kaldır" id="sil"/>';
	echo '</br></br>';
		
		echo'<input type="hidden" name="id" id="name" value="'.$kayit["film_id"].'"/>';
		echo'<input type="text" name="gunekle"/>';
		echo'<input type="submit" name="gunee" class="myButton1" value="EKLE"/></br></br>';
		echo'<input type="text" name="seanss"/>';
		echo'<input type="submit" name="seansekle" class="myButton1" value="EKLE"/>';
		
?>
	</td>
	<?php
	echo '</tr>';
	
			echo '</form>';
		}
		echo '</table>';
	}
	
	?>
</div>
</div>
<div style="clear: both;"> </div>

<div id="footer"></div>

</div>
</body>
</form>
</html>