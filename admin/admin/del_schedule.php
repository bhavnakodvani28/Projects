<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$sid=$_GET['sid'];
		$sql="delete from schedulemaster where sid='$sid'";
		$result=mysqli_query($cn,$sql);
		header("Location:schedule.php");
		?>
	</body>
</html>