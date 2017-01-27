<?php include("header.php");
$aranan_isim=$_GET['isim'];
$aranan_isim=strtoupper($aranan_isim);
 ?>

<div class="icerik" align="center">
<h3 class="head" align="center">Servis Arama</h3>
<?php
	$kac_sayfa=kisi_bul($aranan_isim);
echo "<br><span class='yazi_beyaz'>Sayfa :</span>";
sayfalama_ara($kac_sayfa,'servisAra.php');
?>
</div>
<?php include("footer.php"); ?>
