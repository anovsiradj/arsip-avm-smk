<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/avmedia.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Passion+One">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!--
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
-->
<style>
img#OrangIndonesia {
	position:fixed;
	top:2px;
	right:2px;
	width:200px;
	z-index:999;
}
</style>
</head>

<body>
<img id="OrangIndonesia" src="garuda.png"/>
<table id="index">
	<tr><td colspan="2" class="head"><?php include 'body/head.php' ?></td></tr>
	<tr><td colspan="2" class="menu"><?php include 'body/menu.php' ?></td></tr>
	<tr>
		<td class="main">
<?php
$page = @$_GET['page'];
//$page = str_replace(".html","",$page); menghilangkan ekstensi .html
$file ="$page.php";
if (!file_exists($file)) {
	include ("main/home.php");
} else if ($page=="" || $page=="home"){
	include ("$page.php"); //memanggil file yang di-include
} else { // jika file tidak ada
	include ("$page.php");
}
?>
		</td>
		<td class="side">
<!--?php include 'body/slide.php' ?><br/-->
<!--?php include 'flashmp3player.php' ?><br/-->
<?php include 'body/link.php' ?><br/>
<?php //include 'body/share.php' ?>
		</td>
	</tr>
	<tr><td colspan="2" class="foot"><?php include 'body/foot.php' ?></td></tr>
</table>
</body>
</html>
