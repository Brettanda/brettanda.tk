<!DOCTYPE html>
<html lang="en-CA">
<meta content="images/Logo.png" itemprop="image">
<head>
<meta charset="utf-8">
<title><?php print($pageName);?> | Brett Anda</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
	if(date("G")<6 || date("G")>22){
		$timeOfDay = "night";
	}
	else if (date("G")<12){
		$timeOfDay = "morning";
	}
	else if (date("G")<17){
		$timeOfDay = "afternoon";
	}
	else if (date("G")<21){
		$timeOfDay = "evening";
	}
?>
<link rel="stylesheet"  href="styles.css">
</head>

<!-- <div class="logo"><img src="images/Logo.png" alt="Logo"></div> -->
<!-- <h3>Brett Anda</h3> -->
<nav role="navigation">
	<a href="#">&#9776; Menu</a>
	<a href="index.php">About<span class="extra"> Me</span></a>
	<a href="contact.php">Contact<span class="extra"> Me</span></a>
	<a href="http://portfolio.brettanda.tk"><span class="extra">My </span>Portfolio</a>
	<a href="http://motostar.tk"><span class="extra">Old</span> Portfolio</a>
</nav>
<body>
<main>