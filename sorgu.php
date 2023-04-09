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

<div id="content"> <br/> 



<div class="orta">
 

 <div class="border">
</br>
        
		</br> 
		
		<div align="center">
		<form  name="form1" method="post" action="sorgu.php" id="kayitform"  ><br/> 

            <h2>Kullanıcı Adı: &nbsp; &nbsp;<input type="text" name="aranan" id="aranan" /></h2><br>

        


		
			<br /><br />
            	<div align="center">	<input type="submit" class="myButton" value= "SORGULA" name="buton"  /> </div>
            			
		</form><br/> <br/>   <br/> 
<?php
include('baglan.php'); 
	if(isset($_POST['buton'])){
		 $ara=$_POST["aranan"];
		 $sorgu=mysql_query("select * from bilet where ad like '$ara'");
	if (empty($ara)){
		echo '<script type="text/javascript">alert("BOŞ ALAN BIRAKTINIZ!!!");</script>';
	}else{
		if (mysql_num_rows($sorgu)>0){
			ECHO '<h1><u>BULUNAN KAYITLAR</u></h1>';
			echo'<font size=\'4px\'><table border="1">';
			echo '<tr align="center"><td ><H3>AD</H3></td><td><H3>SOYAD</H3></td><td><H3>MAİL</H3></td><td><H3>FİLM ADI</H3></td><td><H3>TARİH</H3></td><td><H3>SAAT</H3></td><td><H3>KOLTUK</H3></td></tr>';
			while($kayit=mysql_fetch_array($sorgu)){
				
				echo '<tr align="center"><td>'.$kayit["ad"].'</td><td>'.$kayit["soyad"].'</td><td >'.$kayit["mail"].'</td><td >'.$kayit["film_adi"].'</td><td >'.$kayit["tarih"].'</td><td >'.$kayit["seans_saati"].'</td><td >'.$kayit["koltuk"].'</td></tr>';
				echo '<br/>';
			}
		}else{
			echo 'Eşleşen Kayıt Yok.';
		}
		echo'</table><br/><br/></font>';
	}
}
?>

		</div>
		
</div>	



<div style="clear: both;"> </div>
</div>


<div id="footer">
</div>
</div>

</body>
</html>