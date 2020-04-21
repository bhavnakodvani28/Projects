<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$dmid=$_GET['dmid'];
		$sql="delete from dietmember where dmid='$dmid'";
		$result=mysqli_query($cn,$sql);
		header("Location:dietmember.php");
		?>
	</body>
</html>