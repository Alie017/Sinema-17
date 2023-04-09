
<form method="GET" >
<input type="submit" class="myButon" name="kayit" value="KAYIT OL" /> 
</form>
<?php
	if(isset($_GET['kayit'])){
	header("Location: kayit.php");
}
?>