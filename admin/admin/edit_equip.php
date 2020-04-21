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
	$eid=$_GET['eid'];
	$sql = "select * from equipmentmaster where eid='$eid'";
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
	<h2>Edit EquipmentMaster</h2>
	<form action="edit_equip1.php" method="post">
	<input type="hidden" name="eid" value="<?php echo $rec['eid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	
	<tr>
		<td> Equipment name</td>
		<td><input type="text" required name="ename" value="<?php echo $rec['ename'];?>"/> </td>
	</tr>


	<tr>
		<td> Equipment Description</td>
		<td><input type="text" required name="edesc" value="<?php echo $rec['edesc'];?>"/> </td>
	</tr>

<tr>
		<td> Equipment Price</td>
		<td><input type="text" required name="eprice" value="<?php echo $rec['eprice'];?>"/> </td>
	</tr>
<tr>
		<td> Equipment Quantity</td>
		<td><input type="text" required name="eqty" value="<?php echo $rec['eqty'];?>"/> </td>
	</tr>


	<tr>
		<td> <a href="equipment.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE"/ class="btn btn-primary"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
