<html>
<head>
<h1  align="center">Forgot Password ?</h1>
<body>
  <form method="POST" action="forgotpass.php">
Email :-<input type="text" name="email" placeholder="abc@gmail.com" pattern=".+@gmail.com" size="30" required="" title="Enter valid Email Id"><br><br>
New Password : <input type="password" name="password" id="password" class="form-control" placeholder="password">
<br><br>
 Re-Type Password : <input type="password" name="repassword" id="repassword" class="form-control" placeholder="repassword">
 <br><br>


<button  type="submit" name="submit">Submit</button>
</form>
<?php 
include "checkemail.php";
?>
</body>

</html>