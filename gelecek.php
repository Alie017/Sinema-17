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
<li><a href="Sorgu.php">Bilet Sorgula</a></li>
<li><a href="iletisim.php">İletişim</a></li>

</ul>
</div>

<div id="content">

<div class="orta"> 
<?php
include('baglan.php'); 

?>

<?php
//$gun= date("d-m-Y", time() + 10800);
$gun=date("Y-m-d", time() + 10800);



	$sorgu2=mysql_query("select * from film where vizyon_tarih >='$gun'");
	if (mysql_num_rows($sorgu2)){
		$sayac=1;
			
		while($kayit=mysql_fetch_array($sorgu2)){
			$sayac++;
		
			echo '<div class="border" style="margin:0px 17px 25px 25px; padding:0px 0px 0px 0px; float:left; ">';  
			echo '<a href="filmler.php?id='.$kayit['film_id'].'"><img src="'.$kayit["resim"].'" width="190" height="250"/></a>';
			echo '</div>';
			
			
		}
		
	}

?>




</div>


<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>

</body>
</html>