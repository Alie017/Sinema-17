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

<div id="content"><br/><br/>
<div class="orta">

<a href="admin.php" class="myButton1"><p>Admin Paneli</p></a></td>

<div align="center"><font size="4" ><h1>ADMİN İŞLEMLERİ</h1></font></br></br>

</div>
<br>
<div align="center">

<?php
	$baglanti=@mysql_connect("localhost","root","") or die("Mysql'e bağlantı kurulamadı!") ;
	mysql_select_db("sinema1",$baglanti) or die("Veritabanına bağlantı kurulamadı!");
	mysql_query("Set names 'utf-8'");
	mysql_query("set character set utf-8");
	mysql_query("set collation_connection= 'utf-8_general_ci'");
	if(isset($_POST["kaydet"])){
		if ($_FILES["resim"]["size"]<1024*1024){
			if ($_FILES["resim"]["type"]=="image/jpeg"){
				if(empty($_POST["yap"])){$yapimci=$_POST["yapimci"];}
				else{$yapimci=$_POST["yap"];}
				
				if(empty($_POST["yon"])){$yonetmen=$_POST["yonetmen"];}
				else{$yonetmen=$_POST["yon"];}
				
				
				
				$filmadi=$_POST["film_adi"];
				$tur=$_POST["tur"];
				$sure=$_POST["sure"];
				$ozet=$_POST["ozet"];
				$vizyon=$_POST["vizyon_tarih"];
				$vizyonbit=$_POST["vizyon_bitis"];
				
				
				//if(empty($_POST["oyuncu"])){
					
					$chkbox = $_POST['chkbox'];
					$chkboxa = $_POST['chkboxa'];
 
				$chkNew = "";  
				$chkOld = "";
 
					foreach($chkbox as $chkNew1)  
					{  
					$chkNew .= $chkNew1 . "-";  
					}  

					foreach($chkboxa as $chkNew2)  
					{  
					$chkOld .= $chkNew2 . "-";  
					}  
					
					
					$birles = $chkNew.$chkOld;
				//else{$oyuncular=$_POST["oyuncu"];}
				 
 
	
				/*$yonetmen=$_POST["yonetmen"];
				$yapimci=$_POST["yapimci"];
				$oyuncular=$_POST["oyuncular"];*/
				
				$dosya_adi=$_FILES["resim"]["name"];
				$uret=array("as","rt","ty","yu","fg");
				$uzanti=substr($dosya_adi,-4,4);
				$sayi_tut=rand(1,10000);
				$yeni_ad="dosyalar/".$uret[rand(0,4)].$sayi_tut.$uzanti;
				if (move_uploaded_file($_FILES["resim"]["tmp_name"],$yeni_ad)){
					echo '<h3>FİLM BAŞARIYLA EKLENDİ</h3>';
					$sorgu=mysql_query("insert into film (resim,film_adi,tur,sure,yonetmen,yapimci,oyuncular,ozet,vizyon_tarih,vizyon_bitis) values ('$yeni_ad','$filmadi','$tur','$sure','$yonetmen','$yapimci','$birles','$ozet','$vizyon','$vizyonbit')");
					$sorgu=mysql_query("insert into oyuncular (oyun_adi) values ('$chkOld')");
					
					if(empty($_POST["yap"])){$yapimci=$_POST["yapimci"];
					
					$sorgu=mysql_query("insert into yapimci (yap_adi) values ('$yapimci')");
					}
				
					if(empty($_POST["yon"])){
						$yonetmen=$_POST["yonetmen"];
					$sorgu=mysql_query("insert into yonetmen (yon_adi) values ('$yonetmen')");
					}
					
					//if ($sorgu){
						//echo 'Veritabanına kaydedildi.';}
						//else{echo 'Kayıt sırasında hata oluştu!';
					}
				}//else{echo 'Dosya Yüklenemedi!';}
				
			}//else{echo 'Dosya yalnızca jpeg formatında olabilir!';}
			
		}//else{echo 'Dosya boyutu 1 Mb ı geçemez!';}
		
		
	
					
	else if(isset($_POST["guncelle"])){
		if ($_FILES["guncelleResim"]["size"]<1024*1024){
			if ($_FILES["guncelleResim"]["type"]=="image/jpeg"){
				$dosya_adi=$_FILES["guncelleResim"]["name"];
				$uret=array("as","rt","ty","yu","fg");
				$uzanti=substr($dosya_adi,-4,4);
				$sayi_tut=rand(1,10000);
				$yeni_ad="dosyalar/".$uret[rand(0,4)].$sayi_tut.$uzanti;
				if (move_uploaded_file($_FILES["guncelleResim"]["tmp_name"],$yeni_ad)){
					echo '<h3>FİLM BAŞARIYLA GÜNCELLENDİ</h3>';
					$id=$_POST["id"];
					$filmad=$_POST["film_adi"];
					$sure1=$_POST["sure"];
					$tur1=$_POST["tur"];
					$yonetmen1=$_POST["yonetmen"];
					$yapimci1=$_POST["yapimci"];
					$oyuncular1=$_POST["oyuncular"];
					$ozet1=$_POST["ozet"];
					$vizyon1=$_POST["vizyon_tarih"];
					$vizyon2=$_POST["vizyon_bitis"];
					$silmeSorgu=mysql_fetch_array(mysql_query("select * from film where film_id='$id'"));
					if(unlink($silmeSorgu["resim"])) //echo 'Eski dosya Silindi.';
					
					
				
					
					$sorgu=mysql_query("update film set resim='$yeni_ad' , film_adi='$filmad' , sure='$sure1' , yonetmen='$yonetmen1' , yapimci='$yapimci1' , oyuncular='$oyuncular1' , ozet='$ozet1' , vizyon_tarih='$vizyon1', vizyon_bitis='$vizyon2' , tur='$tur1' where film_id='$id'  ");		
					//if ($sorgu)
					//{echo 'Dosya yüklendi';}

					
					//else{echo 'Güncelleme sırasında hata oluştu!';}

				}
				//else{echo 'Dosya Yüklenemedi!';}
				
			}
			//else{echo 'Dosya yalnızca jpeg formatında olabilir!';}
			
		}//else{echo 'Dosya boyutu 1 Mb ı geçemez!';}
		
	}
		else if(isset($_POST["kaldir"])){
					$id=$_POST["id"];
					$kaldir =(mysql_query("delete from film where film_id='$id'"));
					
				
			
			
		}
		/*if(empty($_POST["yap"])){$yapimci=$_POST["yapimci"];}
		else{$yapimci=$_POST["yap"];}*/
	
