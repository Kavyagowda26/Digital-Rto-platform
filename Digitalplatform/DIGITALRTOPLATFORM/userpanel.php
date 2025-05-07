<?php
include("header.php");
/*
###Pending works: 
1) Change images in APPLICATION FORM - LLR Application,Driving License Application,Vehicle Registration, Address Change, Driving License Renewal, Driving License Renewal
*/
if(!isset($_SESSION["enrollerid"]))
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
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Application Form </h3>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/llr.png" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-blast="color">LLR Application </a></h4>
                <p>Drivers Need To Get Their Hands On A Learners License Before They Begin Practising Driving...</p>
                <div class="outs_more-buttn" >
<?php
$sqlllr = "SELECT * FROM llr WHERE enrollerid='$_SESSION[enrollerid]' AND ('$dt' BETWEEN startdate AND enddate) AND status='Active'";
$qsqlllr = mysqli_query($con,$sqlllr);
$rsllr = mysqli_fetch_array($qsqlllr);
	if(mysqli_num_rows($qsqlllr) >= 1)								  
	{
?>
			<center><a href="llrprint.php?insid=<?php echo $rsllr[0]; ?>" data-blast="bgColor">View and Print</a>
<?php
	}
	else
	{
?>	
            <center><a href="llrapplication.php" data-blast="bgColor">Click here to Apply</a></center>
<?php
	}
?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6  blog-grid-flex">
            <div class="clients-color">
              <img src="images/dl.jpg" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#"  data-blast="color">Driving License Application </a></h4>
                <p>All People Should Have Valid Licenses When Driving In A Public Space. They Need To Have Their Own License..</p>
                <div class="outs_more-buttn" >
<?php
$sqlllr = "SELECT * FROM drivinglicense WHERE enrollerid='$_SESSION[enrollerid]' AND testdate>='$dt' AND status='Driving License issued' ORDER BY drivinglicenseid desc limit 0,1";
$qsqlllr = mysqli_query($con,$sqlllr);
$rsllr = mysqli_fetch_array($qsqlllr);
	if(mysqli_num_rows($qsqlllr) >= 1)								  
	{
?>
        <center><a href="dlreceipt.php?insid=<?php echo $rsllr[0]; ?>" data-blast="bgColor">View and Print</a></center>
<?php
	}
	else
	{
?>	
        <center><a href=""  data-toggle="modal" data-target="#modaldl" data-blast="bgColor">Click here to Apply</a></center>
<?php
	}
?>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/vehicleregistration.png" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#"  data-blast="color">Vehicle Registration </a></h4>
                <p>The Vehicle Has To Be Registered With The RTO Before It Receives The Go-Ahead To Be Driven On The Road... </p>
                <div class="outs_more-buttn" >
                  <center><a href="enrollervehicleregistration.php" data-blast="bgColor">Click here to Apply</a></center>
                </div>
              </div>
            </div>
          </div>
		  
		 </div>
      </div>
      <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/changeofaddress.jpg" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#"  data-blast="color">Address change </a></h4>
                <p>If you are willing to change address of your DL then this is the right place. You can apply here...</p>
                <div class="outs_more-buttn" >
                   <center><a href="#" data-toggle="modal" data-target="#modaddresschange" data-blast="bgColor">Click here to Apply</a></center>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6  blog-grid-flex">
            <div class="clients-color">
              <img src="images/dlrenew.jpg" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-blast="color">Driving License Renewal </a></h4>
                <p>Driver's Licenses Have An Expiration Date And Need To Be Renewed Or Reapplied... </p>
                <div class="outs_more-buttn" >
                   <center><a href="#" data-toggle="modal" data-target="#moddlrenewal" data-blast="bgColor">Click here to Apply</a></center>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/Car-Insurance.jpg" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-blast="color">Vehicle Insurance </a></h4>
                <p>Company which offers comprehensive motor/vehicle insurance policies for car, two wheeler and commercial vehicles....</p>
                <div class="outs_more-buttn" >
                  <center><a href="#" data-toggle="modal" data-target="#exampleModalLiveview" data-blast="bgColor">Click here to View</a></center>
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


			<!--model-->
