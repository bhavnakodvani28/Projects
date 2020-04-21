
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
	<title>Insert Diet Food </title>
</head>
<body>

	<table  class="table form-control-lg">
		<form action="insert_dietfood.php" method="post">
		
		<tr>
			<td>Member </td>
			<td>
				<select name="profileid">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
				
				$list=mysqli_query($cn,"select * from memberprofile,usermaster where memberprofile.userid=usermaster.userid and memberprofile.trainerid=(select trainerid from trainermaster where userid=$_SESSION[userid])");
				
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['profileid'].">".$row['ufname']." ".$row['ulname']."</option>";
				}

				?>
				</select>
			</td></tr>

	<tr>
			<td>Diet Type</td>
			<td>
				<select name="dietid">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select * from dietmaster");
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['dietid'].">".$row['dietid'].". ".$row['dietname']."</option>";
				}

				?>
				</select>
			</td></tr>

		
			<tr>
			<td colspan="2" align="center"><input type="submit" value="submit" name="btn" class="btn-success btn">
		</tr>
	
</form>
</table>

 <?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "SELECT ufname,profileid,dietfoodid,dietname from usermaster,dietfood, dietmaster where dietfood.profileid=(select profileid from memberprofile where trainerid=$_SESSION[userid]) and usermaster.userid IN (select userid from memberprofile where trainerid=$_SESSION[userid] and dietfoodid IN (select dietfoodid from dietfood where profileid= dietfood.profileid)) group by ufname";
$data= mysqli_query($cn,$sql);
echo $sql;


echo "<table border='1' cellpadding='10' class='table table-active' >";
echo "<tr>";
echo "<th> Diet Food Number</th>";
echo "<th> Member</th>";
echo "<th> Diet Type </th>";
echo "<th> Action</th>";

echo "</tr>";

while($row = mysqli_fetch_array($data))

{
	echo "<tr>";
	echo "<tr><td>".$row['dietfoodid']."</td>";
	echo "<td>${row['ufname']}</td>";
	echo "<td>${row['dietname']}</td>";
    
	echo "<td><a href='del_dietfood.php?dietfoodid=${row['dietfoodid']}' class='btn btn-danger'>Delete</a>";
	echo " <a href='edit_dietfood.php?dietfoodid=${row['dietfoodid']}'  class='btn btn-primary'>update</a></td></tr>";
	
	
	
}
echo "</tr>";
echo "</table>";
mysqli_close($cn);
?>
</body>
</html>