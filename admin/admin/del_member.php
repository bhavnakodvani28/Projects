<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$proid=$_GET['profileid'];
		$sql="delete from memberprofile where profileid='$proid'";
		$result=mysqli_query($cn,$sql);
		header("Location:member.php");
		?>
	</body>
</html>