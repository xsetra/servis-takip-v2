<?php include("header.php"); ?>

<div class="icerik" align="center">
<h3 class="head" align="center">Bakılacak Servisler</h3>
<?php

$kac_sayfa=servisListeleIslem("bakilacak");
echo "<br><span class='yazi_beyaz'>Sayfa :</span>";
sayfalama($kac_sayfa,'bakilacakServisler.php');
?>
</div>
<?php include("footer.php"); ?>
