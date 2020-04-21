<?php session_start() ?>
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
	
		$userid=$_POST['userid'];
		$dietid=$_POST['dietid'];
		$fid = $_POST['fid'];
	
		$sql="insert into dietmember(uid,dietid,fid) values ('$uid','$dietid', '$fid')";
		$result=mysqli_query($cn,$sql);
	//	$_SESSION['msg']="Product inserted";
		header("Location:dietmember.php");
		?>
	</body>
</html>