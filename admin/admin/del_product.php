<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$prid=$_GET['prid'];
		$sql="delete from productdetail where prid='$prid'";
		$result=mysqli_query($cn,$sql);
		header("Location:product.php");
		?>
	</body>
</html>