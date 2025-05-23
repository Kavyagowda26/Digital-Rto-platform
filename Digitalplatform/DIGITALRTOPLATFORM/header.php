<?php
if(!isset($_SESSION)) { session_start(); }
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT  &  ~E_WARNING);
include("dbconnection.php");
$dt = date("Y-m-d");
//Enroller Profile starts here
if(isset($_SESSION['enrollerid']))
{
	$sqlenrollerprofile ="SELECT * FROM enroller WHERE enrollerid='$_SESSION[enrollerid]'";
	$qsqlenrollerprofile = mysqli_query($con,$sqlenrollerprofile);
	$rsenrollerprofile = mysqli_fetch_array($qsqlenrollerprofile);
}
//Enroller Profile ends here
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>DIGITAL RTO PLATFORM</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="RTO Management System" />
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
    <link href="css/blast.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/style10.css" />
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <link href="css/validationcss.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
	<link href="css/jquery.dataTables.min.css" rel='stylesheet' type='text/css' media="all">
  </head>
  <body>

<style>
#mmenu, #mmenu ul {
margin: 0;
padding: 0;
list-style: none;
}
#mmenu {
width: 100%;

border: 1px solid #222;
background-color: #111;
background-image: -moz-linear-gradient(#444, #111); 
background-image: -webkit-gradient(linear, left top, left bottom, from(#444), to(#111)); 
background-image: -webkit-linear-gradient(#444, #111); 
background-image: -o-linear-gradient(#444, #111);
background-image: -ms-linear-gradient(#444, #111);
background-image: linear-gradient(#444, #111);
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
border-radius: 6px;
-moz-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
-webkit-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
}
#mmenu:before,
#mmenu:after {
content: "";
display: table;
}
#mmenu:after {
clear: both;
}
#mmenu {
zoom:1;
}
#mmenu li {
float: left;
border-right: 1px solid #222;
-moz-box-shadow: 1px 0 0 #444;
-webkit-box-shadow: 1px 0 0 #444;
box-shadow: 1px 0 0 #444;
position: relative;
}
#mmenu a {
float: left;
padding: 12px 30px;
color: #999;
text-transform: uppercase;
font: bold 12px Arial, Helvetica;
text-decoration: none;
text-shadow: 0 1px 0 #000;
}
#mmenu li:hover > a {
color: #fafafa;
}
*html #mmenu li a:hover { /* IE6 only */
color: #fafafa;
}
#mmenu ul {
margin: 20px 0 0 0;
_margin: 0; /*IE6 only*/
opacity: 0;
visibility: hidden;
position: absolute;
top: 38px;
left: 0;
z-index: 9999; 
background: #444; 
background: -moz-linear-gradient(#444, #111);
background-image: -webkit-gradient(linear, left top, left bottom, from(#444), to(#111));
background: -webkit-linear-gradient(#444, #111); 
background: -o-linear-gradient(#444, #111); 
background: -ms-linear-gradient(#444, #111); 
background: linear-gradient(#444, #111);
-moz-box-shadow: 0 -1px rgba(255,255,255,.3);
-webkit-box-shadow: 0 -1px 0 rgba(255,255,255,.3);
box-shadow: 0 -1px 0 rgba(255,255,255,.3); 
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
-ms-transition: all .2s ease-in-out;
-o-transition: all .2s ease-in-out;
transition: all .2s ease-in-out; 
} 
#mmenu li:hover > ul {
opacity: 1;
visibility: visible;
margin: 0;
}
#mmenu ul ul {
top: 0;
left: 150px;
margin: 0 0 0 20px;
_margin: 0; /*IE6 only*/
-moz-box-shadow: -1px 0 0 rgba(255,255,255,.3);
-webkit-box-shadow: -1px 0 0 rgba(255,255,255,.3);
box-shadow: -1px 0 0 rgba(255,255,255,.3); 
}
#mmenu ul li {
float: none;
display: block;
border: 0;
_line-height: 0; /*IE6 only*/
-moz-box-shadow: 0 1px 0 #111, 0 2px 0 #666;
-webkit-box-shadow: 0 1px 0 #111, 0 2px 0 #666;
box-shadow: 0 1px 0 #111, 0 2px 0 #666;
}
#mmenu ul li:last-child { 
-moz-box-shadow: none;
-webkit-box-shadow: none;
box-shadow: none; 
}
#mmenu ul a { 
padding: 10px;
width: 130px;
_height: 10px; /*IE6 only*/
display: block;
white-space: nowrap;
float: none;
text-transform: none;
}
#mmenu ul a:hover {
background-color: #0186ba;
background-image: -moz-linear-gradient(#04acec, #0186ba); 
background-image: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));
background-image: -webkit-linear-gradient(#04acec, #0186ba);
background-image: -o-linear-gradient(#04acec, #0186ba);
background-image: -ms-linear-gradient(#04acec, #0186ba);
background-image: linear-gradient(#04acec, #0186ba);
}
#mmenu ul li:first-child > a {
-moz-border-radius: 3px 3px 0 0;
-webkit-border-radius: 3px 3px 0 0;
border-radius: 3px 3px 0 0;
}
#mmenu ul li:first-child > a:after {
content: '';
position: absolute;
left: 40px;
top: -6px;
border-left: 6px solid transparent;
border-right: 6px solid transparent;
border-bottom: 6px solid #444;
}
#mmenu ul ul li:first-child a:after {
left: -6px;
top: 50%;
margin-top: -6px;
border-left: 0; 
border-bottom: 6px solid transparent;
border-top: 6px solid transparent;
border-right: 6px solid #3b3b3b;
}
#mmenu ul li:first-child a:hover:after {
border-bottom-color: #04acec; 
}
#mmenu ul ul li:first-child a:hover:after {
border-right-color: #0299d3; 
border-bottom-color: transparent; 
}
#mmenu ul li:last-child > a {
-moz-border-radius: 0 0 3px 3px;
-webkit-border-radius: 0 0 3px 3px;
border-radius: 0 0 3px 3px;
}
</style>

