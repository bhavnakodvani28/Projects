<?php 

	$cn=mysqli_connect("localhost","root","","focusdb");

	$CurrentUser = $_POST['emailid'];
		$nPassword = $_POST['password'];
		
		$Update_Users_Credentials = mysqli_query($cn, "UPDATE usermaster SET password = '$nPassword' WHERE emailid = '$CurrentUser'");
		
		if(!$Update_Users_Credentials)
		{
			echo mysqli_error($cn);
		}
		else if(mysqli_affected_rows($cn) == 1)
		{
			echo "Password reset successfully!!";
			header("refresh:5;url=index.php");
		}
		else
		{
			echo "22";
			echo mysqli_error($cn);
		}
?>