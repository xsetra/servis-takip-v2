<?php include("header.php"); ?>

<div class="icerik" align="center">
<h3 class="head" align="center">Parça Bekleyen Servisler</h3>
<?php
$kac_sayfa=servisListeleIslem("parca");
echo "<br><span class='yazi_beyaz'>Sayfa :</span>";
sayfalama($kac_sayfa,'parcaBekleyen.php');
?>
</div>
<?php include("footer.php"); ?>