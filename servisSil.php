<?php

include("mysql_connect.php");
$s_id=$_POST['s_id'];
$sil=mysql_query("DELETE FROM servisler WHERE nS_no='$s_id'");
if($sil){
	echo "Servis Silindi.";
}
else{
	echo "Hata! Servis Silinemedi.";
}
?>