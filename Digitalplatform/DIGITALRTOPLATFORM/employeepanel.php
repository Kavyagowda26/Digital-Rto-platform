<?php
include("header.php");
if(!isset($_SESSION["empid"]))
{
	echo "<script>window.location='index.php';</script>";
}
?>
      <!--banner -->
      <!-- Slideshow 4 -->
      <div class="slider">
        <div class="callbacks_container">
          <ul class="rslides" id="slider4">
            <li style="background-color:black;height:150px;">

            </li>
			</ul>
        </div>
        <!-- This is here just to demonstrate the callbacks -->
        <!-- <ul class="events">
          <li>Example 4 callback events</li>
          </ul>-->
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- //banner -->
  
  
    <!--blog -->
    <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Dashboard</h3>
        <div class="row">
          
		  
		  <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/branch-office1.jpg" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Branch Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM branch ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="branch.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>
		  
		  <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/cityoff.jpg" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">City Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM city ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="city.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/dloffice.jfif" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Driving License Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM drivinglicense ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="drivinglicense.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>
		 
		 
		  
		   <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5">
            <div class="clients-color">
              <img src="images/empoffice.jpg" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Employee Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM employee ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="employee.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>
		 
		<div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5">
            <div class="clients-color">
              <img src="images/enroller.png" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Enroller Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM enroller ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="user.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>
		  
		 
		<div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5">
            <div class="clients-color">
              <img src="images/LLR1.png" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">LLR Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM llr ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="llr.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>
		
		
		
		<div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5">
            <div class="clients-color">
              <img src="images/pay.png" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Payment Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM payment ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="payment.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>
		
		
		
		<div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5">
            <div class="clients-color">
              <img src="images/ques.jpg" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Question Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM question ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="question.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>
		
		
		
		
		<div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5">
            <div class="clients-color">
              <img src="images/state.png" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">State Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM state ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="state.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>
		  
		 
		
		<div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5">
            <div class="clients-color">
              <img src="images/test.jpg" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Test Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM test ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="test.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div> 
		  
		  
		
		<div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5">
            <div class="clients-color">
              <img src="images/vehicleregistration0.png" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Vehicle Registration Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM vehicleregistration ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="vehicleregistration.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div> 
		  
		  
		 
		
		<div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex mt-lg-5">
            <div class="clients-color">
              <img src="images/vehi.jpg" class="img-fluid" style="height:125px;width:100%;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-toggle="modal" data-target="#exampleModalLive" data-blast="color">Vehicle Type Record </a></h4>
                <div class="news-date my-3">
                  <ul>
                    <li><span class="far fa-comments"></span><a href="#" >
					<?php
					$sql = "SELECT * FROM vehicletype ";
					$qsql = mysqli_query($con,$sql);
					echo mysqli_num_rows($qsql);
					?>
					records </a></li>
                  </ul>
                </div>
                <div class="outs_more-buttn" >
                  <a href="vehicletype.php" data-blast="bgColor">More</a>
                </div>
              </div>
            </div>
          </div>  
		  
          
     
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--//blog -->

<?php
include("footer.php");
?>