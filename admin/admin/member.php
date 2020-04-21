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
</head>
	<title>Insert Member </title>
</head>
<body style="background-image: url('images/r.jpg'); background-repeat: no-repeat;" >
<h1 class=" btn-dark text-uppercase text-center" >Edit Member</h1>
	<table class="table form-control-lg">
		<form action="insert_member.php" method="post">
		<tr>
			<td  class="font-weight-bold text text-dark  text-uppercase text-center">User</td>
			<td>
				<select name="userid" class="btn btn-light">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select * from usermaster where usertype='m'");
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['userid'].">".$row['ufname']." ".$row['ulname']."</option>";
				}

				?>
				</select>
			</td>
		</tr>

		<tr>
			<td  class="font-weight-bold text text-dark  text-uppercase text-center" >Trainer Name</td>
			<td>
				<select name="trainerid" class="btn btn-light">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select userid,ufname,ulname from usermaster where usertype='t'");

				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					$trainerid = mysqli_fetch_assoc(mysqli_query($cn, "select trainerid from trainermaster where userid =  {$row['userid']}"));
				
					echo "<option value=".$trainerid['trainerid'].">".$row['ufname']." ".$row['ulname']."</option>";
				}

				?>
				</select>
			</td>
		</tr>
		
			<tr>
			<td colspan="2" align="center"><input type="submit" value="Submit" name="btn" class="btn-dark  btn-toolbar btn-lg">
		</tr>
</form>
</table>

 
<?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "select * from memberprofile";
$result= mysqli_query($cn,$sql);


echo "<table border='1' cellpadding='10' class='table form-control-lg table-hover' >";
echo "<tr>";
echo "<th  class='text text-center btn-dark'> Profile Id </th>";
echo "<th  class='text text-center btn-dark'> User </th>";
echo "<th  class='text text-center btn-dark'> Trainer </th>";
echo "<th  class='text text-center btn-dark'> Actions </th>";



echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td  class='font-weight-bold table-light text-center text-uppercase'>${row['profileid']}</td>";
	echo"<td  class='font-weight-bold table-light text-center text-uppercase'>${row['userid']}</td>";
	echo"<td  class='font-weight-bold table-light text-center text-uppercase'>${row['trainerid']}</td>";
	
	echo "<td 'table-light text-center text-secondary'> 
				<a href='del_member.php?profileid=${row['profileid']}' class='btn  btn-dark'>Delete</a>
				<a href='edit_member.php?profileid=${row['profileid']}'  class='btn btn-primary'>update</a></td>";
}
echo "</tr>";
echo "</table>";
mysqli_close($cn);
?>
</body> 
</html>	