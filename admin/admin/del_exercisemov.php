<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$movid=$_GET['movid'];
		$sql="delete from exercisemovement where movid='$movid'";
		$result=mysqli_query($cn,$sql);
		header("Location:exercisemov.php");
		?>
	</body>
</html>