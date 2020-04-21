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

	<title>Insert Food Item</title>
</head>
<body style="background-image: url('images/r.jpg'); background-repeat: no-repeat;" >
	<table class="table form-control-lg table-hover">
		<h1 align="center"class=" btn-dark text-uppercase text-center" >Edit Food</h1>
		<form action="insert_food.php" method="post">
		<tr>
			<td class="font-weight-bold text text-dark  text-uppercase text-center ">Food name</td>
			<td><input type="text" name="foodname" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
		<tr>
			<td class="font-weight-bold text text-dark  text-uppercase text-center">Food description</td>
			<td><input type="text" name="fooddesc" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
		<tr>
			<td class="font-weight-bold text text-dark  text-uppercase text-center ">Food calories</td>
			<td><input type="text" name="foodcal" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
		<tr>
			<td class="font-weight-bold text text-dark  text-uppercase text-center ">Food Quantity</td>
			<td><input type="text" name="foodqty" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
			<tr>
			<td colspan="2" align="center"><input type="submit" value="Submit" name="btn" class="btn-dark  btn-toolbar btn-lg">
		</tr>
	
</form>
</table>

<?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "select * from foodmaster";
$result= mysqli_query($cn,$sql);


echo "<table border='1' cellpadding='10' class='table form-control-lg table-hover'>";
echo "<tr>";
echo "<th class='text text-center btn-dark'> Food Id </th>";
echo "<th class='text text-center btn-dark'> Food name Name </th>";
echo "<th class='text text-center btn-dark'> Food Description </th>";
echo "<th class='text text-center btn-dark'> Food calories </th>";
echo "<th class='text text-center btn-dark'> Food Quanitity </th>";
echo "<th class='text text-center btn-dark'>Actions </th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td  class='font-weight-bold table-light text-center text-uppercase'>${row['fid']}</td>";
	echo"<td  class='font-weight-bold table-light text-center text-uppercase'>${row['fname']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['fdesc']}</td>";
	echo"<td  class='font-weight-bold table-light text-center text-uppercase'>${row['fcalories']}</td>";
	echo"<td  class='font-weight-bold table-light text-center text-uppercase'>${row['fquantity']}</td>";
	echo "<td> <a href='del_food.php?fid=${row['fid']}' class='btn  btn-dark'>Delete</a>
	<a href='edit_food.php?fid=${row['fid']}' class='btn btn-primary'>Update</a></td>";
}
echo "</tr>";
mysqli_close($cn);
?>

</body>
</html>