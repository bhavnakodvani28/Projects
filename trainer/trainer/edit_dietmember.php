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
	$dmid=$_GET['dmid'];
	$sql = "select * from dietmember where dmid='$dmid'";
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
	<h2>Edit Diet Member</h2>
	<form action="edit_dietmember1.php" method="post">
	<input type="hidden" name="dmid" value="<?php echo $rec['dmid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	

	

</tr>
	<td>User Id</td>
			<td>
				<select name="userid">
				<?php
					$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
					$sql = "select * from usermaster";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{
						?>
						<option value="<?php echo $arr['uid']?>"><?php echo $arr['ufname']?></option>
						<?php
					}
						mysqli_close($cn);
						?>
				</select>
			</td>	
	</tr>


</tr>
	<td>Diet Food Id</td>
			<td>
				<select name="dietfoodid"> 
				<?php
					$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
					$sql = "select * from dietfood ,dietmaster ";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{
						echo "<option value=".$arr['dietfoodid'].">".$arr['dietname']."</option>";
					}
					?>
				</select>
			</td>	
	</tr>


	<tr>
		<td> <a href="dietmember.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE"/ class="btn btn-primary"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
