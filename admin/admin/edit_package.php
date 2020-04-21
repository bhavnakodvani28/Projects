
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
	$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
	$pkid=$_GET['pkid'];
	$sql = "select * from packagedetail where pkid='$pkid'";
	$result = mysqli_query($cn,$sql);
	$rec = mysqli_fetch_array($result);

	if (isset($_POST['submit'])) {
		echo "<script> alert(\"hey\"); </script>";
		$pkid=$_POST['pkid'];
		$pkname=$_POST['pkname'];
		$pktypeid=$_POST['pktypeid'];
		$pkmonth=$_POST['pkmonth'];
		$pkprice=$_POST['pkprice'];
	

	$sql="update packagedetail set pkname='$pkname',pktypeid=$pktypeid,pkmonth=$pkmonth,pkprice=$pkprice where pkid=$pkid";
	echo "<script> alert(\"$sql\"); </script>";
		$result=mysqli_query($cn,$sql);
		header("Location:package.php");
	}
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>


	<body>
	<h2>Edit Package Detail</h2>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	<form action="edit_package.php" method="post">
	<input type="hidden" name="pkid" value="<?php echo $rec['pkid'];?>"/>
	
	<tr>
		<td> Package name</td>
		<td><input type="text" required name="pkname" value="<?php echo $rec['pkname'];?>"/> </td>
	</tr>


</tr>
	<td>Package Type Id</td>
			<td>
				<select name="pktypeid">
				<?php
					$sql = "select * from packagetype";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{	$pktype = $arr['pktypeid'];
						if($rec['pktypeid'] == $pktype) {
						?>
						<option value="<?php echo $arr['pktypeid']?>" selected><?php echo $arr['pktypename']?></option>
						<?php
						}
						else {  ?>
						<option value="<?php echo $arr['pktypeid']?>"><?php echo $arr['pktypename']?></option>
					<?php
						}
					}
						?>
				</select>
			</td>	
	</tr>
	
	<tr>
		<td> Package Month</td>
		<td><input type="text" required name="pkmonth" value="<?php echo $rec['pkmonth'];?>"/> </td>
	</tr>

	<tr>
		<td> Package Price</td>
		<td><input type="number" required name="pkprice" value="<?php echo $rec['pkprice'];?>"/> </td>
	</tr>
	<tr>
		<td> <a href="package.php" class="btn btn-danger">BACK</a></td>
		<td> <button type="submit" name="submit" class="btn btn-primary">SAVE</button></td>
	</tr>
	</form>
	</table>
	</body>
</html>