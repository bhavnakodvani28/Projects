<?php session_start() ?>
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("chexk connection");
	
		$pkname=$_POST['pkname'];
		$pktypeid=$_POST['pktypeid'];
		$pkmonth=$_POST['packagemonth'];
		$pkprice=$_POST['packageprice'];
		
		echo "$pkname <br />";
		echo "$pktypeid <br />";
		echo "$pkmonth <br />";
		echo "$pkprice<br />";
	
		
		
		$sql="insert into packagedetail(pkname,pktypeid,pkmonth,pkprice)values 
		('$pkname','$pktypeid','$pkmonth','$pkprice')";
		$result=mysqli_query($cn,$sql);
	//	$_SESSION['msg']="Product inserted";
		header("Location:package.php");
		?>
	</body>
</html>