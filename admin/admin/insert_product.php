<?php session_start() ?>	
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("chexk connection");
		
		$producttypeid=$_POST['prtypeid'];
		$productname=$_POST['prname'];
		$imagepath=$_POST['imagepath'];
		$productprice=$_POST['prprice'];
		$productsize=$_POST['prsize'];
		$gender=$_POST['gender'];
		$productcolor=$_POST['prcolor'];
		$isavailable=$_POST['isavailable'];
		
	
		echo "$producttypeid <br />";
		echo "$productname <br />";
		echo "$imagepath <br />";
		echo "$productsize <br />";
		echo "$gender<br />";
		echo "$productcolor <br />";
		echo "$isavailable<br />";
	
		
		
		$sql="insert into productdetail(prtypeid,prname,imagepath,prprice,prsize,gender,prcolor,isavailable)values 
		('$producttypeid','$productname','$imagepath','$productprice','$productsize','$gender','$productcolor','$isavailable')";
		$result=mysqli_query($cn,$sql);
		//$_SESSION['msg']="Product inserted";
		header("Location:product.php");
		?>
	</body>
</html>