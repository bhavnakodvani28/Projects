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
<title>Attendence Transaction</title>
</head>
<body>

	<table class="table form-control-lg">
		<form action="insert_attendencetr.php" method="post">
	
	<tr>
		<td> Select Date </td>
		<td>
			<input type="Date" name="att_date" list="thisdate">
			<datalist id="thisdate">
				<option><?php getdate() ?></option>
			</datalist>
		</td>
	</tr>	

	<tr>
			<td>Member </td>
			<td>
				<select name="userid">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select * from memberprofile,usermaster where memberprofile.userid=usermaster.userid and memberprofile.trainerid=(select trainerid from trainermaster where userid=$_SESSION[userid])");
				
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['userid'].">".$row['ufname'].' '.$row['ulname']."</option>";
				}

				?>
				</select>
			</td></tr>	
			<tr>
			<td colspan="2" align="center"><input type="submit" value="submit" name="btn" class="btn-success btn">
		</tr>
		
</form>
</body> 
</table>

 <?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "SELECT att_trid,att_date,ufname,ulname from attendencetransaction, usermaster where attendencetransaction.userid=usermaster.userid";
$result= mysqli_query($cn,$sql);


echo "<table border='1' cellpadding='10' >";
echo "<tr>";
echo "<th> Attendence Trsnsaction ID</th>";
echo "<th> Date</th>";
echo "<th> Member</th>";
echo "<th> Action</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))

{
	echo "<tr>";
	echo "<td>".$row['att_trid']."</td>";
	echo "<td>".$row['att_date']."</td>";
	echo "<td>".$row['ufname']."</td>";
	echo "<td><a href='del_attendence.php?att_trid=${row['att_trid']}' class='btn btn-danger'>Delete</a>";
}
echo "</tr>";
mysqli_close($cn);
?>
 