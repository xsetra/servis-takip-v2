<?php
	include("mysql_connect.php");
	$s_id=$_POST['s_id'];
	$aciklama='TAMAM';
	$tutar=0;
	$durum='2';
	$suan=date("Y-m-d");
	$tamamla=mysql_query("UPDATE servisler SET tAciklama='$aciklama', nTutar=$tutar, tDurumu='$durum', dTamamlanma='$suan' WHERE nS_no=$s_id");
	if($tamamla){
		echo "Servis Tamamlandı.";
	}
	else{
		echo "Servis Tamamlanmadı.";
	}
	
?>