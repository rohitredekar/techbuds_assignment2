	<?php 
	include "header.php";
	include "database.php";
			$obj = new database();
			$data= $obj->select();
			if(isset($_POST['update'])){
			$id=$_POST['id'];
			$name=$_POST['name'];
			$gender=$_POST['gender'];
			$designation=$_POST['designation'];
			$city=$_POST['city'];

	    $obj->update($id,$name,$gender,$designation,$city );
	    ?>
			<script>
				alert("Records Updated succesfully");
				window.location="http://localhost/TechBuds/index.php";
			</script>
	<?php
	  }
	?>
	<h1>Modify Records</h1>
	<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>GENDER</th>
					<th>DESIGNATION</th>
					<th>CITY</th>
					<th>submit form</th>
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
		<td><input type="submit" name="update" value="update"></td>


	</form>

	</div>
		</tr>
		<?php
		}
		?>
		</thead>
	</table>
	<?php include "footer.php"; ?>




