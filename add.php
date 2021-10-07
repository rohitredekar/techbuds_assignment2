<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>add page</title>
</head>
<body>
	<?php include "header.php"; ?>

	<h1>Add Records</h1>
	<table>
		<thead>
			<tr>
				<th>NAME</th>
				<th>GENDER</th>
				<th>DESIGNATION</th>
				<th>CITY</th>
				<th>submit form</th>
			</tr>
	<?php include "database.php";
	$obj = new database();
	if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$gender = $_POST['gender'];
		$designation = $_POST['designation'];
		$city = $_POST['city'];

		$res = $obj->insert($fname,$gender,$designation,$city);
		?>
		<script>
			alert("Records added succesfully");
			window.location="http://localhost/TechBuds/index.php";
		</script>
		<?php

	}

	?>
		<tr>
			<form action="" method="post">
			<td><input type="text" name="fname" placeholder="enter your name"></td>
			<td><input type="text" name="gender" placeholder="enter your gender"></td>
			<td><input type="text" name="designation" placeholder="enter your designation"></td>
			<td><input type="text" name="city" placeholder="enter your city"></td>
			<td><input type="submit" name="submit" value="submit"></td>
			
		</tr>
		</thead>
	</table>

	<?php include "footer.php"; ?>
