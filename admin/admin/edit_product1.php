<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");

		$prid=$_POST['prid'];
	
		$prtypeid=$_POST['prtypeid'];
		$prname=$_POST['prname'];
		$imagepath=$_POST['imagepath'];
		$prprice=$_POST['prprice'];
		$prsize=$_POST['prsize'];
		$gender=$_POST['gender'];
		$prcolor=$_POST['prcolor'];
		$pqty=$_POST['pqty'];

	

	$sql="update productdetail set prtypeid='$prtypeid',prname='$prname',imagepath='$imagepath',prprice='$prprice',prsize='$prsize',gender='$gender',prcolor='$prcolor',pqty='$pqty' where prid='$prid'";
		$result=mysqli_query($cn,$sql);
		header("Location:product.php");
		?>
	</body>
</html>