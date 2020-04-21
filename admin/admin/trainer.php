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
	<title>Insert Trainer </title>
</head>
<body style="background-image: url('images/r.jpg'); background-repeat: no-repeat;" >

<h1 class=" btn-dark text-uppercase text-center" >Edit Trainer</h1>
	<table class="table form-control-lg">
		<form action="insert_trainer.php" method="post">
		<tr>
			<td  class="font-weight-bold text text-dark text-uppercase ">User</td>
			<td>
				<select name="userid">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select * from usermaster where usertype='t'");
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['userid'].">".$row['ufname']." ".$row['ulname']."</option>";
				}

				?>
				</select>
			</td>
		</tr>

		<tr>
			<td class="font-weight-bold text text-dark  text-uppercase">Trainer Qualification</td>
			<td><input type="text" name="trainerqualification"></td>
		</tr>

		<tr>
			<td  class="font-weight-bold text text-dark  text-uppercase ">Trainer Designation</td>
			<td><input type="text" name="trainerdesignation"></td>
		</tr>

		<tr>
			<td  class="font-weight-bold text text-dark text-uppercase ">Trainer Expertise</td>
			<td><input type="text" name="trainerexpertise"></td>
		</tr>
		
			<tr>
			<td colspan="2" align="center"><input type="submit" value="submit" name="btn" class="btn-dark  btn-toolbar btn-lg">
		</tr>
</form>
</table>

 
<?php
$cn= mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
$sql= "select trainerid,trainerqualification,trainerdesignation,trainerexpertise, ufname,ulname from trainermaster,usermaster where usermaster.userid=trainermaster.userid";
$result= mysqli_query($cn,$sql);


echo "<table border='1' cellpadding='10' class='table form-control-lg table-hover' >";
echo "<tr>";
echo "<th class='text text-center btn-dark'> User </th>";
echo "<th class='text text-center btn-dark'> Trainer Qualification </th>";
echo "<th class='text text-center btn-dark'> Trainer Designation </th>";
echo "<th class='text text-center btn-dark'> Trainer Expertise </th>";
echo "<th class='text text-center btn-dark'> Actions </th>";


echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['ufname']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['trainerqualification']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['trainerdesignation']}</td>";
	echo"<td class='font-weight-bold table-light text-center text-uppercase'>${row['trainerexpertise']}</td>";
	
	echo "<td 'table-light text-center text-secondary'>
	 <a href='del_trainer.php?trainerid=${row['trainerid']}' class='btn btn-dark'>Delete</a>
	  <a href='edit_trainer.php?trainerid=${row['trainerid']}'  class='btn btn-primary'>Update</a></td>";
}
echo "</tr>";
echo "</table>";
mysqli_close($cn);
?>
</body> 
</html>			