<?php
include("baglan.php");

$id= $_POST['id'];


$query = mysql_query("select * from gun where film_id ='$id' ");
while($gun = mysql_fetch_array($query)){
	
	$isim=$gun['tarih'];
		echo"<option value=".$gun["gun_id"].">$isim</option>";
}



?>