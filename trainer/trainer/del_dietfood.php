<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$dietfoodid=$_GET['dietfoodid'];
		$sql="delete from dietfood where dietfoodid='$dietfoodid'";
		$result=mysqli_query($cn,$sql);
		header("Location:dietfood.php");
		?>
	</body>
</html>