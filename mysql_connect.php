<?php
$host="localhost";
$un="username";
$pw="parola";
$db="db_Name";
$baglanti=mysql_connect($host,$un,$pw);
/*if ($baglanti->connect_error) {
    die("Connection failed: " . $baglanti->connect_error);
}
else
{
	echo "Baglanti basariliiii";
} */
mysql_select_db($db,$baglanti);
mysql_query("SET NAMES UTF-8");
?>
