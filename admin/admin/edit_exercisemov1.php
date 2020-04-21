<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$movid=$_POST['movid'];
		$movname=$_POST['movname'];
		$movimagepath=$_POST['movimagepath'];
		
		$movdesc=$_POST['movdesc'];
		$eid=$_POST['eid'];

	$sql="update exercisemovement set movname='$movname',movimagepath='$movimagepath',movdesc='$movdesc',eid='$eid' where movid='$movid'";
		$result=mysqli_query($cn,$sql);
		header("Location:exercisemov.php");
		?>
	</body>
</html>