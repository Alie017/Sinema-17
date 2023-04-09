

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

<div id="content" >
<?php
include('baglan.php'); 
?>

<div class="orta"> 



<?php
	$gun=date("Y-m-d", time() + 10800);
	//echo $gun;
	

		$sorgu2=mysql_query("select * from film where vizyon_tarih <='$gun' and vizyon_bitis >='$gun' ");
	if (mysql_num_rows($sorgu2)){
	
		
		
		while($kayit=mysql_fetch_array($sorgu2)){
			
			
			
			echo '<div class="border" style="margin:0px 17px 25px 25px; padding:0px 0px 0px 0px; float:left; ">';  
			
			echo '<a href="filmler.php?id='.$kayit['film_id'].'"><img  src="'.$kayit["resim"].'" width="190" height="260"/></a>';
			//echo '<input type="image" id="'.$kayit['id'].'" src="'.$kayit["resim"].'" name="onay" oclick="'.$id = $kayit['id'].'" width="190px"  height="260px">';
			
			echo '</div>';
		
		}
	}
		

?>



</div>

 

<div align="center">





<!--

<script type="text/javascript">
function combo(thelist, theinput) {
    theinput = document.getElementById(theinput);
    var idx = thelist.selectedIndex;
    var content = thelist.options[idx].innerHTML;
    theinput.value = content;
}
</script>
<form method="post">
include('baglan.php'); 

echo'<form method="POST">';
	$sql = "SELECT * FROM film ";
			$sonuc = mysql_query($sql);
		while ($yaz=mysql_fetch_array($sonuc))
		{
			
		$isim=$yaz['film_adi'];
		echo"<option value=".$yaz['id']." >$isim</option>";
		}
		
echo'</form>'; -->

		
</select>

</BR>
</BR>
</BR>




<!--<input type="text" id="theinput" name="theinput" />
<select name="thelist" onChange="combo(this, 'theinput')">
  <option>one</option>
  <option>two</option>
  <option>three</option>
</select>

<script>
function combo(thelist, theinput) {
    theinput = document.getElementById(theinput);
    var idx = thelist.selectedIndex;
    var content = thelist.options[idx].innerHTML;
    theinput.value = content;
}
</script>




<input type="submit" class="myButton" value="BİLET AL" name="bilet"/>
</form>
?php
	
	if(isset($_POST['bilet'])){
		$isim= $_POST['theinput'];
	if(empty($_SESSION['kulladi'])){
	echo '<script type="text/javascript">alert("BİLET ALABİLMEK İÇİN ÜYE GİRİŞİ YAPINIZ!");</script>';
	echo $isim;
	echo '<meta http-equiv="refresh" content="0;URL=uyegiris.php">';
}
else{
	echo '<meta http-equiv="refresh" content="0;URL=saat?film_adi='.$isim.'.php">';
}

}
?>-->
</div>



<div style="clear: both;"> </div>
</div>

<div id="bottom"> </div>
<div id="footer"></div>
</div>

</body>
</html>