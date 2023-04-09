<?php
include("baglan.php");

$gun= $_POST["gun"];
$idi = $_POST['idi'];
$query = mysql_query("select * from seans where film_id ='$idi' and gun_id='$gun' ");
while($seans = mysql_fetch_array($query)){
	
	$isim=$seans['seans_saati'];
		echo"<option value=".$seans["seans_id"].">$isim</option>";
}


?>