<?php
if(isset($_SESSION['giris'])){
echo'<form method="GET" >';
echo'<input type="submit" class="myadmin" name="btn1" value="PROFİLİM" />';
echo'</form>';

	if(isset($_GET['btn1'])){
	header("Location: profil.php");
}
}
elseif(isset($_SESSION['ad'])){
echo'<form method="GET" >';
echo'<input type="submit" class="myadmin" name="btn1" value="ADMİN" />';
echo'</form>';

	if(isset($_GET['btn1'])){
	header("Location: admin.php");
}
}
else{
echo'<form method="GET" >';
echo'<input type="submit" class="myadmin" name="btn1" value="ÜYE GİRİŞİ" />';
echo'</form>';
	if(isset($_GET['btn1'])){
	header("Location: uyegiris.php");
	
}
}
?>