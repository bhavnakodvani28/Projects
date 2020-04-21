<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$dietid=$_GET['dietid'];
		$sql="delete from dietmaster where dietid='$dietid'";
		$result=mysqli_query($cn,$sql);
		header("Location:diet.php");
		?>
	</body>
</html>