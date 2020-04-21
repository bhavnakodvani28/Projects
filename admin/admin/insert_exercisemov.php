<?php session_start() ?>
<?php
session_start();
 if (isset($_SESSION['user']) && isset($_SESSION['userid']))

 {

 }
else
 {
 	echo "<script> alert ('You must Login.') </script>";
 	header("location:/focus/admin/index.php#log");
 }
 ?>

<html>
<body>
		<?php
		$cn=mysqli_connect("localhost","root","","focusdb") or die ("check connection");
	

		$target_dir="../../images/";
		$traget_file=$target_dir. basename($_FILES["imagepath"]["movimagepath"]);
		$movname=$_POST['movname'];
		$movimagepath=$_POST['movimagepath'];
		$movdesc=$_POST['movdesc'];
		$eid=$_POST['eid'];
		
	
		echo "$movname<br />";
		echo "$movimagepath <br />";
		echo "$movdesc <br />";
		echo "$eid<br />";
		
		if(move_uploaded_file($_FILES["imagepath"]["tmp_name"],$traget_file))
		{
			echo "The file ".basename($_FILES["movimagepath"]["name"]). "has been uploaded.";

		}
		else
		{
			echo "sorry, there was an error uploading file.";
		}
		
		$sql="insert into exercisemovement(movname,movimagepath,movdesc,eid)values 
		('$movname','$movimagepath','$movdesc','$eid')";
		$result=mysqli_query($cn,$sql);
		//$_SESSION['msg']="Product inserted";
		header("Location:exercisemov.php");
		?>
	</body>
</html>