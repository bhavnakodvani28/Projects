<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$pktypeid=$_GET['pktypeid'];
		$sql="delete from packagetype where pktypeid='$pktypeid'";
		$result=mysqli_query($cn,$sql);
		header("Location:packagetype.php");
		?>
	</body>
</html>