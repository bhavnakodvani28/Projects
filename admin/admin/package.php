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

	<title>Insert package </title>
</head>
<body style="background-image: url('images/r.jpg'); background-repeat: no-repeat;" >
	<H1  class=" btn-dark text-uppercase text-center"  > Edit PACKAGE</H1>

	<table class="table form-control-lg table-hover">
		<form action="insert_package.php" method="post">
		

	<tr>
			<td class="font-weight-bold text text-dark  text-uppercase">Package type</td>
			<td>
				<select name="pktypeid" required="required" class="btn btn-light">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select * from packagetype");
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['pktypeid'].">".$row['pktypeid'].". ".$row['pktypename']."</option>";
				}

				?>
				</select>
			</td></tr>
			<tr>
			<td class="font-weight-bold text text-dark  text-uppercase">Package name</td>
			<td><input type="text" name="pkname" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
		<tr>
			<td class="font-weight-bold text text-dark  text-uppercase">Package Month:</td>
			<td><input type="text" name="packagemonth" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
		
		<tr>
			<td class="font-weight-bold text text-dark  text-uppercase">Package Price:</td>
			<td><input type="text" name="packageprice" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
			
		</tr>
			<tr>
			<td colspan="2" align="center"><input type="submit" value="submit" name="btn"  class="btn-dark  btn-toolbar btn-lg">
		</tr>
	
</form>
</table>
</body> 
 <?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "SELECT pkid,pkname,pkmonth,pkprice,pktypename from packagedetail, packagetype where packagedetail.pktypeid=packagetype.pktypeid";
$result= mysqli_query($cn,$sql);


echo "<table border='1' cellpadding='10' class='table form-control-lg table-hover'>";
echo "<tr>";
echo "<th class='text text-center btn-dark'> Package Id </th>";
echo "<th class='text text-center btn-dark'> Package Name </th>";
echo "<th class='text text-center btn-dark'> Package TypeId</th>";
echo "<th class='text text-center btn-dark'> Package Month </th>";
echo "<th class='text text-center btn-dark'> Package Price </th>";
echo "<th class='text text-center btn-dark'> Actions</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))

{
	echo "<tr>";
	echo "<tr><td class='font-weight-bold table-light text-center text-uppercase'>".$row['pkid']."</td>";
	echo "<td class='font-weight-bold table-light text-center text-uppercase'>${row['pkname']}</td>";
	echo "<td class='font-weight-bold table-light text-center text-uppercase'>${row['pktypename']}</td>";
	echo "<td class='font-weight-bold table-light text-center text-uppercase'>${row['pkmonth']}</td>";
	echo "<td class='font-weight-bold table-light text-center text-uppercase'>${row['pkprice']}</td>";
	echo "<td 'table-light text-center text-secondary'>
	 <a href='del_package.php?pkid=${row['pkid']}' class='btn btn-dark'>Delete</a>
	 <a href='edit_package.php?pkid=${row['pkid']}' class='btn btn-primary'>Update</a></td>";
}
		echo "</tr>";
mysqli_close($cn);
?>
