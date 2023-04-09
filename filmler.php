<?php 
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sinema 17</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="utf-8" />
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

echo '<div class="border1"><form method="post" action="saat.php" >';

	echo '<table border="0" width="720">';
	$or=$_GET['id'] ;
	$sorgu2=mysql_query("select * from film where film_id='$or' ");
	if (mysql_num_rows($sorgu2)){
		$sayac=1;
		while($kayit=mysql_fetch_array($sorgu2)){
			$sayac++;
				echo '<div class="border1">';
			echo '<tr>';
			echo '<td width="310px" height="360px" align="center"><img src="'.$kayit["resim"].'" width="270" height="330"/></td>';
			echo '<td >
				<b><font color="#0950d2" size="4"><u>FİLM ADI</u>:</font><font color="#6c010b" size="4">'.$kayit["film_adi"].'</font></b></br></br>
			<b><font color="#0950d" size="4"><u>SURE </u>:</font><font color="#6c010b" size="4">'.$kayit["sure"].'</font></b></br></br>
			<b><font color="#0950d" size="4"><u>TUR </u>:</font><font color="#6c010b" size="4">'.$kayit["tur"].'</font></b></br></br>
			<b><font color="#0950d" size="4"><u>YAPIMCI </u>:</font><font color="#6c010b" size="4">'.$kayit["yapimci"].'</font></b></br></br>
			<b><font color="#0950d" size="4"><u>YÖNETMEN </u>:</font><font color="#6c010b" size="4">'.$kayit["yonetmen"].'</font></b></br></br>
			<h6><font color="#0950d" size="4"><u>OYUNCULAR </u>:</font><font color="#6c010b" size="4">'.$kayit["oyuncular"].'</font></h6></br></br>
			<b><font color="#0950d" size="4"><u>VİZYON TARİHİ </u>:</font><font color="#6c010b" size="4">'.$kayit["vizyon_tarih"].'</font></b>
			<b></td>';
			
			echo'</div>';
			echo '</tr>';
			
			echo '<tr  align="center">';
			
			echo '<td colspan="2" ></br></br><b><font color="#0950d" size="5" ><u>FİLM ÖZETİ </u>:&nbsp;&nbsp;</font><font color="#6c010b" size="4">'.$kayit["ozet"].'</font></b></br></br></br></td>';
			echo '</tr>';
			echo'<tr align="center"></br>';
			echo'<input type="hidden" name="filmadi" value="'.$kayit["film_adi"].'">';
			echo'<input type="hidden" name="filid" value="'.$kayit["film_id"].'">';
			echo '<td colspan="2" align="center"">';
			$gun=date("Y-m-d", time() + 10800);
			$viz = $kayit["vizyon_tarih"];
			if($viz < $gun){
			echo'<input type="submit" class="myButton" value="BİLET AL" name="bilet"/></br></br>';
			}
			else{echo'<input type="text" value="BİLET SATIŞI BAŞLAMAMIŞTIR" class="myButton" style="width:300px;"/>';}
			echo '</td>';
			echo '<td></br></br></br></br>';
			echo '</td>';
			echo '</tr>';
			
		}
		
		
	}
	
	echo '</table></form>';
echo'</div>';
?>


</div>




<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer">
</div>
</div>

</body>
</html>