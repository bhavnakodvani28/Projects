
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("chexk connection");

		$foodname=$_POST['foodname'];
		$fooddesc=$_POST['fooddesc'];
		$foodcal=$_POST['foodcal'];
		$foodqty=$_POST['foodqty'];
		
		
		
		/*echo "$foodname <br />";
		echo "$fooddesc <br />";
		echo "$foodcal <br />";
		echo "$foodqty<br />";*/
		
	$sql="insert into foodmaster(fname,fdesc,fcalories,fquantity)values 
		('$foodname','$fooddesc','$foodcal','$foodqty')";
		$result=mysqli_query($cn,$sql);
		header("Location:food.php");
		?>
	</body>
</html>