<?php session_start(); ?>

<html>
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
<style>
a:hover{background-color: lightblue}
</style>
      <title>Focus-The Gym</title>
      <!--meta tags -->
     <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Trim-Fit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
     <link href="http://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet"> 

<!--dropdown head-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>



<!--<form>
	<table align="center">

	<tr><a href="/trainer/dietfood.php" class="btn subscrib-btnn">Diet Food</a></tr><br><br>
	<tr><a href="/trainer/dietmember.php" class="btn subscrib-btnn">Diet Member</a></tr><br><br>
	<tr><a href="/trainer/attend_tran.php" class="btn subscrib-btnn">Attendance</a></tr><br><br>
	<tr><a href="/trainer/schedule_mov.php" class="btn subscrib-btnn">Schedule Movement</a></tr><br>	
	</table>
	</form>-->
	</body>
	 <div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <a href="trainer/dietfood.php">Diet Food</a>
  <a href="trainer/dietmember.php">Diet Member</a>
  <a href="trainer/attend_tran.php">Attendence</a>
  <a href="trainer/schedule_mov.php">Schedule</a>
</div>
<h2>Trainer Operations</h2>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

 
	<!--<div class="wls-hours-list">
                     <ul>
                        <li class="d-flex"><a href="/trainer/dietfood.php">Diet Food </a></li>
                        <li class="d-flex"> <a href="/trainer/dietmember.php">Diet Member</a></li>
                        <li class="d-flex"><a href="/trainer/attend_tran.php">Attendence</a></li>
                        <li class="d-flex"><a href="/trainer/schedule_mov.php">Schedule Movement</li>
                        
                    
                     </ul>
                  </div>-->
</body>
</html>