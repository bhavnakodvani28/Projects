
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$ename=$_POST['ename'];
		$edesc=$_POST['edesc'];
		$eprice=$_POST['eprice'];
		$eqty=$_POST['eqty'];
		
		
		
		/*echo "$foodname <br />";
		echo "$fooddesc <br />";
		echo "$foodcal <br />";
		echo "$foodqty<br />";*/
		
	$sql="insert into equipmentmaster(ename,edesc,eprice,eqty)values 
		('$ename','$edesc','$eprice','$eqty')";
		$result=mysqli_query($cn,$sql);
		header("Location:equipment.php");
		?>
	</body>
</html>