<div id="mmenu">

<?php
if(isset($_SESSION["empid"]))
{
?>

<li><a href="employeepanel.php">Dashboard</a></li>

<li>
	<a href="#">LLR</a>
	<ul>
	<li><a href="llr.php?paymentview=LLR" style="width:175px;">LLR Applications</a></li>
	<li><a href="viewpayment.php?paymentview=LLR" style="width:175px;">LLR Payment</a></li>
	</ul>
</li>

<li>
	<a href="#">DL</a>
	<ul>
	<li><a href="drivinglicense.php" style="width:150px;">View DL Applications</a></li>
	<li><a href="viewchangeofaddress.php" style="width:150px;">Change of Address</a></li>
	<li><a href="drivinglicenserenewal.php" style="width:150px;">DL Renewal</a></li>
	<li><a href="viewpayment.php?paymentview=DL" style="width:150px;">Payment</a></li>
	</ul>
</li>

<li>
	<a href="#">Vehicle Registration</a>
	<ul>

	<li><a href="viewvehicleregistration.php" style="width:250px;">View Vehicle Registration</a></li>
	</ul>
</li>

<li>
	<a href="#">Test</a>
	<ul>
		<li><a href="question.php">Question</a></li>
	</ul>
</li>

<li>
	<a href="#">Enroller</a>
	<ul>
	<li><a href="enroller.php">Enroller</a></li>
	</ul>
</li>


<li>
	<a href="#">Employee</a>
	<ul>
	<li><a href="employee.php">Employee</a></li>
	<li><a href="empprofile.php">MY Profile</a></li>
	<li><a href="empchangepwd.php">Change password</a></li>
	</ul>
</li>


<li>
	<a href="#">Settings</a>
	<ul>
	<li><a href="branch.php">RTO Office</a></li>
	<li><a href="city.php">City</a></li>
	<li><a href="state.php">State</a></li>
	<li><a href="vehicletype.php">Vehicle Type</a></li>
	</ul>
</li>

<li><a href="logout.php">Logout</a></li>

<?php
}
if(isset($_SESSION["enrollerid"]))
{
?>
<li><a href="userpanel.php">APPLICATION FORM</a></li>
<li>
	<a href="#">User</a>
	<ul>
	<li><a href="userprofile.php">MY Profile</a></li>
	<li><a href="userchangepwd.php">Change password</a></li>
	</ul>
</li>
<li><a href="viewvehicleregistration.php">View Vehicle Registration</a></li>
<li><a href="logout.php">Logout</a></li>
<?php
}
?>

