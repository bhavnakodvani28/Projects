<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$pktypeid=$_POST['pktypeid'];
		$pktypename=$_POST['pktypename'];
		

	$sql="update packagetype set pktypename='$pktypename' where pktypeid='$pktypeid'";
		$result=mysqli_query($cn,$sql);
		header("Location:packagetype.php");
		?>
	</body>
</html>