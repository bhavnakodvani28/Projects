<?php session_start() ?>
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
	
		$profileid=$_POST['profileid'];
		$dietid=$_POST['dietid'];	
		echo "$profileid <br />";
		echo "$dietid <br />";
	
		
	
		
		
		$sql="insert into dietfood(profileid,dietid)values 
		('$profileid','$dietid')";

		$result=mysqli_query($cn,$sql);
		$sql="update memberprofile set dietfoodid=(select dietfoodid from dietfood where profileid=$profileid and dietid=$dietid) where profileid = $profileid";
		$result=mysqli_query($cn,$sql);
	//	$_SESSION['msg']="Product inserted";
		header("Location:dietfood.php");
		?>
	</body>
</html>