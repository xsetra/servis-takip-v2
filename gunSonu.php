<?php include("header.php"); ?>

<div class="icerik" align="center">
<h3 class="head" align="center">Gün Sonu</h3>
<?php

if(isset($_GET['bolge'])){
	$bolge=$_GET['bolge'];
	$r_gun=$_GET['r_gun'];
	
}
else{
	$bolge="";
	$r_gun="";
}
$kac_sayfa=gunsonu($bolge,$r_gun);
echo "<br><span class='yazi_beyaz'>Sayfa :</span>";
sayfalama($kac_sayfa,'gunSonu.php');
?>
</div>
<?php include("footer.php"); ?>
