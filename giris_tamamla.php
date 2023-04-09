<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start(); 
$giris_adi 	 = $_POST['grs_kulladi'];
$giris_sifre = $_POST['grs_sifre'];

include "baglan.php";

if(($giris_adi == "") or ($giris_sifre == "")){ 
	echo '<script type="text/javascript">alert("Boş bıraktığınız alanlar var!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=giris.php">';
}else{ 
	$uyeler = mysql_query("SELECT * FROM musteri WHERE kulladi='$giris_adi' and kullsifre='$giris_sifre'");
	$uyebul = mysql_num_rows($uyeler);
	if($uyebul > 0){ 
		$mailcek = mysql_query("SELECT * FROM musteri WHERE kulladi='$giris_adi'"); 
		$mailcek2 = mysql_fetch_array($mailcek); 
		$_SESSION["giris"] = "true";
		$_SESSION['kulladi'] = $giris_adi; 
		$_SESSION['email']   = $mailcek2['mail'];
		$_SESSION['kullsoyad']=$mailcek2['soyad'];
		$_SESSION['telefon']=$mailcek2['telefon'];	
		$_SESSION['ad']=$mailcek2['ad'];	
		
		echo '<script type="text/javascript">alert("Başarıyla giriş yaptınız! Profil sayfanıza yönlendirileceksiniz...");</script>';
		echo '<meta http-equiv="refresh" content="0;URL=profil.php">';
	}else{ 
	if(@$_POST['grs_kulladi']=='admin' && $_POST['grs_sifre']=='123'){ 
	session_destroy();
	session_start();  
	$_SESSION['kulladi']='admin';
	$_SESSION['ad']='admin';
	header("Location: admin.php");
}
	else{echo '<script type="text/javascript">alert("Kullanıcı adı veya şifreniz yanlış!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=giris.php">';}


	}
}



?>
