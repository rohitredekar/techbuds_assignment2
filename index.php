	<?php 
	include "header.php";
	include "database.php";
	$obj = new database();
	$data= $obj->select();
	?>
	<h1>Records</h1>
	<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>GENDER</th>
					<th>DESIGNATION</th>
					<th>CITY</th>
					
				</tr>
	<?php
	foreach ($data as $key => $value) {
	?>

	<tr>
	<div class="add">

	<form class=adds action="" method="POST">
		<td><input type="text" name="id" value="<?php echo $value['id']; ?>"></td>
		
		<td><input type="text" name="name" value="<?php echo $value['name']; ?>"></td>
		
		<td><input type="text" name="gender" value="<?php echo $value['gender']; ?>"></td>

		<td><input type="text" name="designation" value="<?php echo $value['designation']; ?>"></td>
		<td><input type="text" name="city" value="<?php echo $value['city']; ?>"></td>
	</form>

	</div>
		</tr>
	<?php
	}
	?>
		</thead>
	</table>
	<?php include "footer.php"; ?>