<?php include("header.php");
$s_id=$_GET['s_id'];
 ?>

<div class="icerik" align="center">
<h3 class="head" align="center">Servis Tamamla</h3>
<form action="servisTamamla.php?s_id=<?php echo $s_id; ?>" name="tamamla" class="form1" method="POST">
<table>
	<tr>
		<td>Açıklama</td>
		<td><textarea rows="4" cols="28" name="aciklama"></textarea></td>
	</tr>
	<tr>
		<td>Tutar</td>
		<td><input type="text" name="tutar"/></td>
	</tr>
	<tr>
		<td>Durumu</td>
		<td><select name="durum">
			<option value='2'>Tamamlandı</option>
			<option value='3'>Parça Gerekiyor</option>
		</select></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><input name="send" type="submit" class="btnGonder" value="Tamamla"/></td>
	</tr>
</table>
</form><br>
<?php
	if(isset($_POST['send'])){
		$suan=date('Y-m-d');
		$aciklama=$_POST['aciklama'];
		$tutar=$_POST['tutar'];
		if(empty($tutar)){
			$tutar=0;
			$odeme="0";
		}
		else{
			$odeme="1";
		}

		$durum=$_POST['durum'];
		if($durum=='1' or $durum=='3'){
		$tamamla=mysql_query("UPDATE servisler SET tAciklama='$aciklama', nTutar=$tutar, tOdeme_durum='$odeme' , tDurumu='$durum' WHERE nS_no=$s_id");			
}
else{

		$tamamla=mysql_query("UPDATE servisler SET tAciklama='$aciklama', nTutar=$tutar, tOdeme_durum='$odeme' , tDurumu='$durum', dTamamlanma='$suan' WHERE nS_no=$s_id");
}
		if($tamamla){
			echo "<div class='ok_msg_big'><i class='fa fa-check'></i> Servis Durumu Değiştirildi.</div>";
		}
		else{
			echo "<div class='error_msg'><i class='fa fa-times'></i> Servis Tamamlanmadı. Yöneticinize Başvurun.</div>";
		}
	}
?>
</div>
<?php include("footer.php"); ?>
