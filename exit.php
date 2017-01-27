<?php
include("function.php");
session_destroy();
echo "<script language='javascript'>window.location.href = 'index.php';</script>";
?>