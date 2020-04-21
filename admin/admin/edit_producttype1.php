<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$prtypeid=$_POST['prtypeid'];
		$prtypename=$_POST['prtypename'];
		

	$sql="update producttype set prtypename='$prtypename' where prtypeid='$prtypeid'";
		$result=mysqli_query($cn,$sql);
		header("Location:producttype.php");
		?>
	</body>
</html>