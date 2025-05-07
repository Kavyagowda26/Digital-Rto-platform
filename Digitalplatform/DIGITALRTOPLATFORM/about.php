<?php
include("header.php");
/*
###Pending works: 
1) Change images in APPLICATION FORM - LLR Application,Driving License Application,Vehicle Registration, Address Change, Driving License Renewal, Driving License Renewal
*/
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
        <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">About Us </h3>
        <div class="row">
          <div class="col-lg-12 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/rtobanner.gif" class="img-fluid" alt="" style="width:100%;height:300px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-blast="color">About RTO</a></h4>
            <p>RTO is also called as the Regional Transport Office. It is an organization of the Government of India with a primary motive to maintain the database of all the vehicles in different States and Union Territories of India.</p>
			<p>For every city and state, there is a different RTO to execute the activities and the functions, as per the Motor Vehicles Act, 1988. And the Transport Commissioner is the head of the departments in the specific states.</p>
            <p>The aim is to ensure proper functioning of vehicles which are allotted under specific series in a particular state. The Regional Transport Office identifies the vehicles that are not taxed. The role also involves identifying the cars entering different Indian states. RTO also keeps a tab of vehicles exceeding the prescribed speed limit on the roads as caught on the speed cameras.</p>
            <p>RTO of a state is responsible for vehicle registration, re-registration, transfer of ownership, issuing driving licenses, tax collection and the likewise. Furthermore, the RTO officer grants fitness certificates to transport vehicles and checks for the validity of the motor insurance policies.</p>
            <p>One can visit the RTO office physically for vehicle registration or do it online. Nowadays, all the RTO services are available online of the official site of every state.</p>
              </div>
            </div>
          </div>
		</div>
		<hr>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/llr.png" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-blast="color">LLR Application </a></h4>
                <p>Drivers Need To Get Their Hands On A Learners License Before They Begin Practising Driving...</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6  blog-grid-flex">
            <div class="clients-color">
              <img src="images/dl.jpg" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#"  data-blast="color">Driving License Application </a></h4>
                <p>All People Should Have Valid Licenses When Driving In A Public Space. They Need To Have Their Own License..</p>

              </div>
            </div>
          </div>
		  
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/vehicleregistration.png" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#"  data-blast="color">Vehicle Registration </a></h4>
                <p>The Vehicle Has To Be Registered With The RTO Before It Receives The Go-Ahead To Be Driven On The Road... </p>
       
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
                <p>If Vehicle Owners Are Changing Their Addresses, They Have To Make This Change On The Vehicle Documents.</p>
             
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6  blog-grid-flex">
            <div class="clients-color">
              <img src="images/dlrenew.jpg" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-blast="color">Driving License Renewal </a></h4>
                <p>Driver's Licenses Have An Expiration Date And Need To Be Renewed Or Reapplied... </p>
              
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 blog-grid-flex">
            <div class="clients-color">
              <img src="images/Car-Insurance.jpg" class="img-fluid" alt="" style="width:100%;height:200px;">
              <div class="blog-txt-info">
                <h4 class="mt-2"><a href="#" data-blast="color">Vehicle Insurance </a></h4>
                <p>Company which offers comprehensive motor/vehicle insurance policies for car, two wheeler and commercial vehicles....</p>
               
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
		include("insurancecompanies.php");
		?>
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