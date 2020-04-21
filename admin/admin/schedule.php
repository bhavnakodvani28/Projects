
 
<?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "select * from schedulemaster";
$result= mysqli_query($cn,$sql);
?>
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

	<title>Insert Schedule </title>
</head>
<body>

	<table class="table form-control-lg">
		<form action="insert_schedule.php" method="post">
		<tr>
			<td>Schedule Day</td>
			<td><input type="text" name="sday"></td>
		</tr>

	<tr>
			<td>Trainer ID</td>
			<td>
				<select name="trainerid">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
					$sql = mysqli_query($cn, "select a.trainerid,b.ufname from trainermaster a inner join usermaster b on a.uid = b.userid");
				
				while($row=mysqli_fetch_assoc($sql))
				{
					echo "<option value=".$row['trainerid'].">".$row['ufname']."</option>";
				}

				?>
				</select>
			</td></tr>
		
		</tr>
			<tr>
			<td colspan="2" align="center"><input type="submit" value="submit" name="btn" class="btn-success btn">
		</tr>
	
</form>
</table>
</body> 

<?php
echo "<table border='1' cellpadding='10' >";
echo "<tr>";
echo "<th> Schedule Id </th>";
echo "<th> Schedule Day </th>";
echo "<th> Trainer id </th>";

echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td>${row['sid']}</td>";
	echo"<td>${row['sday']}</td>";
	echo"<td>${row['trainerid']}</td>";

	echo "<td> <a href='del_schedule.php?sid=${row['sid']}'>Delete</a></td>";
	echo "<td> <a href='edit_schedule.php?sid=${row['sid']}'>update</a></td>";
}
echo "</tr>";
mysqli_close($cn);
?>
