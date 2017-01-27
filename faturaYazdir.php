<?php
@$sayi = $_GET['sayi'];
@$sayin = $_GET['sayin'];
@$vd = $_GET['vd'];
@$fatura_tarihi = $_GET['fatura_tarihi'];
@$teslim_eden = $_GET['teslim_eden'];
@$iskonto = $_GET['iskonto'];
$m_kodu = array();
$m_cinsi = array();
$miktar = array();
$fiyat = array();
$tutar = array();
@$yalniz = $_GET['yalniz'];
$tam_tutar;
for($i=1;$i<=$sayi;$i++)
{
	$m_kodu[$i] = $_GET['m_kodu'.$i];
	$m_cinsi[$i] = $_GET['m_cinsi'.$i];
	$miktar[$i] = $_GET['miktar'.$i];
	$fiyat[$i] = $_GET['fiyat'.$i];
	$tutar[$i] = $_GET['tutar'.$i];
	$tam_tutar += $tutar[$i];
}
if(empty($fatura_tarihi))
{
	$fatura_tarihi = date('d.m.Y');
}
$kdv = $tam_tutar * 18 / 100;
$yeni_tutar = $kdv + $tam_tutar;
function noktaTOvirgul($nokta)
{
	$nokta = str_replace(".", ",", $nokta);
	return $nokta;
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<style>
body
{
	font-family:Arial;
	font-size:12px;
}
table tr td
{
	vertical-align:text-top;
}
.ortalama
{
	vertical-align:middle;
	padding-top:24px;
	padding-right:0px;
}
.ortalama p
{
	padding-right:88px;
}
.metin
{
	padding-top:7px;
	padding-left:4px;
	height:85px;
}
.vd
{
	padding-left:83px;
	padding-top:9px;
}
</style>
<body>
<table valign="top" border="0" width="730" height="750" style="margin-top:158px;">
<tr>
	<td colspan='2' width="380" height="135"><div class='metin'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sayin; ?></div>
		<div class="vd"><?php echo $vd; ?></div>
	</td>
	<td colspan='2' width="290" align="right" class="ortalama"><p><?php echo $fatura_tarihi; ?></p></td>
</tr>
<tr>
<td colspan='4' height="70"></td>
</tr>
<tr height="365" class="ust_bosluk">
	<td colspan='4'>
		<table align="center" style="text-align:center" border="0">
			<?php
			for($i=1;$i<=$sayi;$i++)
			{
			echo "<tr>";
				echo "<td width='127' style='text-align:left;'><span>".$m_kodu[$i]."</span></td>";
				echo "<td width='228' style='text-align:left'><span>".$m_cinsi[$i]."</span></td>";
				echo "<td width='68'>".$miktar[$i]."</td>";
				echo "<td width='136'>".noktaTOvirgul($fiyat[$i])."</td>";
				$new_tutar = round($tutar[$i],3);
				echo "<td width='146'>".noktaTOvirgul($new_tutar)."</td>";
			echo "</tr>";
			}
			?>
		</table>
	</td>
</tr>
<tr height='40'>
	<td colspan='4' align='right' style='padding-right:40px;'><?php echo noktaTOvirgul($tam_tutar)."<br>"; echo noktaTovirgul($kdv)."<br>"; echo "#".noktaTovirgul($yeni_tutar)."#<br>";?><td>
</tr>
<tr>
	<td colspan='4' align='left' style='padding-left:60px; padding-top:20px;'><?php echo $yalniz; ?></td>
</tr>
<tr height='50px;'>
	<td colspan='4' style='padding-top:30px; padding-left:72px;'><?php echo $teslim_eden; ?></td>
</tr>
</table>
</body>
</html>
