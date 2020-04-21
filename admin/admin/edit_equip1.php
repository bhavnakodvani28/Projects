<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$eid=$_POST['eid'];
		$ename=$_POST['ename'];
		$edesc=$_POST['edesc'];
		$eprice=$_POST['eprice'];
		

	$sql="update equipmentmaster set ename='$ename',edesc='$edesc',eprice='$eprice' where eid='$eid'";
		$result=mysqli_query($cn,$sql);
		header("Location:equipment.php");
		?>
	</body>
</html>