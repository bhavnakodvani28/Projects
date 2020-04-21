<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$sid=$_GET['sid'];
		$sql="delete from schedulemovement where sid='$sid'";
		$result=mysqli_query($cn,$sql);
		header("Location:schedule_mov.php");
		?>
	</body>
</html>