<?php
include("baglan.php");

$idgun =$_POST['idgun'];
$idfilm =$_POST['idfilm'];

			
			$sql = "SELECT * FROM seans where gun_id='$idgun' and film_id='$idfilm' ";// where film_id=".$kayit['film_id']." and gun_id='$guun'
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['seans_saati'];
		echo"<option value=".$yaz['seans_id']." >$isim</option>";
		
		}
			
		?>
		