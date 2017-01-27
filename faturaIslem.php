<?php include("header.php");
@$islem_sayisi = $_GET['sayi'];
?>

<div class="icerik" style='color : white' align="center">
<h3 class="head" align="center">Fatura Yazdır</h3>

<?php if(@empty($_GET['islemGonder']))
{ ?>
<form method='GET' name='islemSayi' action='faturaIslem.php'>
	<input type='text' name='sayi' placeholder='İşlem Sayısı...'/> <input type='submit' name='islemGonder' value='Kayıt Gir'/>
</form>
<?php
} 
else
{
?>
<p id='islem_sayi' style='display:none;'><?php echo $islem_sayisi; ?></p>
<form method="GET" action="faturaYazdir.php" name="faturayaz">
<table>
<tr style='display:none;'><td colspan="2"><input type='text' name='sayi' value='<?php echo $islem_sayisi; ?>'/></td></tr>
<tr>
	<td>Sayın</td>
	<td> : <input type='text' name='sayin'/></td>
</tr>
<tr>
	<td>Müşteri V.D.</td>
	<td> : <input type='text' name='vd'/></td>
</tr>
<tr>
	<td>Fatura Tarihi</td>
	<td> : <input type='text' name='fatura_tarihi'/></td>
</tr>
<tr>
	<td>Teslim Eden</td>
	<td> : <input type='text' name='teslim_eden'/></td>
</tr>

<tr>
	<td>İskonto</td>
	<td> : <input type='text' name='iskonto' value='0'/></td>
</tr>
<tr style='background-color:green; color:white;'>
	<td colspan='2'>*Not: Fiyat girerken, Virgül yerine Nokta Kullanınız.</td>
</tr>
<tr>
	<td>Mamül Kodu</td>
	<td>Mamül Cinsi</td>
	<td>Miktar</td>
	<td>Fiyat</td>
	<td>Tutar</td>
</tr>
<?php
for($i=1;$i<=$islem_sayisi;$i++)
{ 
	echo "<tr>";
	echo "<td><input type='text' placeholder='Mamül Kodu ".$i."' name='m_kodu".$i."' id='m_kodu".$i."'/></td>";
	echo "<td><input type='text' placeholder='Mamül Cinsi ".$i."' name='m_cinsi".$i."' id='m_cinsi".$i."'/></td>";
	echo "<td><input type='text' value='1' name='miktar".$i."' id='miktar".$i."'/></td>";
	echo "<td><input type='text' placeholder='Fiyat ".$i."' name='fiyat".$i."' id='fiyat".$i."'/></td>";
	echo "<td><input type='text' id='tutar".$i."' name='tutar".$i."'/></td>";
	echo "</tr>";
}
?>
<tr><td><input type='button' id='hesapla' onclick='tutarHesapla(<?php echo $islem_sayisi; ?>)' value='Hesapla'/></td><td><p id='toplam_tutar'></td></tr>
<tr>
	<td>Yalnız Miktarı</td>
	<td> : <input type='text' name='yalniz' id='yalniz'/></td>
</tr>
<tr>
	<td colspan='2' align='center'><br><input type='submit' name='faturaYaz' value='Fatura Önizleme'/></td>
</tr>
</table>
</form>
 <?php  } ?>
</div>
<?php include("footer.php"); ?>
