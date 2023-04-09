<?php
$baglan=@mysql_connect("localhost","root","") or die("Veritabanı bağlantısı sağlanamadı!");
mysql_query("SET NAMES UTF8");
mysql_select_db("sinema1") or die("Veritabanı bulunamadı!");
?>