?>
<div class="border">
<div align="center">

<table border="0" width="740px" ></br>
<form action="adminfilm.php" method="post" name="form1" enctype="multipart/form-data">
	<tr>
	<td align="center" colspan="3"></br><h1><ins>YENİ FİLM EKLE</ins></h1><br/></br></td>

	</tr>
		<tr>
		<td align="right"><h3> FİLM ADI : </h3></br></td>
		<td width="250px" ><input type="text" name="film_adi"  style="width:250px;height:25px"/></br></br></td>
		</tr>
		<tr>
		<td align="right"><h3> SURE : </h3></br></td>
		<td><input type="text" name="sure" style="width:250px;height:25px"/></br></br></td>
		</tr>
		<tr>
		<td align="right"><h3> TUR : </h3></br></td>
		<td><input type="text" name="tur" style="width:250px;height:25px"/></br></br></td>
		</tr>
		<tr>
		<td align="right" style="padding:10px 0px 0px 0px"><h3> YAPIMCI : </h3></br></td>
		<td>
			<?php
		echo '<select name="yap">';
			$sql = "SELECT * FROM yapimci ORDER BY yap_adi ASC ";// where film_id=".$kayit['film_id']." and gun_id='$guun'
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['yap_adi'];
		echo"<option >$isim</option>";
		
		}		
	echo '</select>';	
		
?></td>
		<td width="220px" ><input type="text" name="yapimci" style="height:20px;width:200px; margin:10px 0px 0px 0px"/></br></br></td>
		</tr>
		<tr>
		<td align="right" style=" padding:10px 0px 0px 0px"><h3> YÖNETMEN : </h3></br></td>
		<td>
			<?php

		echo '<select name="yon">';
			$sql = "SELECT * FROM yonetmen ORDER BY yon_adi ASC ";// where film_id=".$kayit['film_id']." and gun_id='$guun'
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
			$isim=$yaz['yon_adi'];
		echo"<option>$isim</option>";
		
		}		
	echo '</select>';	
		
?></td>
		<td><input type="text" name="yonetmen" style="height:20px;width:200px; margin:10px 0px 0px 0px"/></br></br></td>
		</tr>
		<tr>
		<td align="right" style=" padding:10px 0px 0px 0px"><h3> OYUNCULAR : </h3></br></td>
		<td>
		<div class="container">
		<?php
		;
			$sql = "SELECT * FROM oyuncular ORDER BY oyun_adi ASC ";// where film_id=".$kayit['film_id']." and gun_id='$guun'
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
		
		$isim=$yaz['oyun_adi'];
		echo' <input type="checkbox" name="chkbox[]" value="'.$isim=$yaz['oyun_adi'].'"><label>'.$isim.'</label><br/>';
		
		}		
	
		