<div id="modaldl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h4 class="modal-title" id="exampleModalLiveLabel" data-blast="color">Driving License</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<img src="images/b2.jpg" alt="" class="img-fluid" style="width:100%;">
		<b>Enter LLR number to Apply for Driving License..</b>
		<input type="text" class="form-control" name="llrid" id="llrid">
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary" onclick='verifyllr(llrid.value)'>Click here to Verify</button>
	  </div>
	</div>
  </div>
</div>
<!--//model-->

<!--model-->
<div id="modaddresschange" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h4 class="modal-title" id="exampleModalLiveLabel" data-blast="color">Change of Address</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<img src="images/changeofaddress.jpg" alt="" class="img-fluid" style="width:100%;">
		<b>Enter Driving License number to change address..</b>
		<input type="text" class="form-control" name="dlnos" id="dlnos">
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary" onclick='verifydl(dlnos.value)'>Click here to Verify</button>
	  </div>
	</div>
  </div>
</div>
<!--//model-->

<!--model-->
<div id="moddlrenewal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h4 class="modal-title" id="exampleModalLiveLabel" data-blast="color">Driving License Renewal</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<img src="images/RenewDrivers-License-Online.gif" alt="" class="img-fluid" style="width:100%;">
		<b>Enter LLR number to Apply for Driving License..</b>
		<input type="text" class="form-control" name="renewaldlid" id="renewaldlid">
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-primary" onclick='verifydl4renewal(renewaldlid.value)'>Click here to Verify</button>
	  </div>
	</div>
  </div>
</div>
<!--//model-->

<!--model-->
<div id="exampleModalLiveview" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h4 class="modal-title" id="exampleModalLiveLabel" data-blast="color">View Vehicle Insurance list</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
	  <?php
		// PHP Code (for including the insurancecompanies.php content)
		include("insurancecompanies.php");
	?>


<script type="text/javascript">
  // Open the page in a new tab after it has been loaded
  window.open('insurancecompanies.php', '_blank');
</script>

	  </div>
	</div>
  </div>
</div>
<!--//model-->

<script>
function verifyllr(llrid)
{
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} 
	else 
	{
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if(this.responseText == 0)
			{
				alert("You have entered invalid LLR details..");
				window.location='userpanel.php';
			}
			if(this.responseText == 1)
			{
				alert("Page will redirect to Driving license application form..");
				window.location='dlapplication.php?llrid='+llrid;
			}
		}
	};
	xmlhttp.open("GET","ajaxverifyllr.php?llrid="+llrid,true);
	xmlhttp.send();
}
function verifydl(dlno)
{
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	}
	else 
	{
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if(this.responseText == 0)
			{
				alert("You have entered invalid DL Number..");
				window.location='userpanel.php';
			}
			if(this.responseText == 1)
			{
				alert("Page will redirect to Driving license Address change Request Form..");
				window.location='dladresschange.php?dlno='+dlno;
			}
		}
	};
	xmlhttp.open("GET","ajaxverifydl.php?dlno="+dlno,true);
	xmlhttp.send();
}
function verifydl4renewal(renewaldlid)
{
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} 
	else 
	{
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			if(this.responseText == 0)
			{
				alert("You have entered invalid LLR details..");
				window.location='userpanel.php';
			}
			if(this.responseText == 1)
			{
				alert("Page will redirect to Renew Driving license application form..");
				window.location='drivinglicenserenewalapplication.php?renewaldlid='+renewaldlid;
			}
			
			if(this.responseText == 2)
			{
				alert("Your Driving license not expired yet..");
				window.location='userpanel.php';
			}
		}
	};
	xmlhttp.open("GET","ajaxrenewdlverify.php?renewaldlid="+renewaldlid,true);
	xmlhttp.send();
}
</script>	