<?php include('header.php');  ?>

<div class="icerik">
<h3 class="head" align="center">Şifre Değiştir</h3>
<form class="form1" method="POST" action="sifreDegistir.php">
	<table>
		<tr>
			<td>Yeni Şifreyi Gir</td>
			<td> : <input type="text" name="pass"/> </td></tr><tr><td colspan="2" align="right"><input type="submit" name="snd" class="btnGonder" value="Değiştir"></td>
		</tr>
	</table>
</form>
<?php
if(isset($_POST['snd'])){
	$pass=$_POST['pass'];
	if(empty($pass)){
	echo "<span style='color:#fff'>Şifrenizi Girmediniz.</span>";
}
else{
	$upd=mysql_query("UPDATE admin SET sifre='$pass' WHERE kul_ad='zafer'");
	if($upd){
		echo "<span style='color:#fff'>Şifre Değiştirildi.</span>";
	}
}
}
?>
</div>
<?php include('footer.php'); ?>
