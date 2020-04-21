<?php
	
	$cn=mysqli_connect("localhost","root","","focusdb");
	session_start();
		$TheEmailAddress = trim(strip_tags($_POST['emailid']));
		
		$CheckEmailAddressForVerificationQuery = "SELECT `emailid` FROM `usermaster`";
		$FireCheckEmailAddressForVerificationQuery = mysqli_query($cn, $CheckEmailAddressForVerificationQuery);
		$GetAllEmailAddressesForVerification = mysqli_fetch_array($FireCheckEmailAddressForVerificationQuery);
		
		if($TheEmailAddress == $GetAllEmailAddressesForVerification['emailid'])
		{
			echo "Email address exists.";
		}
	
	
?>