<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$eid=$_GET['eid'];
		$sql="delete from equipmentmaster where eid='$eid'";
		$result=mysqli_query($cn,$sql);
		header("Location:equipment.php");
		?>
	</body>
</html>