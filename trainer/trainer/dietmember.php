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
	<title>Diet Member </title>
</head>
<body>

	<table class="table form-control-lg">
		<form action="insert_dietmember.php" method="post">
		
	<tr>
			<td>Member ID</td>
			<td>
				<select name="userid">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select * from usermaster where usertype='m'");
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					$did=mysqli_fetch_assoc(mysqli_query($cn,"select dietid from dietmaster where uid={$row['userid']}"));
					echo "<option value=".$row['userid'].">".$row['ufname']."</option>";
					echo "<input type=\"hidden\" name=\"dietid\" value=\"{$did['dietid']}\">";
				}

				$list=mysqli_fetch_assoc(mysqli_query($cn,"select dietid from dietmaster where uid=$row[userid]"));
				?>
				</select>
			</td></tr>

			<input type="hidden" name="dietid" value="<?php echo $list['dietid']; ?>">
			<td>Diet food ID </td>
			<td>
				<select name="dietfoodid">
				<option selected disabled readonly hidden>Select type</option>
				<?php 
				$cn=mysqli_connect("localhost","root","","focusdb");
			
				$list=mysqli_query($cn,"select fid,fname from foodmaster");
				
				while($row=mysqli_fetch_array($list, MYSQLI_ASSOC))
				{
					echo "<option value=".$row['fid'].">".$row['fname']."</option>";
				}

				?>
				</select>
				

				
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
$sql= "select * from dietmember";
$result= mysqli_query($cn,$sql);


echo "<table border='1' cellpadding='10' >";
echo "<tr>";
echo "<th> User ID</th>";
echo "<th> Diet Food Name</th>";
echo "<th> Action</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
	$fname = mysqli_fetch_assoc(mysqli_query($cn, "select fname from foodmaster where fid = (select fid from dietfood where uid = {$row['uid']}))"));
	echo "<tr>";
	echo "<td>".$row['uid']."</td>";
	echo "<td>".$fname['fname']."</td>";
	echo "<td><a href='del_dietmember.php?dmid=${row['dmid']}' class='btn btn-danger'>Delete</a>
	 <a href='edit_dietmember.php?dmid=${row['dmid']}' class='btn btn-primary'>update</a></td>";
}
echo "</tr>";
mysqli_close($cn);
?>
