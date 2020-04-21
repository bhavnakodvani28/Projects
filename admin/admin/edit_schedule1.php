<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$sid=$_POST['sid'];
		$sday=$_POST['sday'];
		$trainerid=$_POST['trainerid'];
		

	$sql="update schedulemaster set sday='$sday',trainerid='$trainerid' where sid='$sid'";
		$result=mysqli_query($cn,$sql);
		header("Location:schedule.php");
		?>
	</body>
</html>