<?php
include("header.php");
//Edit statement starts here
$sqledit ="SELECT * FROM drivinglicense WHERE drivinglicenseid='$_GET[insid]'";
$qsqledit = mysqli_query($con,$sqledit);
$rsedit = mysqli_fetch_array($qsqledit);
//Edit statement ends here
if(isset($_POST['submit']))
{  
	$sql = "UPDATE drivinglicense SET status='$_POST[appstatus]',startdate='$_POST[startdate]',enddate='$_POST[enddate]',dlno='$_POST[dlno]' WHERE drivinglicenseid='$_GET[insid]'";
	$qsql =mysqli_query($con,$sql);
	echo "<script>alert('Driving license status updated successfully..');</script>";
	echo "<script>window.location='dlview.php?insid=$_GET[insid]';</script>";
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
    <!--about-->
	<section class="about" id="about">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <!--Horizontal Tab-->
        <div id="horizontalTab">
          <ul class="resp-tabs-list justify-content-center">
            <li data-blast="bgColor">Driving License Application(DL) Form</li> 
			<p class="mb-3" style="color:red;">Kindly fill all mandatory details to process DL Application..</p>
          </ul>
<form action="" method="post" enctype="multipart/form-data">
          <div class="resp-tabs-container  form-control" style="padding:15px;">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3 ">
                <div class="col-md-6 about-txt-img ">

				
    <div class="form-group">
      <label for="email" style="font-weight: bold;">Application No.:</label><br>
	<?php
	echo $rsedit['drivinglicenseid'];
	?>
    </div>
				
    <div class="form-group">
      <label for="email" style="font-weight: bold;">DL for:</label><br>
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
      <label for="email" style="font-weight: bold;">Son/wife/daughter of:</label>
      <?php echo $rsedit['swdof']; ?>
    </div>
	<div class="form-group">
      <label for="email" style="font-weight: bold;">Permanent address <span style="color:red;">(As per KYC Address proof)</span>:</label><br><?php echo $rsedit['paddr']; ?>
    </div>
	<div class="form-group">
      <label for="email" style="font-weight: bold;">Temporary address/ Official address:</label>
	  <?php echo $rsedit['taddr']; ?>
    </div>
	<div class="form-group">
      <label for="email" style="font-weight: bold;">Duration of stay at the present address:</label><br>
      <?php echo $rsedit['paddrduration']; ?> years
    </div>
	<div class="form-group">
      <label for="email" style="font-weight: bold;">State:</label>
		<?php
			$sqlstateid ="SELECT * FROM state WHERE status='Active'";
			$qsqlstateid = mysqli_query($con,$sqlstateid);
			while($rsstateid = mysqli_fetch_array($qsqlstateid) )
			{
				if($rsstateid['stateid'] == $rsedit['stateid'])
				{
				echo "<option value='$rsstateid[stateid]' selected>$rsstateid[state]</option>";
				}
			}
		?>
    </div>
	
	
	<div class="form-group" id="ajaxcity">
      <label for="email" style="font-weight: bold;">City:</label>
			<?php
				$sqlstateid ="SELECT * FROM city WHERE status='Active'";
				$qsqlstateid = mysqli_query($con,$sqlstateid);
				while($rsstateid = mysqli_fetch_array($qsqlstateid) )
				{
					if($rsstateid['cityid'] == $rsedit['cityid'])
					{
					echo "<option value='$rsstateid[cityid]' selected>$rsstateid[city]</option>";
					}
				}
			?>
    </div>
	
	<div class="form-group" id="ajaxcity">
      <label for="email" style="font-weight: bold;">RTO Address:</label><br>
	  <?php
	$sqlbranch= "SELECT branch.*,state.*,city.* FROM branch LEFT JOIN state ON branch.stateid=state.stateid LEFT JOIN city ON city.cityid=branch.cityid WHERE branch.stateid='$rsedit[stateid]' AND branch.cityid='$rsedit[cityid]'";
	$qsqlbranch = mysqli_query($con,$sqlbranch);
	$rsbranch = mysqli_fetch_array($qsqlbranch);
	echo $rsbranch['branchname'] . ",<br>" . $rsbranch['branchaddress']. ",<br>" . $rsbranch['city'] . ",<br>" . $rsbranch['state'] . ",<br>PIN" . $rsbranch['pin'];
	?>
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
		<img src="dlphoto/<?php echo $rsedit['photo']; ?>" id="imagePreview" style="width:175px;height:150px;" >	
    </div>

		
	<div class="form-group">
      <label for="email" style="font-weight: bold;">Date of birth <span style="color:red;">(As per Birth  certificate/School  certificate)</span>:</label>
      <?php echo $rsedit['dob']; ?>
    </div>
	<div class="form-group">
      <label for="email" style="font-weight: bold;">Place of Birth:</label>
      <?php echo $rsedit['birthplace']; ?>
    </div>

	<div class="form-group">
      <label for="email" style="font-weight: bold;">Qualification:</label>
      <?php echo $rsedit['qualification']; ?>
    </div>
	<div class="form-group">
      <label for="email" style="font-weight: bold;">Blood Group:</label>
			<?php
				$arr = array("O-positive","O-negative","A-positive","A-negative","B-positive","B-negative","AB-positive","AB-negative","Others");
				foreach($arr as $val)
				{
					if($rsedit['bloodgroup'] == $val)
					{
					echo "<option value='$val' selected>$val</option>";
					}
				}
			?>
    </div>
	
	<?php
	if(isset($_SESSION["empid"]))
	{
	?>
	
	<div class="form-group">
      <label for="email" style="font-weight: bold;">Upload SSLC Marks sheet:</label><br>
	  <a download href="dlmarksheet/<?php echo  $rsedit['identificationmarks']; ?>" style="color:red;">Download</a>
    </div>
	
	<div class="form-group">
      <label for="email" style="font-weight: bold;">ID Proof <span style="color:red;">(As per KYC Address proof)</span>:</label><br>
	  <a download  href="dldocument/<?php echo $rsedit['document']; ?>" style="color:red;">Download</a>
    </div>
	
	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Application Date</span>:</label><br>
	  <?php
		echo "<lable style='color:green'><b>". date("d-M-Y",strtotime($rsedit['applicationdate']. ' + 30 days')) . " </label><b/>";
	  ?>	
    </div>	
	
	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Application status</span>:</label><br>
	    <?php echo $rsedit['status']; ?>
    </div>

	<?php
	if($rsedit['status'] != "Driving License issued" )
	{
	?>
	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Update Application status</span>:</label><br>
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Update</button>
    </div>
	<?php
	}
	?>
	<?php
	}
	else
	{
	?>
	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Application Date</span>:</label><br>
	  <?php
		echo "<lable style='color:green'><b>". date("d-M-Y",strtotime($rsedit['applicationdate']. ' + 30 days')) . " </label><b/>";
	  ?>	
    </div>	
	
	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Application status</span>:</label><br>
	    <?php echo $rsedit['status']; ?>
    </div>
	
	<?php
	}
	?>
  </form>

<!--Don't add spaces or newlines between the li elements!-->
<style>
.progress-meter {
  padding: 0;
}

ol.progress-meter {
  padding-bottom: 9.5px;
  list-style-type: none;
}
ol.progress-meter li {
  display: inline-block;
  text-align: center;
  text-indent: -19px;
  height: 36px;
  width: 22.99%;
  font-size: 12px;
  border-bottom-width: 4px;
  border-bottom-style: solid;
}
ol.progress-meter li:before {
  position: relative;
  float: left;
  text-indent: 0;
  left: -webkit-calc(50% - 9.5px);
  left: -moz-calc(50% - 9.5px);
  left: -ms-calc(50% - 9.5px);
  left: -o-calc(50% - 9.5px);
  left: calc(50% - 9.5px);
}
ol.progress-meter li.done {
  font-size: 12px;
}
ol.progress-meter li.done:before {
  content: "\2713";
  height: 19px;
  width: 19px;
  line-height: 21.85px;
  bottom: -28.175px;
  border: none;
  border-radius: 19px;
}
ol.progress-meter li.todo {
  font-size: 12px;
}
ol.progress-meter li.todo:before {
  content: "\2B24";
  font-size: 17.1px;
  bottom: -26.95px;
  line-height: 18.05px;
}
ol.progress-meter li.done {
  color: black;
  border-bottom-color: yellowgreen;
}
ol.progress-meter li.done:before {
  color: white;
  background-color: yellowgreen;
}
ol.progress-meter li.todo {
  color: silver;
  border-bottom-color: silver;
}
ol.progress-meter li.todo:before {
  color: silver;
}
</style>
  
					</p>
                  </div>
                </div>
              </div>
            </div>
<hr>            
<div class="container">
<center><font style="color:blue;">Application tracker</font></center>
  <ol class="progress-meter">
    <li class="progress-point done">Application submission</li><li class="progress-point done">Payment</li>
	 <!-- style="color:red;border-bottom-color: red;" -->
	<li 
	<?php
	if($rsedit['status'] == "Rejected" )
	{	
		echo " style='color:red;border-bottom-color: red;' ";
	}
	?>
 class="progress-point 
	<?php
	if($rsedit['status'] == "Approved" || $rsedit['status'] == "Driving License issued" )
	{		
	echo " done ";
	}
	else
	{
	echo " todo";
	}
	?>
	" >Driving Test</li>
	
	<li 	<?php
	if($rsedit['status'] == "Rejected" )
	{	
		echo " style='color:red;border-bottom-color: red;' ";
	}
	?> class="progress-point 
	<?php
	if($rsedit['status'] == "Driving License issued" )
	{		
	echo " done ";
	}
	else
	{
	echo " todo";
	}
	?>
	">Driving license issued</li>
  </ol>
  <?php
	if($rsedit['status'] == "Rejected" )
	{	
		echo "<center><label style='color:red;'>Your application has been rejected</label></center>";
	}
	?>
  
</div>
			
			
			</div>
	
        </div>
    <center><button type="button" name="button" class="btn btn-info" onclick="printDiv('about')">Click here to Print</button></center>
      </div>
    </section>
    <!--//about-->

	
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">DL Application</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>
			<form method="post" action="" >
				<?php
				if($rsedit['status'] == "Paid")
				{
				?>
	<div class="form-group">
      <label for="email">Status:</label>
      <select id="status" name="appstatus" class="form-control">
		<option value="">Select status</option>
		<?php
			$arr = array("Approved","Rejected");
			foreach($arr as $val)
			{
				if($val == $rsedit['status'])
				{
				echo "<option value='$val' selected>$val</option>";
				}
				else
				{
				echo "<option value='$val'>$val</option>";
				}
			}
		?>
	  </select>
    </div>
    <button type="submit" name="submit" class="btn btn-info">Update driving license status</button>
				<?php
				}
				?>
				
								<?php
				if($rsedit['status'] == "Approved")
				{
				?>
	<input type="hidden" name="appstatus" value="Driving License issued">
	<div class="form-group">
		<label for="email">Start Date:</label>
		<input type="text" name="startdate" class="form-control" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" readonly>
    </div>
	<div class="form-group">
		<label for="email">End Date:</label>
		<input type="text" name="enddate" class="form-control" value="<?php  echo date('Y-m-d', strtotime(' + 225 months')); ?>" readonly>
    </div> 
	<div class="form-group">
		<label for="email">DL No.:</label>
		<input type="text" name="dlno"  class="form-control">
    </div>
    <button type="submit" name="submit" class="btn btn-info">Update driving license status</button>
				<?php
				}
				?>
			</form>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


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

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>