?>
		</div>
		</td>
		<td><input type="text" name="chkboxa[]" style="height:20px; width:200px; margin:10px 0px 0px 0px"/></br></br></td>
		</tr>
		<tr>
		<td align="right"><br/><h3> VİZYON TARİHİ : </h3></br></td>
		<td><br/><input type="text" name="vizyon_tarih" style="width:250px;height:25px"/></br></br></td>
		</tr>
		<tr>
		<td align="right"><h3> VİZYON BİTİŞ TARİHİ : </h3></br></td>
		<td><input type="text" name="vizyon_bitis" style="width:250px;height:25px"/></br></br></td>
		</tr>
		<tr>
		<td align="right"><h3> ÖZET : </h3></br></td>
		<td><textarea cols="34" name="ozet"></textarea></br></br></td>
		</tr>
		
	<tr>
	<td align="center" colspan="3"></br></br><input type="file" class="myButton1" name="resim"/></br>
	<input type="submit" name="kaydet" class="myButton1" value="Kaydet"/><br/></br></td>
	</tr>
</form>
</table>
</div>
</div>
<div style="float:left; padding:0px 0px 0px 0px;" >
<div class="border1">
<?php
	$sorgu2=mysql_query("select * from film");
	if (mysql_num_rows($sorgu2)){
		echo '<table border="1" width="740" style="border:#6c010b; size:1px;">';
		$sayac=1;
		while($kayit=mysql_fetch_array($sorgu2)){
			$sayac++;
			echo '<form action="" method="post" name="form'.$sayac.'" enctype="multipart/form-data">';
			echo '<tr>';
			echo '<td><img src="'.$kayit["resim"].'" width="190" height="250"/></td>';
		echo '<td align="center" width="300px">
			<font color="red" size="4"><u>FİLM ADI</u></font><h3>'.$kayit["film_adi"].'</h3></font></br></br>
			<h3><u>SURE </u>:'.$kayit["sure"].'</h3></br>
			<h3><u>TUR </u>:'.$kayit["tur"].'</h3></br>
			<h3><u>YAPIMCI </u>:'.$kayit["yapimci"].'</h3></br>
			<h3><u>YÖNETMEN </u>:'.$kayit["yonetmen"].'</h3></br>
			<h3><u>OYUNCULAR </u>:'.$kayit["oyuncular"].'</h3></br>
			<h3><u>VİZYON TARİHİ </u>:'.$kayit["vizyon_tarih"].'</h3></br>
			<h3><u>VİZYON BİTİŞ </u>&nbsp;&nbsp;&nbsp;:'.$kayit["vizyon_bitis"].'</h3></br></br>
			
			</td>';
			echo '<td align="right" width="260px">
			
		<h3> FİLM ADI : </h3></br>
		<h3> SURE : </h3></br>
		<h3> TUR : </h3></br>
		<h3> YAPIMCI : </h3></br>
		<h3> YÖNETMEN : </h3></br>
		<h3> OYUNCULAR : </h3></br>
		<h3> VİZYON TARİHİ : </h3></br>
		<h3> VİZYON BİTİŞ : </h3></br>
		<h3> ÖZET : </h3></br></br></br></br></br>
		</td>';
		echo '<td width="500px">
		<input type="text" name="film_adi"/></br></br>
		<input type="text" name="sure"/></br></br>
		<input type="text" name="tur"/></br></br>
		<input type="text" name="yapimci"/></br></br>
		<input type="text" name="yonetmen"/></br></br>
		<input type="text" name="oyuncular"/></br></br>
		<input type="text" name="vizyon_tarih"/></br></br>
		<input type="text" name="vizyon_bitis"/></br></br>
		<textarea cols="22" name="ozet"></textarea></br></br>
		<input type="hidden" name="id" value="'.$kayit["film_id"].'"/>
				
				<input type="submit" name="guncelle" class="myButton1" value="Güncelle"/>
				<input type="submit" name="kaldir" class="myButton1" value="Filmi Kaldır"/>
				<div align="center"><input type="file" class="myButton1" name="guncelleResim" style="width:75px; "/></div>
			</td>';
			echo '</tr>';
			echo '</form>';
		}
		echo '</table>';
	}
?>
</div>
</div>



<div style="clear: both;"> </div></div>

<div id="footer"></div>

</div>
</body>
</form>
</html>