
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
	$dietfoodid=$_GET['dietfoodid'];
	$sql = "select * from dietfood where dietfoodid='$dietfoodid'";
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
	<h2>Edit Diet Food</h2>
	<form action="edit_dietfood1.php" method="post">
	<input type="hidden" name="dietfoodid" value="<?php echo $rec['dietfoodid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	
<tr>
<td>Member</td>
			<td>
				<select name="profileid">
				<?php
					$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
					$sql ="select * from memberprofile,usermaster where memberprofile.userid=usermaster.userid and memberprofile.trainerid=(select trainerid from trainermaster where userid=$_SESSION[userid])";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{
						?>
						<option value="<?php echo $arr['profileid']?>"><?php echo $arr['ufname']." ".$arr['ulname']?></option>
						<?php
					}
						mysqli_close($cn);
						?>
				</select>
			</td>	
	</tr>


	<tr>
	<td>Diet Type</td>
			<td>
				<select name="dietid">
				<?php
					$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
					$sql = "select * from dietmaster";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{
						?>
						<option value="<?php echo $arr['dietid']?>"><?php echo $arr['dietname']?></option>
						<?php
					}
						mysqli_close($cn);
						?>
				</select>
			</td>	
	</tr>

	<tr>
		<td> <a href="dietfood.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE"/ class="btn btn-primary"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
