<?php
include("header.php");
if(isset($_GET['testst']))
{
	$sqlq = "SELECT * FROM `question` RAND limit 0,15";
	$qsqlq = mysqli_query($con,$sqlq);
	while($rsq = mysqli_fetch_array($qsqlq))
	{
		$sqltest="INSERT INTO test (enrollerid, examfor, qid,marks,status) VALUES ('$_SESSION[enrollerid]','$_GET[insid]','$rsq[qid]','0','Pending')";
		$qsql = mysqli_query($con,$sqltest);
		echo mysqli_error($con);
	}
	$_SESSION["examsession"] ="Start";
	$_SESSION["timeleft"]=600;
	$_SESSION["insid"] = $_GET['insid'];
	echo "<script>alert('Page will redirect to Exam Panel');</script>";
	echo "<script>window.location='attendtest.php?insid=$_GET[insid]';</script>";
	
}
//Edit statement starts here
$sqledit ="SELECT * FROM llr WHERE llrid='$_GET[insid]'";
$qsqledit = mysqli_query($con,$sqledit);
$rsedit = mysqli_fetch_array($qsqledit);
//Edit statement ends here
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
    <!--about-->
	<section class="about" id="about">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <!--Horizontal Tab-->
        <div id="horizontalTab">
          <ul class="resp-tabs-list justify-content-center">
            <li data-blast="bgColor">Learner License Registration(LLR) Form</li> 
          </ul>
<form action="" method="post" enctype="multipart/form-data">
          <div class="resp-tabs-container  form-control" style="padding:15px;">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3 ">
                <div class="col-md-6 about-txt-img ">

				
    <div class="form-group">
      <label for="email" style="font-weight: bold;">Application No.:</label><br>
	<?php
	echo $rsedit['llrid'];
	?>
    </div>
				
    <div class="form-group">
      <label for="email" style="font-weight: bold;">LLR for:</label><br>
	 <?php
	 $arrvehicletypes = unserialize($rsedit['vehicletypeid']);
	foreach($arrvehicletypes as $vtype)
	{
		$sqlvehicletype = "SELECT * FROM vehicletype WHERE vehicletypeid='$vtype'";
		$qsqlvehicletype = mysqli_query($con,$sqlvehicletype);
		$rsvehicletype = mysqli_fetch_array($qsqlvehicletype);
		echo $rsvehicletype['vehicletype']."<br>";
	}
	?>
    </div>
				
	<div class="form-group">
      <label for="email" style="font-weight: bold;">Full Name :</label>
      <?php echo $rsedit['name']; ?>
    </div>
	

		
	<div class="form-group">
      <label for="email" style="font-weight: bold;">Date of birth <span style="color:red;">(As per Birth  certificate/School  certificate)</span>:</label>
      <?php echo $rsedit['dob']; ?>
    </div>

	
                </div>
                <div class="col-md-6 latest-list">
                  <div class="about-jewel-agile-left">
                    <p>
					
<?php
/*
    <div class="form-group">
      <label for="email">LLR Type:</label>
	  <input type="text" class="form-control" id="llrtype" placeholder="Enter LLRType" name="llrtype" value="<?php echo $rsedit['llrtype']; ?>">
    </div>
*/
?>	

    <div class="form-group">
      <label for="email" style="font-weight: bold;">Photo:</label><br>
		<img src="llrphoto/<?php echo $rsedit['photo']; ?>" id="imagePreview" style="width:175px;height:150px;" >	
    </div>

	
	<?php
	if(isset($_SESSION["empid"]))
	{
	?>
	
	<div class="form-group">
      <label for="email" style="font-weight: bold;">Upload SSLC Marks sheet:</label><br>
	  <a download href="llrmarksheet/<?php echo  $rsedit['identificationmarks']; ?>" style="color:red;">Download</a>
    </div>

	
	<div class="form-group">
      <label for="email" style="font-weight: bold;">ID Proof <span style="color:red;">(As per KYC Address proof)</span>:</label><br>
	  <a download  href="llrdocument/<?php echo $rsedit['document']; ?>" style="color:red;">Download</a>
    </div>
	
	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Test Date</span>:</label><br>
	  <?php
		echo "<lable style='color:green'><b>". date("d-M-Y",strtotime($rsedit['startdate'])) . " Between 10:00 AM - 5:00PM</label><b/>";
	  ?>
    </div>
	
	<?php
	}
	else
	{
	?>
	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Last Date for Test</span>:</label><br>
	  <?php
		echo "<lable style='color:green'><b>". date("d-M-Y",strtotime($rsedit['testdate'])) . " </label><b/>";
	  ?>	  
    </div>


	
	<?php
	}
	?>
  </form>
					
					</p>
                  </div>
  
	
                </div>
              </div>
  <hr>
  
    <center><button type="button" name="button" class="btn btn-info" onclick="window.location='llreceipt.php?insid=<?php echo $_GET['insid']; ?>&testst=LoadTest'" >Click here to Attend Exam</button></center>
            </div>
            
			</div>
	
        </div>
      </div>
    </section>
    <!--//about-->

	

<?php
include("footer.php");
?>
<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
	} );
</script>
<script>
		function confirmdel()
		{
			if(confirm("Are you sure want to delete this record?") == true)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
</script>
<script type="text/javascript">
function loadcity(stateid)
{
    if (stateid == "") 
	{
        document.getElementById("ajaxcity").innerHTML = "<select id='status' name='status' class='form-control'><option value=''>Select City</option></select>";
        return;
    } 
	else 
	{ 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("ajaxcity").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxcity.php?stateid="+stateid,true);
        xmlhttp.send();
    }
}
</script>