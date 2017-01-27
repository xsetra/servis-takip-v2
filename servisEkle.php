<?php include("header.php"); ?>
<div class="icerik">
<h3 class="head" align="center">Yeni Servis Ekle</h3>
<form action="servisEkle.php" class="form1" name="servisEkle" method="POST">
<table align="center">
<tr>
	<td>Ad Soyad</td>
	<td> : <input type="text" name="m_ad"/></td>
</tr>
<tr>
	<td>Telefon</td>
	<td> : <input type="text" name="m_tel"/></td>
</tr>
<tr>
	<td>Bölge</td>
	<td> : <select name="bolge">
	<option value=''></option>
		<?php bolgeListele(); ?>
	</select></td>
</tr>
<tr>
	<td>Randevu Günü</td>
	<td> : <select name="r_gun"><?php gunListele(); ?></select></td>
</tr>
<tr>
	<td  valign="bottom">Şikayet</td>
	<td> : <textarea rows="4" cols="28" name="sikayet"></textarea></td>
</tr>
<tr>
	<td valign="bottom">Adres</td>
	<td> : <textarea rows="4" cols="28" name="m_adres"></textarea></td>
</tr>

<tr>
	
	<td colspan="2" align="right"><input type="submit" name="gonder" class="btnGonder" value="Kaydet"/></td>
</tr>
</table>
</form><br><br>
<div align="center">
	<?php 
		if(isset($_POST['gonder'])){
			$m_ad=$_POST['m_ad'];
			$m_tel=$_POST['m_tel'];
			
			$r_gun=$_POST['r_gun'];
			$bolge=$_POST['bolge'];
			$sikayet=$_POST['sikayet'];
			$adres=$_POST['m_adres'];
			if(empty($m_ad) or empty($r_gun) or empty($m_tel) or empty($bolge) or empty($sikayet) or empty($adres)){
				echo "<div class='error_msg'><i class='fa fa-times'></i> Lütfen tüm alanları doldurup tekrar deneyiniz...</div>";
			}
			else{
				servisEkle($m_ad,$m_tel,$bolge,$sikayet,$adres,$r_gun);
				echo "<div class='ok_msg_big'><i class='fa fa-check'></i> Servis Kayıtlara Eklendi...</div>";
			}
		}
	?>
</div>
</div>
<?php include("footer.php"); ?>
