<?php session_start() ?>
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$sday=$_POST['sday'];
		$movid=$_POST['movid'];
		$userid=$_POST['userid'];

			
		echo "$sday <br />";
		echo "$movid <br />";
		echo "$userid <br />";

		$sql="insert into schedulemovement(sday,movid,userid)values('$sday',$movid','$userid')";
		$result=mysqli_query($cn,$sql);
	//	$_SESSION['msg']="Product inserted";
		header("Location:schedule_mov.php");
		?>
	</body>
</html>