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

	<title>Schedule_Movement</title>
</head>
<body>
	<table class="table form-control-lg">
		<form action="insert_schedule_mas.php" method="post">
	
	<tr>
		<td>Select Day</td>
		<td>
			<select name="sday" id="sday">
				<option selected disabled readonly hidden>Select Day</option>
				<option>Monday</option>
				<option>Tuesday</option>
				<option>Wednesday</option>
				<option>Thursday</option>
				<option>Friday</option>
				<option>Saturday</option>
			</select>
		</td>
	</tr>
	

	<tr>
			<td>Select Member</td>
			<td>
				<select name="userid">
				<option selected disabled readonly hidden>Select Member</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
	$list=mysqli_query($cn,"select * from memberprofile,usermaster where memberprofile.userid=usermaster.userid and memberprofile.trainerid=(select trainerid from trainermaster where userid=$_SESSION[userid])");

				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['userid'].">".$row['ufname']." ".$row['ulname']."</option>";
				}
				?>
				</select>
			</td>
	</tr>
	<tr>
			<td>Select Movement</td>
			<td>
				<select name="movid">
				<option selected disabled readonly hidden>Select Movement</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select * from exercisemovement");
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['movid']."> ".$row['movname']."</option>";
				}

				?>
				</select>
			</td>
	</tr>

			<tr>
			<td colspan="2" align="center"><input type="submit" value="Submit" name="btn" class="btn-success btn">
		</tr>
		
</form>
</body> 
</table>

<?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "select ufname,sid,sday,movid from usermaster,schedulemovement where usermaster.userid=schedulemovement.userid and schedulemovement.userid IN (select userid from memberprofile where trainerid = (select trainerid from trainermaster where userid=$_SESSION[userid]))";
$result= mysqli_query($cn,$sql);

echo "<table border='1' cellpadding='10' >";
echo "<tr>";
echo "<th> Schedule Number</th>";
echo "<th> Schedule Day</th>";
echo "<th> Movement Name</th>";
echo "<th> Member Name</th>";
echo "<th> Actions </th>";
echo "</tr>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))

{
	echo "<tr>";	
	echo "<td>".$row['sid']."</td>";
	echo "<td>".$row['sday']."</td>";
	echo "<td>".$row['movid']."</td>";
	echo "<td>".$row['ufname']."</td>";
	echo "<td><a href='del_schedule.php?sid=${row['sid']}' class='btn btn-danger'>Delete</a>
	 <a href='edit_schedulemov.php?sid=${row['sid']}' class='btn btn-primary'>Update</a></td>";
}
echo "</tr>";
mysqli_close($cn);
?>
	