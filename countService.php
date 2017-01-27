<?php
include("mysql_connect.php");


$bolge=$_POST['bolge'];
$j=1;
for($i=0;$i<=5;$i++){
	$query=mysql_query("SELECT * FROM servisler WHERE tBolge='$bolge' and (tDurumu='1' or tDurumu='3') and tR_gunu='$j'");
	$kacmis[$i]=mysql_num_rows($query);
	$j++;
}
$gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi");
echo "Randevu Günü:<select name='r_gun'>";
$j=1;
for($i=0;$i<=5;$i++){
	echo "<option value='".$j."'>".$gunler[$i]." (".$kacmis[$i].")</option>";
	$j++;
}
echo "</select>";
?>
