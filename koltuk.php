<?php
$ad=$_SESSION['kulladi'];
$soyad=$_SESSION['kullsoyad'];
$mail=$_SESSION['email'];
$tel=$_SESSION['telefon'];
$tarihi =$_SESSION['tarih'];
$saati =$_SESSION['saat'];
$film =$_SESSION['filmadi'];

include("baglan.php");
if(isset($_POST['btn2'])){
if($_POST['btn2']=='EVET'){

$sorgu1="INSERT INTO bilet(ad,soyad,mail,telefon,koltuk,tarih,seans_saati,film_adi) VALUES ('$ad','$soyad','$mail','$tel','$_POST[btnad]','$tarihi','$saati','$film')";
mysql_query($sorgu1,$baglan);

}
}


$dizi=array("Z20");
$sorgu1="SELECT koltuk FROM bilet";
$giden1=mysql_query($sorgu1,$baglan);
$sq=0;
while($gelen1=mysql_fetch_array($giden1)){
$dizi[$sq]=$gelen1[0];
$sq++;
}
for($i=0;$i<=99;$i++){
if($i%10==0){
$k=chr(round($i/10)+65);
echo "<tr><td bgcolor=\"orange\">".$k;
}
$j=($i%10)+1;
foreach($dizi as $deger){
if($deger=="$k$j"){
$each=1;
break;
}
else{
$each=0;
}
}
if($each==1){
echo "<td bgcolor=\"grey\"><input type=\"submit\" disabled=\"false\" class=\"awesome2\" name=\"btn\" value=\"$k$j\" /></td>";
}
else{
echo "<td bgcolor=\"grey\"><input type=\"submit\" class=\"awesome\" name=\"btn\" value=\"$k$j\" /></td>";
}
}

?>