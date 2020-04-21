<?php session_start() ?>
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
		$att_date=$_POST['att_date'];
		$userid=$_POST['userid'];
		echo "$att_date <br />";
		echo "$userid <br />";
		$sql="insert into attendencetransaction(userid,att_date)values 
		('$userid','$att_date')";
		$result=mysqli_query($cn,$sql);
	//	$_SESSION['msg']="Product inserted";
		header("Location:attend_tran.php");
		?>
	</body>
</html>