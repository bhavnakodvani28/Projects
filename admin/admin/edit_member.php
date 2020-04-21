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
 
	$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
	$profileid=$_GET['profileid'];
	$sql = "select * from  memberprofile where profileid='$profileid'";
	$result = mysqli_query($cn,$sql);
	$rec = mysqli_fetch_array($result);
	$userid = $rec['userid'];
	$trainerid = $rec['trainerid'];
	$did = $rec['dietfoodid'];	
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
	<body>
	<h2>Edit Member Profile</h2>
	<form action="edit_member1.php" method="post">
	<input type="hidden" name="profileid" value="<?php echo $profileid?>"/>
	<table border="1" cellpadding="5" cellspacing="0" class="table form-control-lg">
	
	<tr>
	<td>User</td>
			<td>
				<select name="userid">
				<?php
					$cn = mysqli_connect("localhost","root","","focusdb") or die(mysqli_error());
					$sql = "select * from usermaster where usertype='m'";
					$result = mysqli_query($cn,$sql);
					while($arr=mysqli_fetch_array($result))
					{
						if ($userid == $arr['userid']) {
							echo "<option value=".$arr['userid']." selected>".$arr['ufname']."</option>";
						}
						else
							echo "<option value=".$arr['userid'].">".$arr['ufname']."</option>";
					}
						mysqli_close($cn);
						?>
				</select>
			</td>	
		</tr>
		<tr>
	<td>Trainer</td>
			
			<td>
				<select name="trainerid">
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

		<td> <a href="member.php" class="btn btn-danger">BACK</a></td>
		<td> <input type="submit" value="SAVE"/ class="btn btn-primary"></td>
	</tr>
	</table>
	</form>
	</body>
</html>
