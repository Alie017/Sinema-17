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
</head>
<?php
if(!isset($_SESSION['ad'])){
echo "yanlış sularda yüzüyorsun";

}
?>
<body onload="getCountry();">
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

<div align="center">
<script type="text/javascript"src="jQuery-1.7.1min.js"></script>
<script type="text/javascript" src="includes/js.js"></script>

</head>
<body>
<div class="border"></br></br>
<form action="listele.php" method="post">



<div id="countryList"></div> <br />

<div id="stateList"></div> <br />

<div id="cityList"></div><br /><br />

<input type="submit" name="listele" value="LİSTELE" class="myButton">
</form>
</div>
</div>
<div style="clear: both;"> </div></div>

<div id="footer"></div>

</div>
</body>

</html>