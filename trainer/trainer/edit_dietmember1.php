<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$dmid=$_POST['dmid'];
		$userid=$_POST['userid'];
		$dietfoodid=$_POST['dietfoodid'];
		
	$sql="update dietmember set userid='$userid',dietfoodid='$dietfoodid' where dmid='$dmid'";
		$result=mysqli_query($cn,$sql);
		header("Location:dietmember.php");
		?>
	</body>
</html>