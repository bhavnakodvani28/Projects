<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$profileid=$_POST['profileid'];
		$userid=$_POST['userid'];
		$trainerid=$_POST['trainerid'];
		
		

	$sql="update memberprofile set userid='$userid',trainerid='$trainerid' where profileid='$profileid'";
		$result=mysqli_query($cn,$sql);
		echo $sql;
		header("Location:member.php");
		?>
	</body>
</html>