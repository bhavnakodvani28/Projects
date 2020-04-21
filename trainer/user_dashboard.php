<?php

// Start the session
session_start();

if($_SERVER['REQUEST_METHOD']=='POST') 
{
    $user = $_POST['emailid'];
    $password = $_POST['password'];

    $db = new PDO('mysql:host=localhost;dbname=focusdb','root','');

    $stmt = $db->query('SELECT * FROM usermaster');
    
    $login = false;

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
    {   
        $type=$row['usertype'];
        
		if($row['emailid'] == $user && $row['password'] == $password) 
        {
        	$_SESSION['user'] = $row['ufname']." ".$row['ulname'];
            $_SESSION['userid']=$row['userid'];
            $login = true;

            break;
        }
    }

    
    if($login) 
    {
    	$_SESSION["id"]=$_POST['emailid'];
        echo nl2br("Welcome to the site  ". $user .".\n");
        echo "\n";
        if($type=='t')
        {
			$_SESSION['trainer'] = $row['ufname']." ".$row['ulname'];
            header("Location: trainer_profile.php");
        }
        else if($type=='m')
        {
            header("Location: member_profile.php");
        }
        else if($type=='a')
        {
			$_SESSION['admin'] = $row['ufname']." ".$row['ulname'];
            header("Location: admin_profile.php");
        }
      //include( 'Location: ./page1.php' );
    }

     else 
     {
        echo("Failed");
        //echo $password;
    }
}
