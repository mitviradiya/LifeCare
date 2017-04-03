<!doctype html>
<?php
include ("connection.php");
?>


<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile</title>
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
$query="select * from tbluser where userid=".$_SESSION["userid"] ;
$res=mysql_query($query);
$row=mysql_fetch_array($res);
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
                 <li><a href="profile.php"><b>Welcome <?php echo $_SESSION["username"]; ?> </b></a></li>
                <li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li class="dropdown">
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
         <h2 class="title">Profile</h2>
         <div class="page_link"><a href="index.html">Home</a><span><i class="fa fa-long-arrow-right"></i>Profile</span></div>
      </div>
    </div>
  </div>
</div>  
</section>




<section class="padding">
  <div class="container appointment_wrap padding-half">
    <div class="row">
      <div class="col-md-12">
        <h2>Profile Page</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
        <div class="col-md-7 col-sm-8">
          
          <div class="row">
            <form class="callus" method="post" action="modprofileconfirm.php"  id="app_form">
              <div class="row">
                
                 <div class="col-md-12">
                    <div id="result" class="text-center form-group"></div>
                 </div>
                 <div class="col-md-3">
                  	</div>
				  <div class="col-md-3">
                  <div class="form-group">
						
				 <h4>First Name :</h4>
                  </div>
                </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" type="text" name="txtfirstname" id="name"  value="<?php echo $row[1]; ?>" required />
                  </div>
                </div> 
              <div class="col-md-3">
				</div>
				 <div class="col-md-3">
                  <div class="form-group">
					<h4>Last Name :</h4> 
			      </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name" name="txtlastname" value="<?php echo $row[2]; ?>" required />
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
                    <textarea class="form-control"  name="txtaddress" placeholder="Address" cols="5" rows="4" required /><?php echo $row[3]; ?></textarea>
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
                    <input type="text" class="form-control" value="<?php echo $row[4]; ?>"  name="txtcity" required />
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
                  <input type="text" class="form-control" value="<?php echo $row[5]; ?>"  name="txtpincode" required />
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
                    <input type="text" class="form-control" value="<?php echo $row[6]; ?>" name="txtmobile"  required />
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
                    <input type="email" class="form-control" value="<?php echo $row[7]; ?>" name="txtemail" required />
                  </div>
                </div> 
				<div class="col-md-3">
				</div>
                <div class="col-md-3">
                  <div class="form-group">
					<h4>Gender :</h4> 
		         </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $row[8]; ?>" name="txtgender" required  />
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
                    <input type="date" class="form-control" id="date" value="<?php echo $row[9]; ?>" required  name="txtbirthdate" />
                  </div>
                </div> 
				<div class="col-md-4">
				</div>       
				<div class="col-md-4">
                  <div class="form-group">
                     <div class="btn-submit button3">
                    <input type="submit" id="btn_app_submit" value="Modify" />
                    </div>
                  </div>
				  </div>
                <div class="col-md-4">
                  <div class="form-group">
                     <div class="btn-submit button3">
                    <input type="button" id="btn_app_submit"><a href="index.php">Back</a></input>
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


