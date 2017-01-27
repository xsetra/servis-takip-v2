<?php include("header.php");
 ?>

<div class="icerik" align="center">
<h3 class="head" align="center">ZORLU SOĞUTMA SERVİS TAKİP</h3>
</div>
<?php
$say=mysql_query("SELECT * FROM servisler");
$say=mysql_num_rows($say);

$bakilacak=mysql_query("SELECT * FROM servisler WHERE tDurumu='1'");
$tamamlanmis=mysql_query("SELECT * FROM servisler WHERE tDurumu='2'");
$parca=mysql_query("SELECT * FROM servisler WHERE tDurumu='3'");

$bakilacak=mysql_num_rows($bakilacak);
$tamamlanmis=mysql_num_rows($tamamlanmis);
$parca=mysql_num_rows($parca);

$say_m=mysql_query("SELECT * FROM servisler WHERE tBolge='8'");
$bakilacak_m=mysql_query("SELECT * FROM servisler WHERE tDurumu='1' and tBolge='8'");
$tamamlanmis_m=mysql_query("SELECT * FROM servisler WHERE tDurumu='2' and tBolge='8'");
$parca_m=mysql_query("SELECT * FROM servisler WHERE tDurumu='3' and tBolge='8'");

$say_m=mysql_num_rows($say_m);
$bakilacak_m=mysql_num_rows($bakilacak_m);
$tamamlanmis_m=mysql_num_rows($tamamlanmis_m);
$parca_m=mysql_num_rows($parca_m);

$say_g=mysql_query("SELECT * FROM servisler WHERE tBolge='1'");
$bakilacak_g=mysql_query("SELECT * FROM servisler WHERE tDurumu='1' and tBolge='1'");
$tamamlanmis_g=mysql_query("SELECT * FROM servisler WHERE tDurumu='2' and tBolge='1'");
$parca_g=mysql_query("SELECT * FROM servisler WHERE tDurumu='3' and tBolge='1'");

$say_g=mysql_num_rows($say_g);
$bakilacak_g=mysql_num_rows($bakilacak_g);
$tamamlanmis_g=mysql_num_rows($tamamlanmis_g);
$parca_g=mysql_num_rows($parca_g);

$say_o=mysql_query("SELECT * FROM servisler WHERE tBolge='2'");
$bakilacak_o=mysql_query("SELECT * FROM servisler WHERE tDurumu='1' and tBolge='2'");
$tamamlanmis_o=mysql_query("SELECT * FROM servisler WHERE tDurumu='2' and tBolge='2'");
$parca_o=mysql_query("SELECT * FROM servisler WHERE tDurumu='3' and tBolge='2'");

$say_o=mysql_num_rows($say_o);
$bakilacak_o=mysql_num_rows($bakilacak_o);
$tamamlanmis_o=mysql_num_rows($tamamlanmis_o);
$parca_o=mysql_num_rows($parca_o);

$say_k1=mysql_query("SELECT * FROM servisler WHERE tBolge='10'");
$bakilacak_k1=mysql_query("SELECT * FROM servisler WHERE tDurumu='1' and tBolge='10'");
$tamamlanmis_k1=mysql_query("SELECT * FROM servisler WHERE tDurumu='2' and tBolge='10'");
$parca_k1=mysql_query("SELECT * FROM servisler WHERE tDurumu='3' and tBolge='10'");

$say_k1=mysql_num_rows($say_k1);
$bakilacak_k1=mysql_num_rows($bakilacak_k1);
$tamamlanmis_k1=mysql_num_rows($tamamlanmis_k1);
$parca_k1=mysql_num_rows($parca_k1);


$say_b=mysql_query("SELECT * FROM servisler WHERE tBolge='9'");
$bakilacak_b=mysql_query("SELECT * FROM servisler WHERE tDurumu='1' and tBolge='9'");
$tamamlanmis_b=mysql_query("SELECT * FROM servisler WHERE tDurumu='2' and tBolge='9'");
$parca_b=mysql_query("SELECT * FROM servisler WHERE tDurumu='3' and tBolge='9'");

$say_b=mysql_num_rows($say_b);
$bakilacak_b=mysql_num_rows($bakilacak_b);
$tamamlanmis_b=mysql_num_rows($tamamlanmis_b);
$parca_b=mysql_num_rows($parca_b);

