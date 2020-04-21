<?php session_start() ?>
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("chexk connection");
		$productid=$_POST['prid'];
		$producttypeid=$_POST['prtypeid'];
		$productname=$_POST['prname'];
		$imagepath=$_POST['imagepath'];
		$productprice=$_POST['prprice'];
		$productsize=$_POST['prsize'];
		$gender=$_POST['gender'];
		$productcolor=$_POST['prcolor'];
		$isavailable=$_POST['isavailable'];
		
		/*echo "$product_title <br />";
		echo "$capacity_id <br />";
		echo "$producttype_id <br />";
		echo "$company_id <br />";
		echo "$pro_des <br />";
		echo "$mfgdate <br />";
		echo "$price <br />";
		echo "$model <br />";
		echo "$quantity ";*/
		
		
		$sql="insert into productdetail(prid,prtypeid,prname,imagepath,prprice,prsize,gender,prcolor,isavailable)values 
		('$productid,$producttypeid,$productname,$imagepath,$productprice,$productsize,$gender,$productcolor,$isavailable')";
		$result=mysqli_query($cn,$sql);
		$_SESSION['msg']="Product inserted";
		header("Location:product.php");
		?>
	</body>
</html>