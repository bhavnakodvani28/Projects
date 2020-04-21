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
	$movid=$_GET['movid'];
	$sql = "select * from exercisemovement where movid='$movid'";
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
	<h2>Edit Exercise Movement</h2>
	<form action="edit_exercisemov1.php" method="post">
	<input type="hidden" name="movid" value="<?php echo $rec['movid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	
	<tr>
		<td> Movement name</td>
		<td><input type="text" required name="movname" value="<?php echo $rec['movname'];?>"/> </td>
	</tr>
	
	<tr>
		<td> Movement Imagepath</td>
		<td><input type="file" required name="movimagepath" value="<?php echo $rec['movimagepath'];?>"/> </td>
	</tr>



<tr>
		<td> Movement Description</td>
		<td><input type="text" required name="movdesc" value="<?php echo $rec['movdesc'];?>"/> </td>
	</tr>

	

</tr>
	<td>Equipment Id</td>
			<td>
				<select name="eid">
				<?php
					$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
					$sql = "select * from equipmentmaster";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{
						?>
						<option value="<?php echo $arr['eid']?>"><?php echo $arr['ename']?></option>
						<?php
					}
						mysqli_close($cn);
						?>
				</select>
			</td>	
	</tr>


	<tr>
		<td> <a href="exercisemov.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="save"/ class="btn btn-primary"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
