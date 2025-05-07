<?php
include("header.php");
//Insert statement starts here
if(isset($_POST['submit']))
{
	//paddra taddra paddrdurationa stateida cityid
	$sql="INSERT INTO drivinglicense ( enrollerid, llrid, dltype, stateid, cityid, vehicletypeid, photo, name, swdof, paddr, taddr, paddrduration, dob, birthplace, qualification, identificationmarks, bloodgroup, previousdl, applicationdate,testdate, startdate, enddate,	dlno, document,note, status) SELECT enrollerid, llrid, 'Address Change', '$_POST[stateida]', '$_POST[cityid]', vehicletypeid, photo, name, swdof, '$_POST[paddra]', '$_POST[taddra]', '$_POST[paddrdurationa]', dob, birthplace, qualification, identificationmarks, bloodgroup,'$_POST[drivinglicenseid]',  applicationdate, testdate, startdate, enddate, '$_POST[dlno]' , document, note, 'Pending' FROM drivinglicense WHERE drivinglicenseid='$_POST[drivinglicenseid]'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('DL entry done successfully.. The page will redirect to Payment gateway..');</script>";
		$insid = mysqli_insert_id($con);
		echo "<script>window.location='payment.php?insid=$insid&paidfor=Address Change';</script>";
	}	
}
//Insert statement ends here
//Select statement starts here
	$sqledit ="SELECT *  FROM drivinglicense WHERE dlno='$_GET[dlno]' AND status='Driving License issued'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
//Select statement ends here
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
            <li data-blast="bgColor">Address Change Request Form</li> 
			<p class="mb-3" style="color:red;">Kindly fill all mandatory details to process Address Change.</p>
          </ul>
