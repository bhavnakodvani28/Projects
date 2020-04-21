<?php session_start() ?>
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		
	
		$userid=$_POST['userid'];
		$trainerid=$_POST['trainerid'];
		$dietfoodid=$_POST['dietfoodid'];

		echo "$userid <br />";
		echo "$trainerid <br />";
		echo "$dietfoodid <br />";
	
		
		$sql="insert into memberprofile (userid,trainerid,dietfoodid) values ('$userid','$trainerid','$dietfoodid')";
		$result=mysqli_query($cn,$sql);
		//$_SESSION['msg']="Product inserted";
		header("Location:member.php");
		?>
	</body>
</html>