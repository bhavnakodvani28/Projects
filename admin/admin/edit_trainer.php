<?php
session_start();
 if (isset($_SESSION['user']) && isset($_SESSION['userid']))
 {
 }
else
 {
 	echo "<script> alert ('You must Login.') </script>";
 	header("location:/focus/trainer/index.php#log");
 }
 ?>

<?php
	$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
	$trainerid=$_GET['trainerid'];
	$sql = "select * from trainermaster where trainerid='$trainerid'";
	$result = mysqli_query($cn,$sql);
	$rec = mysqli_fetch_array($result);
	mysqli_close($cn);
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

	<body>
	<h2>Edit Trainer</h2>
	<form action="edit_trainer1.php" method="post">
	<input type="hidden" name="trainerid" value="<?php echo $rec['trainerid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	

		<tr>
			<td>User</td>
			<td>
				<select name="userid">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select * from usermaster where usertype='t'");
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['userid'].">".$row['ufname']." ".$row['ulname']."</option>";
				}

				?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Trainer Qualification</td>
			<td><input type="text" required name="trainerqualification" value="<?php echo $rec['trainerqualification'];?>"/></td>
		</tr>

		<tr>
			<td>Trainer Designation</td>
			<td><input type="text" required name="trainerdesignation" value="<?php echo $rec['trainerdesignation'];?>"/></td>
		</tr>

		<tr>
			<td>Trainer Expertise</td>
			<td><input type="text" required name="trainerexpertise" value="<?php echo $rec['trainerexpertise'];?>"'/></td>
		</tr>


	<tr>
		<td> <a href="trainer.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE"/ class="btn btn-primary"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
