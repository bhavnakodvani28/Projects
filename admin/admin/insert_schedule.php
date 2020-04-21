<?php session_start() ?>
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		
		$sday=$_POST['sday'];
		$tid=$_POST['trainerid'];
	
		echo "$sday<br />";
		echo "$trainername<br   />";
		
		$sql="insert into schedulemaster(sday,trainername) values ('$sday','$tid')";
		$result=mysqli_query($cn,$sql);
		//$_SESSION['msg']="Product inserted";
		header("Location:schedule.php");
		?>
	</body>
</html>