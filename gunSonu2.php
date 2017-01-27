<?php include("header.php"); ?>

<div class="icerik" align="center">
<h3 class="head" align="center">Gün Sonu</h3>
<form style='color:#fff;' action="gunSonu.php" name="sehir" method="GET">
Bölge:&nbsp;<select name="bolge"><?php bolgeListele(); ?></select><br>
Randevu:<select name="r_gun"><?php gunListele(); ?></select>

<input type="submit" name="send" value="Ara"/>
</form>

</div>
<?php include("footer.php"); ?>
