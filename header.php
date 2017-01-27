<!DOCTYPE html>
<?php
session_start();
include("mysql_connect.php");
include("function.php");	
if($_SESSION['giris']!='ok')
{
	echo "<script language='javascript'>window.location.href='index.php';</script>";	
	
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>

<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
		});
	};

</script>
<script src="jquery-1.11.2.min.js"></script>
<script src="jquery-migrate-1.2.1.min.js"></script>
<script src="jsDatePick.min.1.3.js"></script>
<script src="myjs.js"></script>
<script src="fatura.js"></script>
<link rel="stylesheet" type="text/css" href="css/design.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/awesome.min.css" />
<link rel="stylesheet" type="text/css" href="jsDatePick_ltr.min.css"/>
<title>Servis Takip | ZORLU SOĞUTMA</title>
</head>
<body>
<div id="msgBox"></div>
<div align="center">
<!-- üst kısım -->
<div id="top" class="kutu">
	<div id="top_left"><a href="default.php"><img align="center" class="logo" src="logo.png" width="254" height="74"/></a></div>
	<div id="top_right">
		<table align="right">
		<tr>
			<td align="right"><form action="servisAra.php" name='servisAra' method="GET"><input type="text" placeholder="Müşteri Adı" name="isim"/><input type='submit' name='send' class='sifir' value='Ara'/></form></td>
			<td align="right" width="245"><a href='sifreDegistir.php'><img src='head/sifre.png' /></a>
			<a href='exit.php'><img src='head/cikis.png' /></a></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><br>
			<ul class="nav">
				<li><a href="servisEkle.php"><span>Servis Ekle</span></a></li>
				<li><a href="servisListele.php"><span>Servis Listele</span></a></li>
				<li><a href="bakilacakServisler.php"><span>Bakılacaklar</span></a></li>
				<li><a href="tamamlananServisler.php"><span>Tamamlananlar</span></a></li>
				<li><a href="parcaBekleyen.php"><span>Parça Bekleyenler</span></a></li>
				<li><a href="gunSonu2.php"><span>Gün Sonu</span></a></li>
				<li><a href="borcluListesi.php"><span>Borçlu Listesi</span></a></li>
				<li><a href="faturaIslem.php"><span>Fatura</span></a></li>
			</ul>
			</td>
		</tr>

		</table>
	</div>	
	<div style="clear:both;"></div>
</div>
<!-- burası operator gina -->
<div id="hello_message_bar" class="kutu">
	
</div>
<!-- menü ve content -->
<div id="middle" class="kutu">
	
	<!-- content -->
	<div id="content">

