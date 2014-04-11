<!DOCTYPE html>
<html>
	<head>
		<title>Weather APP</title>
		
		<!-- Styles -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="public/css/styles.css" />
		
		<!-- JavaScript -->
		<script src="public/js/script.js"></script>
	
	</head>
	
	<body>
		<div class="content">
		
		<ul class="nav nav-tabs">
		  <li <?php if(empty($_GET["cities"]))echo('class="active"'); ?>><a href="index.php">Weather Map</a></li>
		  <li <?php if(isset($_GET["cities"]))echo('class="active"'); ?>><a href="?cities=select">Select Cities</a></li>
		</ul>