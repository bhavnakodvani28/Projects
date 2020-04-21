<?php session_start(); ?>
<!DOCTYPE html>
<html style="scroll-behavior: smooth;">
   <head>
      <title>Focus-The Gym | Home </title>
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
		<link rel="stylesheet" type="text/css" href="css/uncover.css" />
      <!--stylesheets-->
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
<script type="text/javascript" src="js/Validation.js"></script>
<body>
      <div class="header-outs" id="home">
         <div class="header-w3layouts">
			<div class="headr-title">
			               <div class="hedder-up">
                  <h1><a class="navbar-brand" href="index.php">FOCUS-THE GYM</a></h1>

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
                     <li class="nav-item active">
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
								<a class="nav-link" href="member_profile.php"><?php echo $_SESSION['user']; ?></a>
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
            <!--//navigation section -->
		
</div>
	     <!--banner-->
      <div class="slides">
        <div class="slide slide--current two-img">
                <div class="slider-up">
              
    <style type="text/css">
              body .s{
        padding-top:4.2rem;
    padding-bottom:4.2rem;
    background:rgba(0.50, 0, 0, 0.76);
        }
        a{
         text-decoration:none !important;
         }
       
          .myform{
    position: relative;
    display: -ms-flexbox;
    display: flex;
    padding: 1rem;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 200%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 1.1rem;
    outline: 0;
   
     }
         .tx-tfm{
         text-transform:uppercase;
         }
         .mybtn{
         border-radius:50px;
         }
        form .error {
         color: #ff0000;
         }
         #second{display:none;}
    </style>
   <?php 
    if(!isset($_SESSION['user']))
    
    {
      ?>
      <body>
      <div class="col-md-5 mx-auto">
        <div class="myform form ">
           <div align="center" class="logo mb-3" class="col-11">
              <p class="font-italic" >Login</p>
          </div> 
    <form method="POST" action="./user_dashboard.php" name="log">
      <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="emailid"  class="form-control" id="emailid" aria-describedby="emailHelp" placeholder="Enter email">

     </div>
      <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="lpassword"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
      <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                           </div>
      <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" id="btnSgn">Login</button>
                           </div>                     
  <br>
    <div class="col-md-12 text-center ">
                             
                              <p class="text-center">Forgot Password? <a href="forgot password.php">Change here.</a></p>
                           </div>
  <div class="col-md-12 text-center ">
                              <p  class="text-center" >Have'nt Register?<a href="#reg">SignUp</a></p>
                           </div> 

                             
                      

    </form>
    </div>
  </div>
    </div>
    <?php }?>

</form></div></div></div></div></div></div></div></body>

          <!--//banner-->
	     <!--about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
		 <!---728x90--->

            <div class="row agile-abt-info text-left">
			<!---728x90--->

<div class="col-lg-6 agile-abt-info ">
                  <h2>Welcome To FOCUS-THE GYM<br>Why to choose FOCUS??
                  </h2>
                  <div class="info-sub-w3 pb-lg-4 pb-md-3 pb-sm-3 pb-3">
                     <p>Nothing is random, our programming and exercises are all planned and have a purpose / goal in mind. We do the research so you can train confidently, safely and expect results.
						</p>
                  </div>
                  <div class="info-sub-w3">
                     <p>The gym is not our sport so the numbers don’t matter much. While we do assess often and use gym numbers they are not of primary importance. How you are performing OUTSIDE the gym is what matters.
                     </p>
                  </div>
                  <div class="outs-about-buttn">
                     <a href="about.php">Read More</a>
                  </div>
               </div>
					<div class="col-lg-6 abut-middle-grid">
					<div class="row text-center about-top-right mb-lg-4 mb-md-3 mb-sm-3">
					<div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
					<div class="white-shadow rounded">
                     <div class="white-left">
                        <span class="fab fa-slideshare banner-icon" aria-hidden="true"></span>
                     </div>
                     <div class="white-right">
                        <h4>Weight left</h4>
                     </div>
                  </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
										<div class="white-shadow rounded">
                     <div class="white-left">
                        <span class="fas fa-users banner-icon" aria-hidden="true"></span>
                     </div>
                     <div class="white-right">
                        <h4>Build muscle</h4>
                     </div>
                  </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
										<div class="white-shadow rounded">
                     <div class="white-left">
                        <span class="fas fa-bullhorn banner-icon"></span>
                     </div>
                     <div class="white-right">
                        <h4>Level Up</h4>
                     </div>
                  </div>
					</div>
					</div>
