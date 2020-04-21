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

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
	<title>Insert product </title>
</head>
<body style="background-image: url('images/r.jpg'); background-repeat: no-repeat;" >
	<H1 class=" btn-dark text-uppercase text-center" >Edit PRODUCT</H1>

	<table class="table form-control-lg table-hover">
		<form action="insertproduct.php" method="post">
		<tr>
			<td align="center" class="font-weight-bold text text-dark  text-uppercase">Product type</td>
			<td>
				<select name="prtypeid" class="btn btn-light">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select * from producttype");
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['prtypeid'].">".$row['prtypeid'].". ".$row['prtypename']."</option>";
				}

				?>
				</select>
			</td>
		</tr>

		<tr>
			<td align="center" class="font-weight-bold text text-dark  text-uppercase">Product name</td>
			<td><input type="text" name="prname" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
			
		<tr>
			<td align="center">Image Path</td>
			<td><input type="file" name="imagepath" required="required" class="btn btn-light"></td>
		</tr>

		<tr>
			<td align="center" class="font-weight-bold text text-dark  text-uppercase"> Product Price:</td>
			<td><input type="text" name="prprice" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
			
		<tr>
			<td align="center" class="font-weight-bold text text-dark  text-uppercase">Product size:</td>
			<td><input type="text" name="prsize" class="form-control btn btn-lg btn-light"></td>
		</tr>

		<tr>
			<td align="center" >Gender:</td>
			<td> <select id="gender" name="gender" required="required"class="btn btn-light">
                    <option selected disabled  readonly hidden>Gender</option>
                    <option value="m" name="m">Male</option>
                    <option value="f" name="f">Female</option>
                  </select></td>
		</tr>

		<tr>
			<td align="center" class="font-weight-bold text text-dark  text-uppercase"> Product Color: </td>
			<td><input type="text" name="prcolor" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>

	<tr>
			<td align="center" class="font-weight-bold text text-dark  text-uppercase"> Product Quantity: </td>
			<td><input type="text" name="pqty" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
			
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Submit" name="btn" class="btn-dark  btn-toolbar btn-lg">
		</tr>
	
</form>
</table>
</body> 
<?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "select prid,prtypename,prname,imagepath,prprice,prsize,gender,prcolor,pqty from productdetail, producttype where producttype.prtypeid=productdetail.prtypeid";
$result= mysqli_query($cn,$sql);



echo "<table border='0' cellpadding='10' class='table form-control-lg' >";
echo "<tr>";
echo "<th class='text text-center btn-dark'> Product Id </th>";
echo "<th class='text text-center btn-dark'> ProductType Id </th>";
echo "<th class='text text-center btn-dark'> Product Name </th>";
echo "<th class='text text-center btn-dark'> Product Imagepath </th>";
echo "<th class='text text-center btn-dark'> Product Price </th>";
echo "<th class='text text-center btn-dark'> Product Size </th>";
echo "<th class='text text-center btn-dark'> Product Gender </th>";
echo "<th class='text text-center btn-dark'> Product color </th>";
echo "<th class='text text-center btn-dark'> Product quantity </th>";
echo "<th class='text text-center btn-dark'> Actions </th>";

echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo"<tr>";
	echo "<tr><td class='font-weight-bold table-light text-center text-uppercase'>".$row['prid']."</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['prtypename']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['prname']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['imagepath']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['prprice']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['prsize']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['gender']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['prcolor']}</td>";
		echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['pqty']}</td>";

	echo "<td 'table-light text-center text-secondary'> 
	<a href='del_product.php?prid=${row['prid']}' class='btn btn-dark'>Delete</a>
	<a href='edit_product.php?prid=${row['prid']}' class='btn btn-primary'>Update</a></td>";
}
echo "</tr>";
mysqli_close($cn);
?>
