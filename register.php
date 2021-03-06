<!doctype html>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("lifecare",$con);
?>


<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>
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
                 <li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="login.php">LogIn</a></li>
				<li class="active"><a href="register.php">Register</a></li>
                <li><a href="blog.php">blog</a></li>
                <li><a href="about.php">about us</a></li>
                <li><a href="contact.php">contact us</a></li>
                </ul>
                </li>
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
         <h2 class="title">Login</h2>
         <div class="page_link"><a href="index.html">Home</a><span><i class="fa fa-long-arrow-right"></i>Registration Form</span></div>
      </div>
    </div>
  </div>
</div>  
</section>





<section class="padding">
  <div class="container appointment_wrap padding-half">
    <div class="row">
      <div class="col-md-12">
        <h2>Registration To Site</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
       
        <div class="col-md-7 col-sm-8">
          
          <div class="row">
            <form class="callus" method="post" action="registrationconfirmation.php"  id="app_form">
              <div class="row">
                
                 <div class="col-md-12">
                    <div id="result" class="text-center form-group"></div>
                 </div>
                 <div class="col-md-3">
                  	</div>
				  <div class="col-md-3">
                  <div class="form-group">
						
				<!--  <input class="form-control" type="text" id="name" name="name" placeholder="Your Name" required /> <br><br> -->
				 <h4>First Name :</h4>
                  </div>
                </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="text" name="txtfirstname" id="name"  placeholder="First Name" required />
                  </div>
                </div> 
              <div class="col-md-3">
				</div>
				 <div class="col-md-3">
                  <div class="form-group">
					<h4>Last Name :</h4> 
			 <!-- <input class="form-control" type="email"  name="email" id="email" placeholder="Email" required /> -->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name"  name="txtlastname" required />
                  </div>
                </div> 
				<div class="col-md-3">
				</div>
				 <div class="col-md-3">
                  <div class="form-group">
					<h4>Address :</h4> 
			      </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control"  name="txtaddress" placeholder="Address" cols="5" rows="4" required /></textarea>
                  </div>
                </div> 
				<div class="col-md-3">
				</div>
				
				<div class="col-md-3">
                  <div class="form-group">
					<h4>City :</h4> 
		         </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="City"  name="txtcity" required />
                  </div>
                </div> 
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
                  <div class="form-group">
					<h4>Pincode :</h4> 
			      </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <input type="text" class="form-control" placeholder="Enter Pincode"  name="txtpincode" required />
                  </div>
                </div> 
				<div class="col-md-3">
				</div>
				

				<div class="col-md-3">
                  <div class="form-group">
					<h4>Mobile No. :</h4> 
		         </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Your Mobile Number" required name="txtmobile" />
                  </div>
                </div> 
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
                  <div class="form-group">
					<h4>Email Id :</h4> 
		         </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter Your Email Id" required  name="txtemail" />
                  </div>
                </div> 
				<div class="col-md-3">
				</div>
                <div class="col-md-3">
                  <div class="form-group">
					<h4>Gender :</h4> 
		         </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input type="radio" selected  value="Male"  name="gender" ><h5>Male</h5></input>
                  </div>
                </div>
				<div class="col-md-3">
                  <div class="form-group">
                    <input type="radio"  value="Female"  name="gender" /><h5>Female</h5>	</input>
                  </div>
                </div>
				<div class="col-md-3">
				</div>
				
				<div class="col-md-3">
                  <div class="form-group">
					<h4>Birth Date :</h4> 
		         </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="date" class="form-control" id="date" placeholder="Enter Your Birth Date" required  name="txtbirthdate" />
                  </div>
                </div> 
				<div class="col-md-3">
				</div>
				<div class="col-md-12"><br><br>
				</div>
				<div class="col-md-3">
				</div>
                <div class="col-md-3">
                  <div class="form-group">
					<h4>User Name :</h4> 
		         </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" Placeholder="Enter User Name" required name="txtusername" />
                  </div>
                </div> 
				<div class="col-md-3">
				</div>
                <div class="col-md-3">
                  <div class="form-group">
					<h4>Password :</h4> 
		         </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter Your Password" required name="txtpassword" />
                  </div>
                </div> 
				<div class="col-md-3">
				</div>
                <div class="col-md-3">
                  <div class="form-group">
					<h4>Security Question :</h4> 
		         </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Your Security Question" required name="txtquestion" />
                  </div>
                </div> 
				<div class="col-md-12">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
                  <div class="form-group">
					<h4>Answer :</h4> 
		         </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Your Answer" required name="txtanswer" />
                  </div>
                </div> 
				<div class="col-md-6">
				</div>
                
                
				
				
				
				
				<div class="col-md-6">
               <!--   <div class="form-group">
                    <textarea placeholder="Message" cols="11" id="message" name="message" required></textarea>
                  </div> -->
                  <div class="form-group">
                     <div class="btn-submit button3">
                    <input type="submit" id="btn_app_submit" value="Register" />
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5 col-sm-4"> </div>
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
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.geolocation.edit.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
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