<div class="row text-center about-mid-right mb-lg-4 mb-md-3 mb-sm-3">
					<div class="col-lg-6 col-md-6 col-sm-6 fit-about-agile-grid">
					<div class="white-shadow rounded">
                     <div class="white-left">
                        <span class="fab fa-superpowers banner-icon" ></span>
                     </div>
                     <div class="white-right">
                        <h4>Body improve</h4>
                     </div>
                  </div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 fit-about-agile-grid">
										<div class="white-shadow rounded">
                     <div class="white-left">
                        <span class="fas fa-bicycle banner-icon"></span>
                     </div>
                     <div class="white-right">
                        <h4>Cardio fitness</h4>
                     </div>
                  </div>
					</div>
			</div>
			
								<div class="row text-center about-down-right">
					<div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
					<div class="white-shadow rounded">
                     <div class="white-left">
                        <span class="fab fa-cloudversify banner-icon"></span>
                     </div>
                     <div class="white-right">
                        <h4>Protein plan</h4>
                     </div>
                  </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
										<div class="white-shadow rounded">
                     <div class="white-left">
                        <span class="fab fa-whmcs banner-icon" aria-hidden="true"></span>
                     </div>
                     <div class="white-right">
                        <h4>Stay fit</h4>
                     </div>
                  </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 fit-about-agile-grid">
										<div class="white-shadow rounded">
                     <div class="white-left">
                        <span class="fas fa-fire banner-icon" aria-hidden="true"></span>
                     </div>
                     <div class="white-right">
                        <h4>Stretching</h4>
                     </div>
                  </div>
					</div>
			</div>
			</div>
			</div>
			<!---728x90--->

			</div>
 </section>
 
			</div>

 </section>
  <!-- //services -->
  <!--state -->
         <section class="state py-lg-4 py-md-3 py-sm-3 py-3" id="state">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
		 <div class="jst-must-info text-center">
               <div class="stats-info row py-lg-4 py-md-3 py-sm-3 py-2">
                  <div class="col-lg-3 col-md-6 col-sm-6 stats-grid stats-grid-1">
                     <div class="counter">3500</div>
                     <div class="stat-info py-lg-3 py-md-3 py-sm-3 py-2">
                        <h4>Equipments</h4>
                     </div>
                    <p>Exercise equipment is any apparatus or device used during physical activity to enhance the strength or conditioning effects of that exercise.</p>				
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 stats-grid stats-grid-2">
                     <div class="counter">650</div>
                     <div class="stat-info py-lg-3 py-md-3 py-sm-3 py-2">
                        <h4>Happy Client</h4>
                     </div>
                    <p>The single most important thing is to make people happy.Customer service shouldn’t just be a department, it should be the entire company.</p>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 stats-grid stats-grid-3">
                     <div class="counter">10</div>
                     <div class="stat-info py-lg-3 py-md-3 py-sm-3 py-2">
                        <h4>Expereince</h4>
                     </div>
                     <p>The purpose of life is to live it, to taste experience to the utmost, to reach out eagerly and without fear for newer and richer experience.</p>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 stats-grid stats-grid-4">
                     <div class="counter">1010</div>
                     <div class="stat-info py-lg-3 py-md-3 py-sm-3 py-2">
                        <h4>Expert Worker</h4>
                     </div>
                    <p>As an actor, you blindly put your trust in experts - and if they tell you something's safe, you don't fully vet it yourself.</p>
                  </div>
               </div>
            </div>
		 			</div>

 </section>
		   <!-- //state -->
		   <!-- events -->
		          <section class="events py-lg-4 py-md-3 py-sm-3 py-3" id="events">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
		 <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Events</h3>
		 <div class="row blog-top-grids">
               <div class="col-lg-7 left-side-agile p-lg-4 p-md-4 p-3">

                  <h4>The Push-Up Challenge By Focus
                  </h4>
                  <p class="groom-right">
				  Show off your strength by maximum number of pushups.<br>
				  Register your name at given location.<br>
				  Feel fit!!
                  </p>
				  			   <div class="row mt-2">
			<div class="col-md-2 col-sm-2 col-3 event-w3ls-date text-center">
			<h5>20</h5><span>May</span>
			</div>
			<div class="col-md-10 col-sm-10 col-9 event-w3ls-sub-txt text-left">
			<h4 class="mb-2">Chest Improve</h4>
			<ul>
			<li><span class="fas fa-clock" aria-hidden="true"></span>7:00 a.m.</li>
				<li><span class="fas fa-map-marker-alt" aria-hidden="true"></span>Bopal</li>
				</ul>
			</div>
			</div>
               </div>
               <div class="col-lg-5 blog-w3l-right ">
                  <img src="images/g2.jpg" class="img-fluid" alt="">
               </div>
            </div>
					 <div class="row blog-top-grids my-lg-5 my-md-4 my-3">
					                <div class="col-lg-5 blog-w3l-right ">
                  <img src="images/bb2.jpg" class="img-fluid" alt="">
               </div>
               <div class="col-lg-7 left-side-agile p-lg-4 p-md-4 p-3">

                  <h4>April Abs Challenge By Focus
                  </h4>
                  <p class="groom-right">When spring rolls around, it’s crunch time for anyone getting in shape for summer.
				   Register your name at given location.<br>
				  Feel fit!!
                  </p>
				  			   <div class="row mt-2">
			<div class="col-md-2 col-sm-2 col-3 event-w3ls-date text-center">
			<h5>28</h5><span>April</span>
			</div>
			<div class="col-md-10 col-sm-10 col-9 event-w3ls-sub-txt text-left">
			<h4 class="mb-2">Build Abs</h4>
			<ul>
			<li><span class="fas fa-clock" aria-hidden="true"></span>8:00 a.m.</li>
				<li><span class="fas fa-map-marker-alt" aria-hidden="true"></span>Bopal</li>
				</ul>
			</div>
			</div>
               </div>
            </div>
					 <div class="row blog-top-grids">
               <div class="col-lg-7 left-side-agile p-lg-4 p-md-4 p-3">

                  <h4>Flow into fall yoga challenge.
                  </h4>
                  <p class="groom-right">By improving flexibility, muscle tone and metabolism, practicing yoga can add balance to a functional fitness routine. <br>
				  Register your name at given location.<br>
				  Feel fit!!
				  
				  			   <div class="row mt-2">
			<div class="col-md-2 col-sm-2 col-3 event-w3ls-date text-center">
			<h5>15</h5><span>May</span>
			</div>
			<div class="col-md-10 col-sm-10 col-9 event-w3ls-sub-txt text-left">
			<h4 class="mb-2">Yoga Challenge</h4>
			<ul>
			<li><span class="fas fa-clock" aria-hidden="true"></span>6:00 a.m.</li>
				<li><span class="fas fa-map-marker-alt" aria-hidden="true"></span>Bopal</li>
				</ul>
			</div>
			</div>
               </div>
               <div class="col-lg-5 blog-w3l-right ">
                  <img src="images/bb3.jpg" class="img-fluid" alt="">
               </div>
            </div>
		             </div>

 </section>
		
     <!-- events -->
		 	  <!--price table-->
    


	<!--//price table-->
  <!--statement-->
         <section class="statement py-lg-4 py-md-3 py-sm-3 py-3" id="statement">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
		<div class="w3ls-statement-list text-center">
		<h4>BECOME YOUR 
