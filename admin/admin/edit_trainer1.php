<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$trainerid=$_POST['trainerid'];
		$userid=$_POST['userid'];
		$trainerqualification=$_POST['trainerqualification'];
		$trainerdesignation=$_POST['trainerdesignation'];
		$trainerexpertise=$_POST['trainerexpertise'];
		

	$sql="update trainermaster set userid='$userid',trainerqualification='$trainerqualification',trainerdesignation='$trainerdesignation','trainerexpertise=$trainerexpertise' where trainerid='$trainerid'";
		$result=mysqli_query($cn,$sql);
		echo $sql;
		header("Location:trainer.php");
		?>
	</body>
</html>