<?php include("header.php"); ?>

<div class="icerik" align="center">
<h3 class="head" align="center">Borçlu Listesi</h3>
<?php

$kac_sayfa=borcluListele();
echo "<br><span class='yazi_beyaz'>Sayfa :</span>";
sayfalama($kac_sayfa,'borcluListesi.php');
?>
</div>
<?php include("footer.php"); ?>