$say_b1=mysql_query("SELECT * FROM servisler WHERE tBolge='5'");
$bakilacak_b1=mysql_query("SELECT * FROM servisler WHERE tDurumu='1' and tBolge='5'");
$tamamlanmis_b1=mysql_query("SELECT * FROM servisler WHERE tDurumu='2' and tBolge='5'");
$parca_b1=mysql_query("SELECT * FROM servisler WHERE tDurumu='3' and tBolge='5'");

$say_b1=mysql_num_rows($say_b1);
$bakilacak_b1=mysql_num_rows($bakilacak_b1);
$tamamlanmis_b1=mysql_num_rows($tamamlanmis_b1);
$parca_b1=mysql_num_rows($parca_b1);

$say_t=mysql_query("SELECT * FROM servisler WHERE tBolge='6'");
$bakilacak_t=mysql_query("SELECT * FROM servisler WHERE tDurumu='1' and tBolge='6'");
$tamamlanmis_t=mysql_query("SELECT * FROM servisler WHERE tDurumu='2' and tBolge='6'");
$parca_t=mysql_query("SELECT * FROM servisler WHERE tDurumu='3' and tBolge='6'");

$say_t=mysql_num_rows($say_t);
$bakilacak_t=mysql_num_rows($bakilacak_t);
$tamamlanmis_t=mysql_num_rows($tamamlanmis_t);
$parca_t=mysql_num_rows($parca_t);

$say_k=mysql_query("SELECT * FROM servisler WHERE tBolge='7'");
$bakilacak_k=mysql_query("SELECT * FROM servisler WHERE tDurumu='1' and tBolge='7'");
$tamamlanmis_k=mysql_query("SELECT * FROM servisler WHERE tDurumu='2' and tBolge='7'");
$parca_k=mysql_query("SELECT * FROM servisler WHERE tDurumu='3' and tBolge='7'");

$say_k=mysql_num_rows($say_k);
$bakilacak_k=mysql_num_rows($bakilacak_k);
$tamamlanmis_k=mysql_num_rows($tamamlanmis_k);
$parca_k=mysql_num_rows($parca_k);

?>
<div class="rapor">	<table align="center" width="500" border="0" ><tr>
	<td>Toplam Servis Sayısı</td><td width="200"> <?php echo $say; ?></td>
	</tr>
<tr>
	<td>Tamamlanan Servis Sayısı</td><td> <?php echo $tamamlanmis; ?></td>
	</tr>
<tr>
	<td>Bakılacak Servis Sayısı</td><td> <?php echo $bakilacak; ?></td>
	</tr>
<tr>
	<td>Parça Gereken Servis Sayısı</td><td> <?php echo $parca; ?></td>
	</tr>
</table>
</div>
<h3 style="color:#fff;" align="center"><u><em>Bölge Bazlı Raporlama</em></u></h3>
<div class="rapor">	<table align="center" border="0" width="800" >
<tr><td></td><td>Toplam</td><td>Tamamlanan</td><td>Bakılacak</td><td>Parça Gereken</td></tr>
<tr><td>Milas</td><td><?php echo $say_m; ?></td><td><?php echo $tamamlanmis_m; ?></td><td><?php echo $bakilacak_m; ?></td><td><?php echo $parca_m; ?></td></tr>
<tr><td>Güllük - Mumcular</td><td><?php echo $say_g; ?></td><td><?php echo $tamamlanmis_g; ?></td><td><?php echo $bakilacak_g; ?></td><td><?php echo $parca_g; ?></td></tr>

<tr><td>Mumcular - Mazı - Yalıçiftlik</td><td><?php echo $say_k1; ?></td><td><?php echo $tamamlanmis_k1; ?></td><td><?php echo $bakilacak_k1; ?></td><td><?php echo $parca_k1; ?></td></tr>
<tr><td>Ören</td><td><?php echo $say_o; ?></td><td><?php echo $tamamlanmis_o; ?></td><td><?php echo $bakilacak_o; ?></td><td><?php echo $parca_o; ?></td></tr>

<tr><td>Bodrum</td><td><?php echo $say_b1; ?></td><td><?php echo $tamamlanmis_b1; ?></td><td><?php echo $bakilacak_b1; ?></td><td><?php echo $parca_b1; ?></td></tr>


<tr><td>Kıyıkışlacık - Bafa - Bahçeburun</td><td><?php echo $say_b; ?></td><td><?php echo $tamamlanmis_b; ?></td><td><?php echo $bakilacak_b; ?></td><td><?php echo $parca_b; ?></td></tr>
</table>
</div>
<?php include("footer.php"); ?>
