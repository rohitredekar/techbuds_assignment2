<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="heading"><h1><b>techbuds</b></h1></div>
	<div class="nav">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="add.php">ADD</a></li>
			<li><a href="update.php">MODIFY</a></li>
			<li><a href="delete.php">DELETE</a></li>
		</ul>
	</div>
<?php 
	$conn=mysqli_connect("localhost","root","","TechBuds") or die("connection failed");
?>