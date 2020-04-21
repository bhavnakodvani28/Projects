
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$fid=$_POST['fid'];
		$fname=$_POST['fname'];
		$fdesc=$_POST['fdesc'];
		$fcalories=$_POST['fcalories'];
		$fquantity=$_POST['fquantity'];

	$sql="update foodmaster set fname='$fname', fdesc='$fdesc', fcalories='$fcalories', fquantity='$fquantity' where fid='$fid'";
		$result=mysqli_query($cn,$sql);
		header("Location:food.php");
		?>
	</body>
</html>