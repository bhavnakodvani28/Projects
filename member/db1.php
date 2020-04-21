  <?php
    if($_SERVER['REQUEST_METHOD']=='POST') 
{
   $name= $_POST['name'];
   $utype=$_POST['utype'];
   $mname= $_POST['mname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
   $email= $_POST['emailid'];
   $pass= $_POST['password'];
    $repass=$_POST['repassword'];
   $adr= $_POST['address'];
   $zip= $_POST['zip'];
   $gender= $_POST['gender'];
    $bld=$_POST['bloodgroup'];
   $dob =$_POST['dob'];
   
   

}   



try {
    $conn = new PDO('mysql:host=localhost;dbname=focusdb','root','');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usermaster  VALUES ('', '$utype','$name','$mname','$lname','$email','$pass','$repass','$dob','$gender','$bld','$adr','$zip','$phone',1)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully!!";
    echo "<i class='fa fa-spinner fa-pulse fa-3x fa-fw'></i>";
	header("refresh:5;url=index.php");
    echo "<br>";
  

      
   

    }


catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
