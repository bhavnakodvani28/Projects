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

	<title>Insert Exercisemovement </title>
</head>
<body style="background-image: url('images/li.jpg'); background-repeat: no-repeat;" >
	<h1 align="center" class="font-weight-bold text border-dark btn-dark" >Edit Exercise Movement</h1>

	<table class="table form-control-lg">
		<form action="insert_exercisemov.php" method="post">
		<tr>
			<td>Movement name</td>
			<td><input type="text" name="movname" required></td>
		</tr>

	
		<tr>
			<td>Movement Image path:</td>
			<td><input type="file" name="movimagepath" required></td>
		</tr>
		
		<tr>
			<td>Movement Description</td>
			<td><input type="text" name="movdesc" required></td>
		</tr>
			<tr>
			<td>Equipment Id</td>
			<td>
				<select name="eid">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select * from equipmentmaster");
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['eid'].">".$row['eid'].". ".$row['ename']."</option>";
				}

				?>
				</select>
			</td></tr>
		</tr>
			<tr>
			<td colspan="2" align="center"><input type="submit" value="Submit" name="btn" class="btn-success btn">
		</tr>
	
</form>
</table>

<?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "select * from exercisemovement";
$result= mysqli_query($cn,$sql);


echo "<table border='1' cellpadding='10' >";
echo "<tr>";
echo "<th> Movement Id </th>";
echo "<th> Movement Name </th>";
echo "<th> Movement Imagepath </th>";
echo "<th> Movement Description</th>";
echo "<th> Equipment Id</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>${row['movid']}</td>";
	echo"<td>${row['movname']}</td>";
	echo"<td>${row['movimagepath']}</td>";
	echo"<td>${row['movdesc']}</td>";
	echo"<td>${row['eid']}</td>";
	echo "<td> <a href='del_exercisemov.php?movid=${row['movid']}' class='btn btn-danger'>Delete</a>";
	echo "<td> <a href='edit_exercisemov.php?movid=${row['movid']}'  class='btn btn-primary'>Update</a></td>";
}
echo "</tr>";
mysqli_close($cn);
?>

</body> 
</table>