<form action="" method="post" enctype="multipart/form-data" onsubmit="return validateform()">

	<input type="hidden" name="drivinglicenseid" value="<?php echo $rsedit['drivinglicenseid']; ?>" >

          <div class="resp-tabs-container">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-6 about-txt-img">
				
    <div class="form-group">
      <label for="email">Driving License No.</label>
	  <input type="text" class="form-control" id="dlno" name="dlno" value="<?php echo $rsedit['dlno']; ?>" readonly> 
    </div>
				
	<div class="form-group">
      <label for="email">Full Name :</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $rsenrollerprofile['name']; ?>" readonly> 
    </div>
	
	<div class="form-group">
      <label for="email">Permanent address <span style="color:red;">(As per KYC Address proof)</span>:</label>
	  <textarea class="form-control" id="paddr" placeholder="Enter Permanent Address" name="paddr" readonly ><?php echo $rsedit['paddr']; ?></textarea>
    </div>
	
	<div class="form-group">
      <label for="email">Temporary address/ Official address:</label>
	  <textarea class="form-control" id="taddr" placeholder="Enter Temporary Address" name="taddr" readonly ><?php echo $rsedit['taddr']; ?></textarea>
    </div>
	<div class="form-group">
      <label for="email">Duration of stay at the present address<span style="color:red;">(In years)</span>:</label>
      <input type="number" class="form-control" id="paddrduration" placeholder="Enter Permanent Address Duration" name="paddrduration" value="<?php echo $rsedit['paddrduration']; ?>" readonly> 
	  </select>
	</div>
	<div class="form-group">
      <label for="email">State:</label>
    <select name="stateid" class="form-control" readonly disabled onchange="loadcity(this.value)">
		<option value=''>Select state</option>
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
	</select>
    </div>
	
	<div class="form-group">
      <label for="email">City:</label>
		<select name="cityida" class="form-control" readonly disabled >
			<option value=''>Select City</option>
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
		</select>
    </div>

	
                </div>
                <div class="col-md-6 latest-list">
				
				
    <div class="form-group">
      <label for="email">Driving License No.</label>
	  <input type="text" class="form-control" id="dlnoa" name="dlnoa" value="<?php echo $rsedit['dlno']; ?>" readonly> 
    </div>
				
	<div class="form-group">
      <label for="email">Full Name :</label>
      <input type="text" class="form-control" id="namea" placeholder="Enter Name" name="namea" value="<?php echo $rsenrollerprofile['name']; ?>" readonly> 
    </div>
	
	<div class="form-group">
      <label for="email">Permanent address <span class="classvalidate" id="idpaddra"></span> <span style="color:red;">(As per KYC Address proof)</span>:</label>
	  <textarea class="form-control" id="paddra" placeholder="Enter Permanent Address" name="paddra"  ><?php echo $rsedit['paddr']; ?></textarea>
    </div>
	
	<div class="form-group">
      <label for="email">Temporary address/ Official address: <span class="classvalidate" id="idtaddra"></span></label>
	  <textarea class="form-control" id="taddra" placeholder="Enter Temporary Address" name="taddra"  ><?php echo $rsedit['taddr']; ?></textarea>
    </div>
	<div class="form-group">
      <label for="email">Duration of stay at the present address <span class="classvalidate" id="idpaddrdurationa"></span><span style="color:red;">(In years)</span>:</label>
      <input type="number" class="form-control" id="paddrdurationa" placeholder="Enter Permanent Address Duration" name="paddrdurationa" value="<?php echo $rsedit['paddrduration']; ?>" > 
	  </select>
	</div>
	<div class="form-group">
      <label for="email">State: <span class="classvalidate" id="idstateida"></span></label>
    <select name="stateida" id="stateida" class="form-control"  onchange="loadcity(this.value)">
		<option value=''>Select state</option>
		<?php
			$sqlstateid ="SELECT * FROM state WHERE status='Active'";
			$qsqlstateid = mysqli_query($con,$sqlstateid);
			while($rsstateid = mysqli_fetch_array($qsqlstateid) )
			{
					if($rsstateid['stateid'] == $rsedit['stateid'])
					{
				echo "<option value='$rsstateid[stateid]' selected>$rsstateid[state]</option>";
					}
					else
					{
				echo "<option value='$rsstateid[stateid]'>$rsstateid[state]</option>";
						
					}
			}
		?>
	</select>
    </div>
	
	<div class="form-group" id="ajaxcitya">
      <label for="email">City: <span class="classvalidate" id="idcityid"></span></label>
		<select name="cityid" id="cityid" class="form-control"  >
			<option value=''>Select City</option>
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
		</select>
    </div>

	
				
				
				
                  <div class="about-jewel-agile-left">
                    <p>

	
	
    <button type="submit" name="submit" class="btn btn-info">Click here to Update</button>
  </form>
					
					</p>
                  </div>
                </div>
              </div>
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
                document.getElementById("ajaxcitya").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","ajaxcity.php?stateid="+stateid,true);
        xmlhttp.send();
    }
}
</script>

<script>
function validateform()
{
	var numericExpression = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaspaceExp = /^[a-zA-Z\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	
	var validateform="true";
	$( ".classvalidate" ).empty();
	
	if(document.getElementById("paddra").value=="")
	{
		document.getElementById("idpaddra").innerHTML="Permanent address Should not be empty...";
		validateform="false";
	}
	
	if(document.getElementById("taddra").value =="")
	{	
		document.getElementById("idtaddra").innerHTML="Temporary addressShould not be empty...";
		validateform="false";
	}
	
	if(document.getElementById("paddrdurationa").value=="")
	{
		document.getElementById("idpaddrdurationa").innerHTML="Duration of stay at the present address Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("stateida").value=="")
	{
		document.getElementById("idstateida").innerHTML="State Should not be empty...";
		validateform="false";
	}
	
	if(document.getElementById("cityid").value=="")
	{
		document.getElementById("idcityid").innerHTML="City Should not be empty...";
		validateform="false";
	}
	
	if(validateform=="true")
	{
		return true;
	}
	else
	{
		return false;
	}
}
</script> 