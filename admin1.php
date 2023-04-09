<?php 
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sinema 17</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
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

<div id="content">

<div class="orta">
<form action="admin1.php" method="post"><div class="border">
<body>
<br><div align="center"><br><h1>ADMİN PANEL GİRİŞİ</h1>
<br><br>
<table>
<tr>
<td><h3>Kullanıcı Adı :</h3></td>
<td><input type="text" name="ad">
</tr>
<tr>
<td><h3>Şifre:</h3></td>
<td><input type="password" name="sifre"></td>
</tr>
</table></BR>
<input type="submit"  class="myButton" value="GİRİŞ" name="btn"></br></br>
<a href="index.php">Anasayfaya Dön</a>

<br>
</div>
<br><br><br>
<div align="center">
kullanıcı adı: admin
<br>
şifre: 123
</div>
<?php
if(isset($_POST['btn'])){
if($_POST['btn']=='GİRİŞ'){
if(@$_POST['ad']=='admin' && $_POST['sifre']=='123'){ //admin kullanıcı adı ve şifresi
session_destroy();
session_start();  
$_SESSION['kulladi']='admin';
header("Location: admin.php");
}
else{echo '<script type="text/javascript">alert("!!!!!!!!!!!!!!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=admin1.php">';}
}
}
?>




</div>
</div>


<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>

</body>
</html>