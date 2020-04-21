<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$dietid=$_POST['dietid'];
		$dietname=$_POST['dietname'];
		

	$sql="update dietmaster set dietname='$dietname' where dietid='$dietid'";
		$result=mysqli_query($cn,$sql);
		header("Location:diet.php");
		?>
	</body>
</html>