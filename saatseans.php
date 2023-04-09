<?php
session_start();
ob_start();
include("baglan.php");

$idgun =$_POST['idgun'];
$idfilm = $_POST['idfilm'];



			$sql = "SELECT * FROM seans where film_id='$idfilm' and gun_id='$idgun'  "; //where gun_gun_id='$' 	gun_film_id='$' VE JAVASCRİPT LİSTE OLAYI
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['seans_saati'];
		echo"<option >$isim</option>";
		
		}
		
		
		?>
		