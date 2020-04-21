
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("chexk connection");

		$dietname=$_POST['dietname'];
		
		
		/*echo "$foodname <br />";
		echo "$fooddesc <br />";
		echo "$foodcal <br />";
		echo "$foodqty<br />";*/
		
	$sql="insert into dietmaster(dietname)values 
		('$dietname')";
		$result=mysqli_query($cn,$sql);
		header("Location:diet.php");
		?>
	</body>
</html>