<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$prtypeid=$_GET['prtypeid'];
		$sql="delete from producttype where prtypeid='$prtypeid'";
		$result=mysqli_query($cn,$sql);
		header("Location:producttype.php");
		?>
	</body>
</html>