<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
      <title>Focus-The Gym | Admin Login</title>
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
   </head>
   <body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
    }
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
  // format, zoneKey, segment:value, options
  _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
  if(typeof _bsa !== 'undefined' && _bsa) {
      // format, zoneKey, segment:value, options
      _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
    }
})();
</script>
<script>
  (function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
      <!--headder-->
      <div class="header-outs" id="home">
         <div class="header-w3layouts">
            <!--//navigation section -->
            <div class="headr-title">
               <div class="hedder-up">
                  <h1><a class="navbar-brand" href="index.php">Focus-The Gym</a></h1>
               </div>
               <div class="header-call">
                  <span class="fas fa-phone-volume brand-icon"></span>
                  <h4>9067993565</h4>
               </div>
               <div class="clearfix"></div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse  nav-fill " id="navbarSupportedContent">
                  <ul class="navbar-nav nav-pills nav-fill">
                     <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="about.php" class="nav-link ">About</a>
                     </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="packages.php">Packages</a>
                           <a class="dropdown-item" href="classes.php">Classes</a>
                        </div>
                     </li>
                      <li class="nav-item">
                        <a href="shop.php" class="nav-link ">Shop</a>
                     </li>
                     <li class="nav-item">
                        <a href="gallery.php" class="nav-link">Gallery</a>
                     </li>
                      <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                     </li>
                      <li class="nav-item">
                      
                   <?php
                     if(isset($_SESSION['user']))
                     {
                        ?>
                        <a class="nav-link"><?php echo $_SESSION['user']; ?></a>
                         <li class="nav-item">
                        <a href="signout.php" class="nav-link">Sign out</a>
                     </li>
                        <?php
                     }
                     else
                     {
                        ?>
                        <a href="index.php#log" class="nav-link active">SignIn</a>
                        <?php
                     }
                  ?>
               </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- //Navigation-->
      <!--//headder-->
      <div class="inner_page-banner">
      </div>
  <div align="center">
    <i class="fa fa-user-circle fa-3x"></i>
    <h1>Admin LogIn</h1>
    <form method="POST" action="./user_dashboard.php">
      <input type="text" name="emailid" placeholder="Username" />
      <i class="fa fa-user fa-lg" id="username"></i>
      <input type="password" name="passwd" placeholder="Password" />
      <i class="fa fa-lock fa-lg" id="passwd"></i>
      <button type="submit" id="btnSgn">Sign In</button>
      <button type="reset" id="btnRst">Reset</button>
    </form>
    
  </div>

 <section class="buttom-footer py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <div class="row footer-agile-grids text-center">
               <div class="col-lg-4 col-md-6 col-sm-6 wthree-left-right">
                  <h4>About</h4>
                  <div class="abt-footer">
                     <p>The GYM is acknowledged for its unrivalled sucess in providing the finest equipment and fitness knowledge available to help its members achieve their individual potential. It follows a globally proven fitness training module with state-of-the-art infrastructure and delivery methodology and continuous up gradation through training programs. With certified trainers and nutritional counselling.</p>
                     <h5><a href="about.php">Read more..</a></h5>
                  </div>
                  <div class="bottom-social pt-3">
                     <ul>
                        <li>
                           <a href="#">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fab fa-google-plus-g"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fab fa-twitter"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 wthree-left-right">
                  <h4> Opening Hours</h4>
                  <div class="wls-hours-list">
                     <ul>
                        <li class="d-flex">Monday   <span class="time ml-auto"> 5:30-21:30</span></li>
                        <li class="d-flex">Tuesday  <span class="time ml-auto"> 5:30-21:30</span></li>
                        <li class="d-flex">Wednesday<span class="time ml-auto"> 5:30-21:30</span></li>
                        <li class="d-flex">Thursday <span class="time ml-auto"> 5:30-21:30</span></li>
                        <li class="d-flex">Friday   <span class="time ml-auto"> 5:30-21:30</span></li>
                        <li class="d-flex">Saturday <span class="time ml-auto"> 5:30-21:30</span></li>
                        <li class="d-flex">Sunday   <span class="time ml-auto">     closed</span></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-6 wthree-left-right">
                  <h4>Nav Links</h4>
                  <nav class="border-line">
                     <ul class="nav flex-column">
                      
                        <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a href="about.php" class="nav-link ">About</a>
                        </li>
                        <li class="nav-item">
                           <a href="shop.php" class="nav-link">Shop</a>
                        </li>
                       
                        <li class="nav-item">
                           <a href="gallery.php" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                           <a href="contact.php" class="nav-link">Contact</a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </section>
      <footer>
         <p>©2018 Focus-The Gym. All Rights Reserved. </p>
      </footer>
      <!-- //Footer -->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
          $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
              scrollTop: $(this.hash).offset().top
            }, 900);
          });
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
          var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
          };
         
         
          $().UItoTop({
            easingType: 'easeOutQuart'
          });
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
  </body>
</html>
