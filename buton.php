
<form method="GET" >
<input type="submit" class="myadmin" name="btn" value="ADMİN GİRİŞ" /> 
</form>

<?php
	if(isset($_GET['btn'])){
	header("Location: admin1.php");
}
?>