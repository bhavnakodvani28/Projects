
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
<?php
	$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
	$prid=$_GET['prid'];
	$sql = "select * from productdetail where prid='$prid'";
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
	<h2>Edit Product Details</h2>
	<form action="edit_product1.php" method="post">
	<input type="hidden" name="prid" value="<?php echo $rec['prid'];?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	
<tr>
	<td>Product Type </td>
			<td>
				<select name="prtypeid">
				<?php
					$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
					$sql = "select * from producttype";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{
						?>
						<option value="<?php echo $arr['prtypeid']?>"><?php echo $arr['prtypename']?></option>
						<?php
					}
						mysqli_close($cn);
						?>
				</select>	
			</td>	
	</tr>
	<tr>
		<td> Product name</td>
		<td><input type="text" name="prname" value="<?php echo $rec['prname'];?>"/> </td>
	</tr>

	
	<tr>
		<td> Image Path</td>
		<td><input type="file" name="imagepath" value="<?php echo $rec['imagepath'];?>"/> </td>
	</tr>

	<tr>
		<td> Product Price</td>
		<td><input type="text"  name="prprice" value="<?php echo $rec['prprice'];?>"/> </td>
	</tr>
<tr>
		<td> Product Size</td>
		<td><input type="text" name="prsize" value="<?php echo $rec['prsize'];?>"/> </td>
	</tr>
<tr>
		<td> Gender</td>
		<td> <select id="gender" name="gender" required="required" value="<?php echo $rec['gender'];?>">
                    <option selected disabled  readonly hidden>Gender</option>
                    <option value="m" name="m">Male</option>
                    <option value="f" name="f">Female</option>
                  </select></td> 
	</tr>
<tr>
		<td> Color</td>
		<td><input type="text"  name="prcolor" value="<?php echo $rec['prcolor'];?>"/> </td>
	</tr>

<tr>
		<td> Quantity</td>
		<td><input type="text"  name="pqty" value="<?php echo $rec['pqty'];?>"/> </td>
	</tr>
	<tr>
		<td> <a href="product.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE"/ class="btn btn-primary"></td>
	</tr>
	</table>
	</form>
	</body>
</html>