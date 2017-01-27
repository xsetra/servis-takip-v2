<?php include("header.php"); ?>

<div class="icerik" align="center">
<h3 class="head" align="center">Tamamlanan Servisler</h3>
<?php
$kac_sayfa=servisListeleIslem("tamamlanan");
echo "<br><span class='yazi_beyaz'>Sayfa :</span>";
sayfalama($kac_sayfa,'tamamlananServisler.php');
?>
</div>
<?php include("footer.php"); ?>