<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$att_trid=$_GET['att_trid'];
		$sql="delete from attendencetransaction where att_trid='$att_trid'";
		$result=mysqli_query($cn,$sql);
		header("Location:attend_tran.php");
		?>
	</body>
</html>