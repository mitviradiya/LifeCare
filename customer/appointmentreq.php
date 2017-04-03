<!doctype html>
<?php
include("connection.php");
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reguest Appointment</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/medical-guide-icons.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="shortcut icon" href="images/favicon.png">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <?php 
	  
{
		  $query="insert into tblappoint (userid,problem,requestdate) values ('".$_SESSION["userid"]."','".$_REQUEST["message"]."','".date("Y/m/d")."')";
		  mysql_query($query);
		  //echo "<script>alert('Request Succesfully...');</script>";  
		 // echo "<script> document.location='index.php';</script>";
}


?>

		      
<!--Loader-->
<div class="loader">
  <div class="loader__figure"></div>
  <p class="loader__label"><img src="images/logo.png" alt="logo"></p>
</div>

<!--Top bar-->
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="pull-left hidden-xs">Medix Healthcare Come to Expect the Best in Town</p>
        <p class="pull-right"><i class="fa fa-ambulance"></i>Emergency Line (+001) 321-125-152</p>
      </div>
    </div>
  </div>
</div>


<header id="main-navigation">
  <div id="navigation" data-spy="affix" data-offset-top="20">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false"> 
            <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> 
            </button>
           <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" class="img-responsive"></a> 
         </div>
        
            <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="#"><b>Welcome <?php echo $_SESSION["username"]; ?></b> </a></li>
                <li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
                <li class="dropdown active">
                  <a data-toggle="dropdown" href="#" class="dropdown-toggle">Appointment</a>
                  <ul class="dropdown-menu">
					<li><a href="appointment.php">Request Appointment</a></li>
                    <li><a href="viewall.php">View All Appointment</a></li>
                    <li><a href="byid.php">View By Id</a></li>
					<li><a href="confirmappointment.php">Confirm Appointment</a></li>
                    <li><a href="prescription.php">Prescription</a></li>
                  </ul>
                </li>
                <li><a href="blog.php">Blog</a></li>
				<li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
				<li><a href="logout.php">Logout</a></li>
              </ul>
            </div>
         </nav>
         </div>
       </div>
     </div>
  </div>
</header>

<!--Page header & Title-->
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">Appointment</h2>
         <div class="page_link"><a href="index.html">Home</a><span><i class="fa fa-long-arrow-right"></i>Appointment</span><span><i class="fa fa-long-arrow-right"></i>Request Appointment</span></div>
      </div>
    </div>
  </div>
</div>  
</section>

<!--Contact Form & Address-->
<section class="padding bg_grey">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8">
        <h2 class="heading">Request Appointment</h2>
        <hr class="heading_space">
		<form class="callus" method="post" action="index.php"  id="contact_form">
        <h2> Appointment Successfully Requested</h2><br><br>
		<div class="form-group">
                 <div class="btn-submit button3">
              
		<input type="Submit" name="back" value="Back to Home" id="btn_contact_submit"/>
		</div>
		</div>
		</form>
		
		
      </div>
      <div class="col-md-4 col-sm-4 medix">
        <h2 class="heading">MediX</h2>
        <hr class="heading_space"> 
        <p><strong>Phone:</strong> 1.800.555.6789</p>
        <p><strong>Email:</strong> <a href="mailto:support@medix.com">support@medix.com</a></p>
        <p><a href="#">Web: www.medix.com</a></p>
        <p><strong>Address:</strong> 12345 North Main Street, New York</p>
          <ul class="social_icon">
            <li class="black"><a href="#" class="facebook"><i class="icon-facebook5"></i></a></li>
            <li class="black"><a href="#" class="twitter"><i class="icon-twitter4"></i></a></li>
            <li class="black"><a href="#" class="google"><i class="icon-google"></i></a></li>
          </ul>
      </div>
    </div>
  </div>
</section>


<!--Footer-->
<footer class="padding-top dark">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Why Medix?</h4>
        <hr class="half_space">
        <p class="half_space">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore dolor in hendrerit in vulputate.</p>
        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Quick Links</h4>
        <hr class="half_space">
        <ul class="widget_links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Specilaties</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Departments</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Timetable</a></li>
          <li><a href="#">Docotors</a></li>
          <li><a href="#">Why Us</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Newsletter</h4>
        <hr class="half_space">
        <p class="icon"><i class="icon-dollar"></i>Sign up with your name and email to get updates fresh updates.</p>
        <div id="result1" class="text-center"></div>        
        
       <form action="http://themesindustry.us13.list-manage.com/subscribe/post-json?u=4d80221ea53f3a4487ddebd93&amp;id=494727d648&amp;c=?" method="get" onSubmit="return false" class="newsletter">
          <div class="form-group">
            <input type="email" placeholder="E-mail Address" required name="EMAIL" id="EMAIL" class="form-control" />
          </div>
          <div class="form-group">
            <input type="submit" class="btn-submit button3" value="Subscribe" />
          </div>
        </form>
      </div>
      <div class="col-md-3 col-sm-6 footer_column">
        <h4 class="heading">Get in Touch</h4>
        <hr class="half_space">
        <p>Medical Bibendum auctor, to consequat ipsum nec sagittis sem.</p>
        <p class="address"><i class="icon-location"></i>Medical Ltd, Manhattan 1258,New York, USA Lahore</p>
        <p class="address"><i class="fa fa-phone"></i>(+1) 234 567 8901</p>
        <p class="address"><i class="icon-dollar"></i><a href="mailto:hello@website.com">hello@website.com</a></p>
      </div> 
    </div>
    <div class="row">
     <div class="col-md-12">
        <div class="copyright clearfix">
          <p>Copyright &copy; 2016 Shrddha Gami & Pranjal Khokhar. All Right Reserved</p>
           <ul class="social_icon">
            <li><a href="#" class="facebook"><i class="icon-facebook5"></i></a></li>
            <li><a href="#" class="twitter"><i class="icon-twitter4"></i></a></li>
            <li><a href="#" class="google"><i class="icon-google"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script src="js/jquery-2.2.3.js" type="text/javascript"></script>
<script src="js/jquery.geolocation.edit.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/slider.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/functions.js" type="text/javascript"></script>
</body>

</html>


