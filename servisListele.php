<?php include("header.php"); ?>
<script language="JavaScript">
    function birAlaniYazdir() {
    	
        var basilacakIcerik= document.getElementById('icerik2').innerHTML;
        var orjinalSayfa= document.body.innerHTML;
        basilacakIcerik
        document.body.innerHTML = basilacakIcerik;
        window.print();
        document.body.innerHTML = orjinalSayfa;
    } 
</script>
<div class="icerik" align="center">
<h3 class="head" align="center">Servis Listele</h3>
<form class="form1" name="bolgeSec" method="GET" action="servisListele.php">
	Bölge : <select name="bolge" id="bolge" onchange="randevu()">
		<option value=''></option>
		<?php bolgeListele(); ?>
	</select><br>
<div id="r_gunu"></div>
 <input type="submit" value="Listele" class="btnGonder">

</form><br>
<?php
	if(isset($_GET['bolge'])){
		$bolge=$_GET['bolge'];
		$gun=$_GET['r_gun'];
		echo "<a href='#' onclick='birAlaniYazdir()' style='color:#fff'>Yazdır</a>";
		echo "<div id='icerik2'>";
		$kac_sayfa=servisListele($bolge,$gun);
		echo "</div>";
echo "<br><span class='yazi_beyaz'>Sayfa :</span>";
sayfalama($kac_sayfa,'servisListele.php');
	}
?>
</div>
<?php include("footer.php"); ?>
