
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$pktypename=$_POST['pktypename'];
	
		
	$sql="insert into packagetype(pktypename)values 
		('$pktypename')";
		$result=mysqli_query($cn,$sql);
		header("Location:packagetype.php");
		?>
	</body>
</html>