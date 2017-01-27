<?php include("header.php");
$s_id=$_GET['s_id'];
 ?>

<div class="icerik" align="center">
<h3 class="head" align="center">Servis Düzenle</h3>
<?php
	servisDuzenle($s_id);
?>
</div>
<?php include("footer.php"); ?>