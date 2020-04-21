<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$trainerid=$_GET['trainerid'];
		$sql="delete from trainermaster where trainerid='$trainerid'";
		$result=mysqli_query($cn,$sql);
		header("Location:trainer.php");
		?>
	</body>
</html>