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

<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 	
	<title>Insert Equipment Item</title>
</head>
<body style="background-image: url('images/r.jpg'); background-repeat: no-repeat;" >
	<h1 align="center" class=" btn-dark text-uppercase text-center" >Edit Equipment</h1>

	<table class="table form-control-lg table-hover">
		<form action="insert_equip.php" method="post">
		<tr>
			<td align="center" class="font-weight-bold text text-dark  text-uppercase">Equipment Name</td>
			<td><input type="text" name="ename" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
		
		<tr>
			<td align="center" class="font-weight-bold text text-dark  text-uppercase">Equipment description</td>
			<td><input type="text" name="edesc" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
		<tr>
			<td align="center" class="font-weight-bold text text-dark text-uppercase">Equipment Price</td>
			<td><input type="text" name="eprice" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
			<tr>
			<td align="center" class="font-weight-bold text text-dark text-uppercase">Equipment Quantity</td>
			<td><input type="text" name="eqty" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
			<tr>
			<td colspan="2" align="center"><input type="submit" value="Submit" name="btn" class="btn-dark  btn-toolbar btn-lg">
		</tr>
	
</form>
</table>

<br><br><br><br>
 
<?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "select * from equipmentmaster";
$result= mysqli_query($cn,$sql);


echo "<table border='1' cellpadding='10' class='table form-control-lg table-hover'>";
echo "<tr>";
echo "<th class='text text-center btn-dark'> Equipment Id </th>";
echo "<th class='text text-center btn-dark'> Equipment Name </th>";
echo "<th class='text text-center btn-dark'> Equipment Description </th>";
echo "<th class='text text-center btn-dark'> Equipment Price </th>";
echo "<th class='text text-center btn-dark'> Equipment Quantity </th>";
echo "<th class='text text-center btn-dark'> Actions </th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['eid']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['ename']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['edesc']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['eprice']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['eqty']}</td>";
	echo "<td 'table-light text-center text-secondary'> 
	<a href='del_equip.php?eid=${row['eid']}' class='btn  btn-dark'>Delete</a>
	<a href='edit_equip.php?eid=${row['eid']}' class='btn btn-primary'>Update</a></td>";
}
echo "</tr>";
mysqli_close($cn);
?>
