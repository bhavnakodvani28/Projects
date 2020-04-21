<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$sid=$_POST['sid'];
		$movid=$_POST['movid'];
	
	$sql="update schedulemovement set movid='$movid' where sid='$sid'";
		$result=mysqli_query($cn,$sql);
		header("Location:schedule_mov.php");
		?>
	</body>
</html>