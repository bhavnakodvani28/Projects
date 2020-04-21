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
	$prtypeid=$_GET['prtypeid'];
	$sql = "select * from producttype where prtypeid='$prtypeid'";
	$result = mysqli_query($cn,$sql);
	$rec = mysqli_fetch_array($result);
	mysqli_close($cn);
?>
<html>
<html>
<HEAD>	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script></HEAD>
	<body>
	<h2>Edit Product Type</h2>
	<form action="edit_producttype1.php" method="post">
	<input type="hidden" name="prtypeid" value="<?php echo $rec['prtypeid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	<tr>
		<td> Product Type name</td>
		<td><input type="text" required name="prtypename" value="<?php echo $rec['prtypename'];?>"/> </td>
	</tr>
	<tr>
		<td> <a href="producttype.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE" class="btn-success btn"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
 