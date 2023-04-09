<?php

if(isset($_POST['btn2'])){
if($_POST['btn2']=='EVET'){
echo "<div align=\"center\"><h4><br>Koltuk Basariyla Rezerve Edildi.</h4></div>";

echo "<br>Koltuk No:". $_POST['btnad'];
$btnad=$_POST['btnad'];
echo "<input type=\"hidden\" name=\"btnad\" value=\"$btnad\">";

}
if($_POST['btn2']=='HAYIR'){
echo "<br><div align=\"center\"><h4>Koltuk Rezerve Edilmedi.</h4></div>";
}
}
if(isset($_POST['btn'])){
$btnad=$_POST['btn'];
echo "<div align=\"center\"<br><h3>".$_POST['btn']." Numaralı Koltugu sectiniz rezerve etmek ister misiniz?</h3></div>";
echo '<br><div align="center"> <input type="submit" name="btn2"  value="EVET" class="myButton">&nbsp;&nbsp; <input type="submit" name="btn2" value="HAYIR" class="myButton"></div>';
echo "<input type=\"hidden\" name=\"btnad\" value=\"$btnad\">";
}
?>