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

</head>
   <body style="background-image: url('images/r.jpg'); background-repeat: no-repeat;" >

     	<h1 align="center"class=" btn-dark text-uppercase text-center" >Edit PACKAGE Type</h1>
       	<br>
	<table class="table form-control-lg table-hover"  >
		<form action="insert_pktype.php" method="post">
		<tr>
			<td align="center" class="font-weight-bold text text-dark  text-uppercase">Package Type Name</td>
			
		<td><input type="text" name="pktypename" required="required" class="form-control btn btn-lg btn-light"></td>
		</tr>
<br>
		<td>
		</td>
			<td colspan="2" align="center"><input type="submit" value="Submit" name="btn"  class="btn-dark  btn-toolbar btn-lg"></td>
		</tr>
	
</form>
</table>
<br><br><br><br><br><br><br><br><br><br><br>
<?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "select * from packagetype";
$result= mysqli_query($cn,$sql);


echo "<table border='1' cellpadding='10'  class='table form-control-lg table-hover'>";
echo "<tr>";
echo "<th class='text text-center btn-dark'> Package Type Id </th>";
echo "<th class='text text-center btn-dark'> Package Type Name </th>";
echo "<th class='text text-center btn-dark'> Actions </th>";

echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['pktypeid']}</td>";
	echo"<td td class='font-weight-bold table-light text-center text-uppercase'>${row['pktypename']}</td>";
	echo "<td td class='table-light text-center text-secondary'>
	 <a href='del_pktype.php?pktypeid=${row['pktypeid']}' class='btn btn-dark'>Delete</a>
	 <a href='edit_pktype.php?pktypeid=${row['pktypeid']}' class='btn  btn-primary'>Update</a></td>";
}
echo "</tr>";
echo "</table>";
mysqli_close($cn);
?>
    

       </div>

            
 
</body>
</html>