<?php session_start() ?>
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		
	
		$userid=$_POST['userid'];
		$trainerqualification=$_POST['trainerqualification'];
		$trainerdesignation=$_POST['trainerdesignation'];
		$trainerexpertise=$_POST['trainerexpertise'];

		echo "$userid <br />";
		echo "$trainerqualification <br />";
		echo "$trainerdesignation <br />";
		echo "$trainerexpertise <br />";
	
		
		$sql="insert into trainermaster (userid,trainerqualification,trainerdesignation,trainerexpertise) values ('$userid','$trainerqualification','$trainerdesignation','$trainerexpertise')";
		$result=mysqli_query($cn,$sql);
		//$_SESSION['msg']="Product inserted";
		header("Location:trainer.php");
		?>
	</body>
</html>