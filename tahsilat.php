<?php
	include("header.php");?>
<div class="icerik" align="center">
<h3 class="head" align="center">Tahsilat Yap</h3>
	<?php
	$s_id=$_GET['s_id'];

echo "<form class='form1' method='POST' name='tahsilat' action='tahsilat.php?s_id=".$s_id."'>";
  	$bilgi_cek=mysql_query("SELECT * FROM servisler WHERE nS_no=$s_id");
  	echo "<table width='500' border='0' rules='rows'>";
  	
	while($list=mysql_fetch_assoc($bilgi_cek)){
		
		echo "<tr><td>Ad Soyad</td><td>:".$list['tM_ad']."</td></tr>";
		echo "<tr><td>Telefon</td><td>:".$list['tM_tel']."</td></tr>";
		echo "<tr><td>Şehir</td><td>:".$list['tM_sehir']."</td></tr>";
		echo "<tr><td>Ürünün Türü</td><td>:".$list['tU_turu']."</td></tr>";
		echo "<tr><td>Açıklama</td><td>:".$list['tAciklama']."</td></tr>";
		$tutar=$list['nTutar'];
		echo "<tr><td>Tutar</td><td>:".$tutar."</td></tr>";
		$tahsil_edilmis=$list['nTahsil_edilen'];
		$borc=$tutar-$tahsil_edilmis;
		echo "<tr><td>Borç (Müşterinin Ödemesi Gereken)</td><td>:".$borc."</td></tr>";
		echo "<tr><td>Alınan Tutar</td><td><input type='text' name='a_tutar'/></td></tr>";
		echo "<tr><td colspan='2' align='center'><input type='submit' value='Tahsilat Yap' name='send' class='btnGonder'/></td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</form>";
	if(isset($_POST['send'])){
		$a_tutar=$_POST['a_tutar'];
		if($a_tutar==$borc){
			$odeme_durum="2";
		}
		else{
			$odeme_durum="1";
		}
		$a_tutar=$a_tutar+$tahsil_edilmis;
		$tahsilat=mysql_query("UPDATE servisler SET tOdeme_durum='$odeme_durum', nTahsil_edilen=$a_tutar WHERE nS_no=$s_id");
		if($tahsilat){
			echo "<br><div class='ok_msg_big'><i class='fa fa-check'></i> Tahsilat Gerçekleştirildi.</div>";
		}
		else{
			echo "<br><div class='error_msg'><i class='fa fa-times'></i> Tahsilat Yapılamadı. Tekrar Deneyin..</div>";
		}
	}
?>
</div>
<?php include("footer.php"); ?>