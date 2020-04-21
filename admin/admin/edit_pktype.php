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
	$pktypeid=$_GET['pktypeid'];
	$sql = "select * from packagetype where pktypeid='$pktypeid'";
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
	<h1>Edit package type</h1>
	<form action="edit_pktype1.php" method="post">
	<input required="required" type="hidden" name="pktypeid" value="<?php echo $rec['pktypeid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0"  class="table form-control-lg">
	<tr>
		<td> Package type name</td>
		<td><input type="text" required name="pktypename" value="<?php echo $rec['pktypename'];?>"/> </td>
	</tr>
	<tr>
		<td> <a href="packagetype.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE"/  class="btn-success btn"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
