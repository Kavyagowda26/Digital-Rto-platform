<?php
include("header.php");
//name email subject message submit
if(isset($_POST['submit']))
{
	$headers = "From: rto@studentprojects.live";
mail($_POST[email],$_POST['subject'],$_POST['message'],$headers);
echo "<script>alert('Mail sent successfully...');</script>";
}
?>
       </div>
    <!-- //banner -->
    <!--about-->
    <!--stats-->
    <section class="stats py-lg-4 py-md-3 py-sm-3 py-3" id="stats">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
<br><br><br><br>
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Stats </h3>
        <div class="jst-must-info text-center">
          <div class="row stats-info">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 stats-grid-1">
              <div class="stats-grid" data-blast="bgColor">
                <div class="counter"><?php
				$sql = "SELECT * FROM vehicleregistration";
				$qsql = mysqli_query($con,$sql);
				echo mysqli_num_rows($qsql);
				?></div>
                <div class="stat-info">
                  <h5 class="pt-2">Vechicles </h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 stats-grid-3">
              <div class=" stats-grid" data-blast="bgColor">
                <div class="counter"><?php
				$sql = "SELECT * FROM llr";
				$qsql = mysqli_query($con,$sql);
				echo mysqli_num_rows($qsql);
				?></div>
                <div class="stat-info">
                  <h5 class="pt-2"> Learners</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 stats-grid-2">
              <div class=" stats-grid" data-blast="bgColor">
                <div class="counter"><?php
				$sql = "SELECT * FROM drivinglicense";
				$qsql = mysqli_query($con,$sql);
				echo mysqli_num_rows($qsql);
				?></div>
                <div class="stat-info">
                  <h5 class="pt-2"> Drivers</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-6 stats-grid-4">
              <div class=" stats-grid" data-blast="bgColor">
                <div class="counter"><?php
				$sql = "SELECT * FROM employee";
				$qsql = mysqli_query($con,$sql);
				echo mysqli_num_rows($qsql);
				?></div>
                <div class="stat-info">
                  <h5 class="pt-2"> Staffs </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--//stats-->
    <!--Team-->
    
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Branches </h3>
        <div class="row ">
		<?php
			$sql = "SELECT branch.*,city.city,state.state FROM branch LEFT JOIN city ON branch.cityid=city.cityid LEFT JOIN state ON state.stateid=branch.stateid WHERE branch.status='Active'";
			$qsql= mysqli_query($con,$sql);
			while($rs = mysqli_fetch_array($qsql))
			{
		?>		
          <div class="col-lg-3 col-md-6 col-sm-6 profile">
            <div class="team-shadow">
              <div class="img-box">
                <div class="list-social-icons">
                  <ul>
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                    <li><a href="#"><span class="fas fa-rss"></span></a></li>
                    <li><a href="#"><span class="fab fa-vk"></span></a></li>
                  </ul>
                </div>
              </div><hr>
              <div class="team-w3layouts-info py-lg-4 py-3 text-center" data-blast="bgColor"  style="height: 230px;">
                <h4 class="text-white mb-2"><?php echo $rs['branchname']; ?></h4>
                <span class="wls-client-title text-black"><?php echo $rs['branchaddress']; ?>,<br><?php echo $rs['city']; ?>- <?php echo $rs['pin']; ?>,<br><?php echo $rs['state']; ?> </span></hr>
              </div>
            </div>
          </div>
		 <?php
			}
		?>
		</div>
      </div>
    </section>
    <!--//Team-->
    <!--contact -->
    <section class="contact py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact Us</h3>
        <div class="row">
          <div class="col-md-5 address-grid">
            <div class="addres-office-hour text-center" >
              <ul>
                <li class="mb-2">
                  <h6 data-blast="color">Main Branch</h6>
                </li>
                <li>
                  <p>Public Relations Officer,<br>

Office of the Commissioner for Transport,<br>

1st Floor, ‘A’ Block, TTMC Building,<br>

Shantinagar, Bengaluru - 560 027.</p>
                </li>
              </ul>
              <ul>
                <li class="mt-lg-4 mt-3">
                  <h6 data-blast="color">Phone</h6>
                </li>
                <li class="mt-2">
                  <p>080-22210994</p>
                </li>
                <li class="mt-lg-4 mt-3">
                  <h6 data-blast="color">Email</h6>
                </li>
                <li class="mt-2">
                  <p><a href="mailto:proctr-trans- ka@nic.in"> proctr-trans- ka@nic.in  </a></p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-7 contact-form">
            <form action="" method="post">
              <div class="row text-center contact-wls-detail">
                <div class="col-md-6 form-group contact-forms">
                  <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group contact-forms">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group contact-forms">
                <textarea class="form-control" name="message" rows="3" placeholder="Your Message" required=""></textarea>
              </div>
              <div class="sent-butnn text-center">
                <button type="submit" name="submit" class="btn btn-block" data-blast="bgColor">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--//contact -->
    <!--footer-->
    <?php
include("footer.php");
?>