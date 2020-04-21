<?php
session_start();
 if (isset($_SESSION['user']) && isset($_SESSION['userid']))

 {

 }
else
 {
 	echo "<script> alert ('You must Login.') </script>";
 	header("location:/focus/admin/index.php#log");
 }
 ?>
<?php
	$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
	$sid=$_GET['sid'];
	$sql = "select * from schedulemaster where sid=$sid";
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
	<h2>Edit Schedule Master</h2>
	<form action="edit_schedule1.php" method="post">
	<input type="hidden" name="sid" value="<?php echo $rec['sid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	
	<tr>
		<td> Schedule Day name</td>
		<td><input type="text" required name="sday" value="<?php echo $rec['sday'];?>"/> </td>
	</tr>



	

</tr>
	<td>Trainer Id</td>
			<td>
				<select name="trainerid">
				<?php
					$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
					$sql = "select * from trainermaster,usermaster";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{
						?>
						<option value="<?php echo $arr['trainerid']?>"><?php echo $arr['ufname']?></option>
						<?php
					}
						mysqli_close($cn);
						?>
				</select>
			</td>	
	</tr>

	<tr>
		<td> <a href="schedule.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE"/ class="btn btn-primary"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