</div>
  
    <div class="blast-box">
      <div class="blast-frame">
        <p>change colors</p>
        <div class="blast-colors">
          <div class="blast-color">#86bc42</div>
          <div class="blast-color">#8373ce</div>
          <div class="blast-color">#14d4f4</div>
          <div class="blast-color">#72284b</div>
        </div>
        <p class="blast-custom-colors">Custom colors</p>
        <input type="color" name="blastCustomColor" value="#cf2626">
      </div>
    </div>
    <div class="header-outs" id="header">
      <div class="header-w3layouts">
        <div class="container">
          <div class="row headder-contact">
            <div class="col-lg-6 col-md-7 col-sm-9 info-contact-agile">
              <ul>
                <li>
                  <span class="fas fa-phone-volume" ></span>
                  <p>+(080)5555 6666</p>
                </li>
                <li>
                  <span class="fas fa-envelope"></span>
                  <p><a href="mailto:info@example.com">info@gowdagroups.com</a></p>
                </li>
                <li>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-3 icons px-0">
              <ul>
                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                <li><a href="#"><span class="fas fa-rss"></span></a></li>
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="hedder-up">
            <h1 ><a href="index.php" class="navbar-brand" data-blast="color">DIGITAL RTO PLATFORM</a></h1>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="headdser-nav-color" data-blast="bgColor">
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">			
<ul class="navbar-nav ">
	<li class="nav-item   <?php
	  if(basename($_SERVER['PHP_SELF']) =="index.php")
	  {
		  echo " active ";
	  }
		?>">
	  <a class="nav-link" href="index.php">Home</a>
	</li>
	<li class="nav-item   <?php
	  if(basename($_SERVER['PHP_SELF']) =="about.php")
	  {
		  echo " active ";
	  }
		?>" >
	  <a href="about.php" class="nav-link" >About</a>
	</li>
	<?php
	if(isset($_SESSION["enrollerid"]))
	{
	?>
	<li class="nav-item   <?php
	  if(basename($_SERVER['PHP_SELF']) =="userpanel.php")
	  {
		  echo " active ";
	  }
		?>">
	  <a href="userpanel.php" class="nav-link">My&nbsp;Account</a>
	</li>
	<li class="nav-item   <?php
	  if(basename($_SERVER['PHP_SELF']) =="logout.php")
	  {
		  echo " active ";
	  }
		?>">
	  <a href="logout.php" class="nav-link">Logout</a>
	</li>
	<?php
	}
	else
	{
	?>
	<li class="nav-item   <?php
	  if(basename($_SERVER['PHP_SELF']) =="userregister.php")
	  {
		  echo " active ";
	  }
		?>">
	  <a href="userregister.php" class="nav-link">Register</a>
	</li>
	<li class="nav-item   <?php
	  if(basename($_SERVER['PHP_SELF']) =="userlogin.php")
	  {
		  echo " active ";
	  }
		?>">
	  <a href="userlogin.php" class="nav-link">login</a>
	</li>
	<?php
	}
	?>
	<li class="nav-item   <?php
	  if(basename($_SERVER['PHP_SELF']) =="contact.php")
	  {
		  echo " active ";
	  }
		?>">
	  <a href="contact.php" class="nav-link">Contact</a>
	</li>
</ul>
            </div>
          </div>
        </nav>
        <!--//navigation section -->
        <div class="clearfix"> </div>
      </div>