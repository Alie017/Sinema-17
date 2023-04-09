<?php
include("baglan.php");

$idfilm =$_POST['idfilm'];


	$sql = "SELECT * FROM gun where film_id='$idfilm' ";
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['tarih'];
		echo"<option value=".$yaz['gun_id']." >$isim</option>";
		
		}		
		
		?>
		