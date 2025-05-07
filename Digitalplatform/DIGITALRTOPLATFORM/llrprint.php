<?php
include("header.php");
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
			<p class="mb-3" style="color:red;">Kindly fill all mandatory details to process LLR Application..</p>
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
      <label for="email" style="font-weight: bold;">Son/wife/daughter of:</label>
      <?php echo $rsedit['swd']; ?>
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
		<img src="llrphoto/<?php echo $rsedit['photo']; ?>" id="imagePreview" style="width:175px;height:150px;" >	
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
	  <a download href="llrmarksheet/<?php echo  $rsedit['identificationmarks']; ?>" style="color:red;">Download</a>
    </div>

	
	<div class="form-group">
      <label for="email" style="font-weight: bold;">ID Proof <span style="color:red;">(As per KYC Address proof)</span>:</label><br>
	  <a download  href="llrdocument/<?php echo $rsedit['document']; ?>" style="color:red;">Download</a>
    </div>
	
	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Valid till</span>:</label><br>
	  <?php
		echo "<lable style='color:green'><b>". date("d-M-Y",strtotime($rsedit['applicationdate']. ' + 30 days')) . " </label><b/>";
	  ?>	
    </div>
	
	
	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Test Result</span>:</label><br>
	  pass  
    </div>
	
	<?php
	}
	else
	{
	?>
	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Valid till</span>:</label><br>
	  <?php
		echo "<lable style='color:green'><b>". date("d-M-Y",strtotime($rsedit['applicationdate']. ' + 30 days')) . " </label><b/>";
	  ?>	  
    </div>


	<div class="form-group">
      <label for="email" style="font-weight: bold;"><span style="color:red;">Test Result</span>:</label><br>
	  pass  
    </div>
	
	<?php
	}
	?>
  </form>
					
					</p>
                  </div>
                </div>
              </div>
            </div>
            
			</div>
	
        </div>
    <center><button type="button" name="button" class="btn btn-info" onclick="printDiv('about')">Click here to Print</button></center>
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

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>