<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$pkid=$_GET['pkid'];
		$sql="delete from packagedetail where pkid='$pkid'";
		$result=mysqli_query($cn,$sql);
		header("Location:package.php");
		?>
	</body>
</html>