STRONGEST SELF<br>
KEEP CALM AND WORK HARD</h4>
		</div>
		</div>
	</section >
	  <!--//statement-->
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
	  <!-- joinform -->
     <?php 
    if(!isset($_SESSION['user']))
    
    {
      ?>
       <section class="join-form py-lg-4 py-md-3 py-sm-3 py-3" id="join-form">
         <div id="reg" class="container py-lg-5 py-md-5 py-sm-4 py-4">
		       <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Join Focus</h3>
		 <div class="row">
		 <div class="col-md-6 wthree-form-list">
		 <h4>Gym is a brain child of some of the most qualified fitness professionals with international standard facilities.</h4>
		 <div class="fill-form-w3layouts py-lg-3">
		 <ul>
		 <li class="pt-2"><span class="fas fa-chevron-circle-right"></span><p>We are highly trained professionals ready to help you. </p>
		 
		 </li>
		 <li class="pt-2">
		 <span class="fas fa-chevron-circle-right"></span><p>We have made it affordable for everyone. </p>
		 </li>
		  <li class="pt-2">
		 <span class="fas fa-chevron-circle-right"></span><p>Our gym is designed and maintained to the highest standards. </p>
		 </li>
		<li class="pt-2">
		 <span class="fas fa-chevron-circle-right "></span><p>We are ready to train you! </p>
		 </li>
		 </ul>
		   </div>
		    </div>
        <script type="text/javascript" src="val.js"></script>
		   <div class="col-md-6 right-side-form">

		 <form action="./db1.php" method="POST" name="reg">
    <div class="form-group col-md-6 col-sm-6 fill-all-form">

	<select id="utype" name="utype" class="form-control">
		    <option selected disabled readonly hidden>Select type</option>
		    <option name="t" value="t" id="t">Trainer</option>
        <option name="m" value="m" id="m">Become a member</option>
 </select>
	</div>
    <div class="form-row">
	<div class="form-group col-md-6 col-sm-6 fill-all-form">
      <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required" onkeypress="return chkAplha(event,'error')" onblur="chkblnk('fn','error')">
    </div>
     <div class="form-group col-md-6 col-sm-6 fill-all-form">
      <input type="text"name="mname" id="mname" class="form-control" \ placeholder="Middle Name">
    </div>
    <div class="form-group col-md-6 col-sm-6 fill-all-form">
      <input type="text" name="lname" id="lname" class="form-control" required="required" placeholder="Last Name">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6 col-sm-6 fill-all-form">
      <input type="text" name="phone" id="phone" class="form-control" required="required" placeholder="Phone" onblur="validatePhone()" >
    </div>
    <div class="form-group col-md-6 col-sm-6 fill-all-form">
      <input type="email" name="emailid" id="emailid" class="form-control"  required="required" placeholder="Email">
    </div>
  </div>
      <div class="form-row">
    <div class="form-group col-md-6 col-sm-6 fill-all-form">
      <input type="password" name="password" id="password" class="form-control" required="required" placeholder="password">
    </div>
    <div class="form-group col-md-6 col-sm-6 fill-all-form">
      <input type="password" name="repassword" id="repassword" class="form-control" required="required" placeholder="repassword" onblur="compPassword()" >
    </div>
  </div>
    
  <div class="form-group fill-all-form">
    <input type="text" name="address" id="address" class="form-control" placeholder="Address">
  </div>
  <div class="form-row">
    
    <div class="form-group col-md-2 col-sm-2 fill-all-form">
      <input type="text" name="zip" id="zip" class="form-control" placeholder="Zip" onblur="validateZip()">
    </div>
  </div>
   <div class="form-row">
      <div class="form-group col-md-2 col-sm-2 fill-all-form" >
                  <select id="gender" name="gender" class="form-control" required="required" >
                    <option selected disabled  readonly hidden id="gender">Gender</option>
                    <option value="m" name="m" id="gender">Male</option>
                    <option value="f" name="f" id="gender">Female</option>
                  </select>
      </div>
  </div>
   <div class="form-row">
    
    <div class="form-group col-md-2 col-sm-2 fill-all-form">
      <input type="text" name="bloodgroup" id="bloodgroup" class="form-control"  required="required" placeholder="bloodgroup">
    </div>
  </div>
   <div class="form-row">
    <h4></h4>
    <div class="form-group col-md-2 col-sm-2 fill-all-form"  class="form-control" required="required">
      <input type="date" name="dob" id="dob" value="DOB"  value="2019-02-24">
    </div>
  </div>
<button type="submit" class="btn click-me">Submit</button>
</form>
		   </div>
		          </div>
				  </div>
      </section>
    <?php }?>
		 	  <!-- joinform -->
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
		<div class="col-md-6 email-info">
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
               <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
                  <h4>About</h4>
                  <div class="abt-footer">
                     <p><tr>
               
                </td>The GYM is acknowledged for its unrivalled sucess in providing the finest equipment and fitness knowledge available to help its members achieve their individual potential. It follows a globally proven fitness training module with state-of-the-art infrastructure and delivery methodology and continuous up gradation through training programs. With certified trainers and nutritional counselling.</p>
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
               <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
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
               <div class="col-lg-4 col-md-4 col-sm-12 wthree-left-right">
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
         <p>©2018 Focus-The Gym. All Rights Reserved</p>
      </footer>
      <!-- //Footer -->

      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
<!-- For-Banner -->
<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/uncover.js"></script>
		<script src="js/demo1.js"></script>
<!-- //For-Banner -->
    <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->

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

<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/31-07-2018/trim_fit-demo_Free/621294470/web/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 16:47:35 GMT -->
</html>