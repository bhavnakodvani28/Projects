<?php session_start() ?>
<html>
	<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("chexk connection");
		
		
		$target_dir="../images/";
		$traget_file=$target_dir. basename($_FILES["imagepath"]["imagepath"]);
		$producttypeid=$_POST['prtypeid'];
		$productname=$_POST['prname'];
		$imagepath=$_POST['imagepath'];
		$productprice=$_POST['prprice'];
		$productsize=$_POST['prsize'];
		$gender=$_POST['gender'];
		$productcolor=$_POST['prcolor'];
		$productquantity=$_POST['pqty'];
		
		
	
		echo "$producttypeid <br />";
		echo "$productname <br />";
		echo "$imagepath <br />";
		echo "$productsize <br />";
		echo "$gender<br />";
		echo "$productcolor <br />";
			echo "$productquantity <br />";
		if(move_uploaded_file($_FILES["imagepath"]["tmp_name"],$traget_file))
		{
			echo "The file ".basename($_FILES["imagepath"]["name"]). "has been uploaded.";

		}
		else
		{
			echo "sorry, there was an error uploading file.";
		}
	
		
		
		$sql="insert into productdetail(prtypeid,prname,imagepath,prprice,prsize,gender,prcolor,pqty)values 
		('$producttypeid','$productname','$imagepath','$productprice','$productsize','$gender','$productcolor','$productquantity')";
		$result=mysqli_query($cn,$sql);
		//$_SESSION['msg']="Product inserted";
		header("Location:product.php");
		?>
	</body>
</html>