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
	$sid=$_GET['sid'];
	$sql = "select * from schedulemovement where sid='$sid'";
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
	<h2>Edit Schedule Movement</h2>
	<form action="edit_schedulemov1.php" method="post">
	<input type="hidden" name="sid" value="<?php echo $rec['sid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
<tr>
	<td>Day</td>
			<td>
				<select name="sday">
				<?php
					$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
					$sql = "select * from schedulemovement";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{
						?>
						<option value="<?php echo $arr['sday']?>"><?php echo $arr['sday']?></option>
						<?php
					}
						mysqli_close($cn);
						?>
				</select>
			</td>	
	</tr>
<tr>
	<td>Movement</td>
			<td>
				<select name="movid">
				<?php
					$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
					$sql = "select movname from excercisemovement,schedulemovement where excercisemovement.movid=schedulemovement.movid";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{
						?>
						<option value="<?php echo $arr['movid']?>"><?php echo $arr['movname']?></option>
						<?php
					}
						mysqli_close($cn);
						?>
				</select>
			</td>	
	</tr>


	<tr>
		<td> <a href="schedule_mov.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE"/ class="btn btn-primary"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
