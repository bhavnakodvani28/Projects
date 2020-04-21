<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

$dietfoodid=$_POST['dietfoodid'];
		$dietid=$_POST['dietid'];
		$profileid=$_POST['profileid'];
		
		

	$sql="update dietfood set profileid='$profileid',dietid='$dietid' where dietfoodid='$dietfoodid'";
		$result=mysqli_query($cn,$sql);
		header("Location:dietfood.php");
		?>
	</body>
</html>