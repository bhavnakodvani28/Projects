<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
      <title>Focus-The Gym | Classes</title>
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
                    <li class="nav-item dropdown active">
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
                        <a href="#log" class="nav-link">SignIn</a>
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
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>-></span>
               </li>
               <li>Classes</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--about-->
   
		 <!---728x90--->

			<!---728x90--->

 <section class="cls" id="state">

            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Classes</h3>
 
             <div align="center">
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  width: 20px;
  background-color:#c1b78d;
}  


#customers tr:{background-color:#7c7b77;}
#customers tr:hover {background-color: #ddd;
width: 20px;}

#customers th {
   text-align: center;
  background-color: #4CAF50;
  color: white;
  width: 20px;
}
</style>


<table  class="table table-light table-striped">
   <thead class='thead-dark'>
  <tr>
    <th>Sessions</th>
    <th>Monday</th>
    <th>Tuesday</th>
      <th>Wednesday</th>
        <th>Thursday</th>
          <th>Friday</th>
            <th>Saturday</th>

  </tr>
  <thead class='thead-dark'>
  <tr>
    <td>5:30-7:30 a.m.</td>
    <td>Boxing Circuit</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>8:00-10:00 a.m.</td>
    <td>Yoga</td>
    <td>Sweden</td>
  </tr>
  <tr>
    <td>10:00-12:00 p.m.</td>
    <td>Body Pump</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>2:00-4:00 p.m.</td>
    <td>Pilates</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>5:00-7:00 p.m.</td>
    <td>Running Group</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>7:00-9:00</td>
    <td>Philip Cramer</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>North/South</td>
    <td>Simon Crowther</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Paris spécialités</td>
    <td>Marie Bertrand</td>
    <td>France</td>
  </tr>
</table>
                     </div>
                              
                  </div>
               
      <!--//about-->
      <!--about-two-->
     
      <!--//about-two-->
      <!-- team -->
      <section class="team py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
         <h3 class="title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Trainers</h3>
         <div class="row">
            <!-- team-block -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb30 team-four-grids-w3layouts">
               <div data-aos="fade-up" class="team-block active">
                  <div class="team-img">
                     <a href="#">
                        <img class="img-fluid" src="images/t11.jpg" alt="">
                        <div class="social-media">
                     <a href="#" class="social-icon-box"><span class="fab fa-facebook-f"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-twitter"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-google-plus-g"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-pinterest-p"></span></a>
                     </div>
                     </a>
                  </div>
                  <div class="team-content text-center">
                     <h4>Saloni Swami</h4>
                     <span class="pt-2">FITNESS INSTRUCTOR</span>
                  </div>
               </div>
            </div>
            <!-- /.team-block -->
            <!-- team-block -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb30 team-four-grids-w3layouts">
               <div data-aos="fade-up" class="team-block">
                  <div class="team-img">
                     <a href="#">
                        <img class="img-fluid" src="images/t22.jpg" alt="">
                        <div class="social-media">
                     <a href="#" class="social-icon-box"><span class="fab fa-facebook-f"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-twitter"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-google-plus-g"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-pinterest-p"></span></a>
                     </div>
                     </a>
                  </div>
                  <div class="team-content text-center">
                     <h4>Dhawal Joshi </h4>
                     <span class="pt-2">BODYBUILDER</span>
                  </div>
               </div>
            </div>
            <!-- /.team-block -->
            <!-- team-block -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb30 team-four-grids-w3layouts">
               <div data-aos="fade-up" class="team-block">
                  <div class="team-img">
                     <a href="#">
                        <img class="img-fluid" src="images/t33.jpg" alt="">
                        <div class="social-media">
                     <a href="#" class="social-icon-box"><span class="fab fa-facebook-f"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-twitter"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-google-plus-g"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-pinterest-p"></span></a>
                     </div>
                     </a>
                  </div>
                  <div class="team-content text-center">
                     <h4>Ahmed Khan</h4>
                     <span class="pt-2">BODYBUILDER</span>
                  </div>
               </div>
            </div>
            <!-- /.team-block -->
            <!-- team-block -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb30 team-four-grids-w3layouts">
               <div data-aos="fade-up" class="team-block">
                  <div class="team-img">
                     <a href="#">
                        <img class="img-fluid" src="images/t44.jpg" alt="">
                        <div class="social-media">
                     <a href="#" class="social-icon-box"><span class="fab fa-facebook-f"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-twitter"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-google-plus-g"></span></a>
                     <br>
                     <a href="#" class="social-icon-box"><span class="fab fa-pinterest-p"></span></a>
                     </div>
                     </a>
                  </div>
                  <div class="team-content text-center">
                     <h4>Shilpa Shinde</h4>
                     <span class="pt-2 ">YOGA INSTRUCTOR</span>
                  </div>
               </div>
               <!-- /.team-block -->
            </div>
         </div>
      </section>
      <!--//team -->
      <!--testimonial-->
      <section class="testimonial py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Clients</h3>
            <div id="carouselExampleControls" class="carousel slider" data-ride="carousel">
               <div class="carousel-inner text-center">
                  <div class="carousel-item active client-img py-lg-4 py-md-3 py-sm-3 py-2">
                     <div class="img-move">
                        <img class="img-fluid" src="images/t1.jpg" alt="">
                     </div>
                     <div class="client-matter pt-lg-4 pt-md-3 pt-3">
                        <p>Hey this is Kelly shah. I joined this gym 6 months ago.I really like the way how they keep on motivating us to do the regular exercise.</p>
                        <h6 class="pt-lg-3 pt-2">Kelly Shah</h6>
                     </div>
                  </div>
                  <div class="carousel-item client-img py-lg-4 py-md-3 py-sm-3 py-2">
                     <div class="img-move">
                        <img class="img-fluid" src="images/t2.jpg" alt="">
                     </div>
                     <div class="client-matter pt-lg-4 pt-md-3 pt-3">
                        <p>Hey this is Sunny Khan. I joined this gym 9 months ago.I joined the gym just for normal workout but they made me relise that gym is not just an activity, fitness is necessary in out daily routine.</p>
                        <h6 class="pt-lg-3 pt-2">Sunny Khan</h6>
                     </div>
                  </div>
                  <div class="carousel-item client-img py-lg-4 py-md-3 py-sm-3 py-2">
                     <div class="img-move">
                        <img class="img-fluid" src="images/t3.jpg" alt="">
                     </div>
                     <div class="client-matter pt-lg-4 pt-md-3 pt-3">
                        <p>Hey this is Jolly Mehta. I joined this gym 5 months ago.I am a working woman.After coming from a hectic day at job I really enjoy coming to gym because here the vibes and the unique exercises makes me feel so relaxing.</p>
                        <h6 class="pt-lg-3 pt-2">Jolly Mehta</h6>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
      <!--//testimonial -->
      <!--subscribe-->
      <section class="subscribe py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Subscribe Us</h3>
            <div class="row subscribe-form text-center">
               <div class="col-md-6 email-sub-agile">
			   <form action="#" method="post">
                  <div class="form-group ">
                     <input type="email" class="form-control email-sub-agile" placeholder="Email">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn subscrib-btnn">Submit</button>
                  </div>
				  </form>
               </div>
               <div class="col-md-6">
                  <div class="wthree-form-list">
                     <h4>For any inquries related to gym call to our gym instructor.</h4>
                  </div>
               </div>
            </div>
         </div>
      </section >
      <!--//subscribe-->
      <!-- //Footer -->
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

<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/31-07-2018/trim_fit-demo_Free/621294470/web/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 16:48:01 GMT -->
</html>