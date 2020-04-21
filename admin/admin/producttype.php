
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('images/r.jpg'); background-repeat: no-repeat;" >

<H1 class=" btn-dark text-uppercase text-center" >Edit PRODUCT Type</H1>
	<table class="table form-control-lg table-hover">
		<form action="insert_prtype.php" method="post">
		<tr>
			<td align="center" class="font-weight-bold text text-dark text-uppercase">Product type name</td>
			<td><input type="text" name="prtypename" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
		
			<tr>
			<td colspan="2" align="center"><input type="submit" value="Submit" name="btn" class="btn-dark  btn-toolbar btn-lg">
		</tr>
	
</form>
</table>


 
<?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "select * from producttype";
$result= mysqli_query($cn,$sql);


echo "<table border='1' cellpadding='10' class='table form-control-lg table-hover'>";
echo "<tr>";
echo "<th class='text text-center btn-dark'> Product Type Id </th>";
echo "<th class='text text-center btn-dark'> Product Type Name </th>";
echo "<th class='text text-center btn-dark'> Actions</th>";

echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['prtypeid']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['prtypename']}</td>";
	echo "<td 'table-light text-center text-secondary'> 
	<a href='del_prtype.php?prtypeid=${row['prtypeid']}' class='btn btn-dark'>Delete</a>
	<a href='edit_producttype.php?prtypeid=${row['prtypeid']}' class='btn btn-primary'>Update</a></td>";
}
echo "</tr>";
mysqli_close($cn);
?>
