<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$fid=$_GET['fid'];
		$sql="delete from foodmaster where fid='$fid'";
		$result=mysqli_query($cn,$sql);
		header("Location:food.php");
		?>
	</body>
</html>