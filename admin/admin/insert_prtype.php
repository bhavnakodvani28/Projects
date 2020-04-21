
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$prtname=$_POST['prtypename'];
	
		
	$sql="insert into producttype(prtypename)values 
		('$prtname')";
		$result=mysqli_query($cn,$sql);
		header("Location:producttype.php");
		?>
	</body>
</html>