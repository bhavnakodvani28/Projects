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
	$fid=$_GET['fid'];
	$sql = "select * from foodmaster where fid='$fid'";
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
	<h2>Edit Food Master</h2>
	<form action="edit_food1.php" method="post">
	<input type="hidden" name="fid" value="<?php echo $rec['fid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	
	<tr>
		<td> Food name</td>
		<td><input type="text" required name="fname" value="<?php echo $rec['fname'];?>"/> </td>
	</tr>

<tr>
		<td> Food Description</td>
		<td><input type="text" required name="fdesc" value="<?php echo $rec['fdesc'];?>"/> </td>
	</tr>

<tr>
		<td> Food Calories</td>
		<td><input type="text" required name="fcalories" value="<?php echo $rec['fcalories'];?>"/> </td>
	</tr>

<tr>
		<td> Food Quantity</td>
		<td><input type="text" required name="fquantity" value="<?php echo $rec['fquantity'];?>"/> </td>
	</tr>


	<tr>
		<td> <a href="food.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE"/ class="btn btn-primary"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
