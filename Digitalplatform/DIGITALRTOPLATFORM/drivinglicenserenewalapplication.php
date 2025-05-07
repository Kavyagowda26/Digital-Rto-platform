<?php
include("header.php");
//Edit statement starts here
if(isset($_GET['renewaldlid']))
{
	$sqledit ="SELECT * FROM drivinglicense WHERE dlno='$_GET[renewaldlid]' AND dltype='New'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
	$vehicletypeid = unserialize($rsedit['vehicletypeid']);
	//print_r($vehicletypeid);
	
}
//Edit statement ends here
//Insert statement starts here
if(isset($_POST['submit']))
{
	$vehicletypes = serialize($_POST['vehicletypes']);
	
	$filename = rand().$_FILES["photo"]["name"];
	move_uploaded_file($_FILES["photo"]["tmp_name"],"dlphoto/".$filename);
	
	$mfilename = rand().$_FILES["identificationmarks"]["name"];
	move_uploaded_file($_FILES["identificationmarks"]["tmp_name"],"dlmarksheet/".$mfilename);
	
	$document = rand().$_FILES["document"]["name"];
	move_uploaded_file($_FILES["document"]["tmp_name"],"dldocument/".$document);
	
	if(isset($_GET['editid']))
	{
		$sql="UPDATE llr SET llrtype='$_POST[llrtype]',stateid='$_POST[stateid]',cityid='$_POST[cityid]',vehicletypeid='$_POST[vehicletypeid]',name='$_POST[name]',swd='$_POST[swdof]',Photo=
		'$filename',paddr='$_POST[paddr]',taddr='$_POST[taddr]',paddrduration='$_POST[paddrduration]',dob='$_POST[dob]',birthplace='$_POST[birthplace]',
		qualification='$_POST[qualification]',identificationmarks='$mfilename',document='$document',bloodgroup='$_POST[bloodgroup]',startdate=
		'$_POST[startdate]',enddate='$_POST[enddate]',note='$_POST[note]',status='$_POST[status]'
		WHERE llrid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Driving License updated successfully');</script>";
			$insid = mysqli_insert_id($con);
			echo "<script>window.location='payment.php?insid=$insid';</script>";
		}	
	}
	else
	{
		$sql="INSERT INTO drivinglicense ( enrollerid, llrid, dltype, stateid, cityid, vehicletypeid, photo, name, swdof, paddr, taddr, paddrduration, dob, birthplace, qualification, identificationmarks, bloodgroup, previousdl, applicationdate, document, status,dlno) VALUES 
		('$_SESSION[enrollerid]','$_GET[llrid]','Renewal','$_POST[stateid]','$_POST[cityid]','$rsedit[vehicletypeid]','$filename','$_POST[name]','$_POST[swdof]','$_POST[paddr]','$_POST[taddr]','$_POST[paddrduration]','$_POST[dob]','$_POST[birthplace]','$_POST[qualification]','$mfilename','$_POST[bloodgroup]','',
		'$dt','$document','Pending','$_GET[renewaldlid]')";
		$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Driving License Renewal Form entry done successfully.. The page will redirect to Payment gateway..');</script>";
			$insid = mysqli_insert_id($con);
			echo "<script>window.location='payment.php?insid=$insid&paidfor=Renewal';</script>";
		}
	}
	
}
//Insert statement ends here
//Delete statement starts here
if(isset($_GET['delid']))
{
	$sql ="DELETE FROM llr WHERE llrid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('LLR record deleted successfully');</script>";
		echo "<script>window.location='llr.php';</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
//Delete statement ends here

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
            <li data-blast="bgColor">Driving License Renewal Form</li> 
			<p class="mb-3" style="color:red;">Kindly fill all mandatory details to process Driving License Renewal Application..</p>
          </ul>
<form action="" method="post" enctype="multipart/form-data" onsubmit="return validateform()">
          <div class="resp-tabs-container">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-6 about-txt-img">
					
	<div class="form-group">
      <label for="email">Driving License Number :</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $_GET['renewaldlid']; ?>" readonly> 
    </div>
	
    <div class="form-group">
      <label for="email">Driving License for<span class="classvalidate" id="idvehicletypes"></span><span style="color:red;">(Press ctrl to select multiple values)</span>:</label>
	  	<select class="form-control" id="vehicletypes[]" placeholder="Enter vehicle type" name="vehicletypes[]" multiple="multiple" disabled>
			<?php
				$sqlstateid ="SELECT * FROM vehicletype WHERE status='Active'";
				$qsqlstateid = mysqli_query($con,$sqlstateid);
				while($rsstateid = mysqli_fetch_array($qsqlstateid) )
				{
					if(in_array($rsstateid['vehicletypeid'], $vehicletypeid))
					{
					echo "<option value='$rsstateid[vehicletypeid]' selected>$rsstateid[vehicletype]</option>";
					}
					else
					{
					echo "<option value='$rsstateid[vehicletypeid]' >$rsstateid[vehicletype]</option>";
					}
				}
			?>
		</select>
    </div>
			
	<div class="form-group">
      <label for="email">Full Name :<span class="classvalidate" id="idname"></span></label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $rsenrollerprofile['name']; ?>" readonly> 
    </div>
	<div class="form-group">
      <label for="email">Son/wife/daughter of:<span class="classvalidate" id="idswdof"></span></label>
      <input type="text" class="form-control" id="swdof" placeholder="Enter SWD/of" name="swdof" >
    </div>
	<div class="form-group">
      <label for="email">Permanent address<span class="classvalidate" id="idpaddr"></span> <span style="color:red;">(As per KYC Address proof)</span>:</label>
	  <textarea class="form-control" id="paddr" placeholder="Enter Permanent Address" name="paddr" ></textarea>
    </div>
	<div class="form-group">
      <label for="email">Temporary address/ Official address:<span class="classvalidate" id="idtaddr"></span></label>
	  <textarea class="form-control" id="taddr" placeholder="Enter Temporary Address" name="taddr"></textarea>
    </div>
	<div class="form-group">
      <label for="email">Duration of stay at the present address<span class="classvalidate" id="idpaddrduration"></span><span style="color:red;">(In years)</span>:</label>
      <input type="number" class="form-control" id="paddrduration" placeholder="Enter Permanent Address Duration" name="paddrduration">
	  </select>
    </div>
	<div class="form-group">
      <label for="email">State:<span class="classvalidate" id="idstateid"></span></label>
    <select name="stateid" id="stateid" class="form-control"  onchange="loadcity(this.value)">
		<option value=''>Select state</option>
		<?php
			$sqlstateid ="SELECT * FROM state WHERE status='Active'";
			$qsqlstateid = mysqli_query($con,$sqlstateid);
			while($rsstateid = mysqli_fetch_array($qsqlstateid) )
			{
				echo "<option value='$rsstateid[stateid]'>$rsstateid[state]</option>";
			}
		?>
	</select>
    </div>
	
	
	<div class="form-group" id="ajaxcity">
      <label for="email">City:<span class="classvalidate" id="idcityid"></span></label>
		<select name="cityid" id="cityid" class="form-control"  >
			<option value=''>Select City</option>
			<?php
				$sqlstateid ="SELECT * FROM city WHERE status='Active'";
				$qsqlstateid = mysqli_query($con,$sqlstateid);
				while($rsstateid = mysqli_fetch_array($qsqlstateid) )
				{
					if($rsstateid['cityid'] == $rsedit['cityid'])
					{
					echo "<option value='$rsstateid[cityid]'>$rsstateid[city]</option>";
					}
				}
			?>
		</select>
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
      <label for="email">Upload Photo:<span class="classvalidate" id="idfileFind"></span></label>
	  <input type="file" class="form-control" name="photo" onchange="readURL(this)" id = "fileFind">
		<img src="images/profileimage.png" id="imagePreview" style="width:225px;height:250px;" >
		<script>
		function readURL(input) 
		{
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#imagePreview').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		</script>		
    </div>

		
	<div class="form-group">
      <label for="email">Date of birth <span class="classvalidate" id="iddob"></span><span style="color:red;">(As per Birth  certificate  /  School  certificate )</span>:</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter Date Of Birth" name="dob"  max="<?php echo date('Y-m-d', strtotime("-18 years")); ?>" >
    </div>
	<div class="form-group">
      <label for="email">Place of Birth:<span class="classvalidate" id="idbirthplace"></span></label>
      <input type="text" class="form-control" id="birthplace" placeholder="Enter BirthPlace" name="birthplace">
    </div>

	<div class="form-group">
      <label for="email">Qualification:<span class="classvalidate" id="idqualification"></span></label>
      <input type="text" class="form-control" id="qualification" placeholder="Enter Qualification" name="qualification">
    </div>
	<div class="form-group">
      <label for="email">Blood Group:<span class="classvalidate" id="idbloodgroup"></span></label>
		<select class="form-control" id="bloodgroup" placeholder="Enter Discription" name="bloodgroup" >
			<option value=''>Select Blood Group</option>
			<?php
				$arr = array("O-positive","O-negative","A-positive","A-negative","B-positive","B-negative","AB-positive","AB-negative","Others");
				foreach($arr as $val)
				{
					echo "<option value='$val'>$val</option>";
				}
			?>
		</select>
    </div>
	
	<div class="form-group">
      <label for="email">Upload SSLC Marks sheet:<span class="classvalidate" id="ididentificationmarks"></span></label>
      <input type="file" class="form-control" id="identificationmarks" placeholder="Enter Identification Marks" name="identificationmarks">
    </div>

	
	<div class="form-group">
      <label for="email">ID Proof <span class="classvalidate" id="iddocument"></span><span style="color:red;">(As per KYC Address proof)</span>:</label>
      <input type="file" class="form-control" id="document" name="document" >
    </div>

	
	
    <button type="submit" name="submit" class="btn btn-info">Click here to Submit</button>
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
                document.getElementById("ajaxcity").innerHTML = this.responseText;
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
	
	
	
		
	if(!document.getElementById("swdof").value.match(alphaspaceExp))
	{
		document.getElementById("idswdof").innerHTML="Must enter valid Son/wife/daughter Details....";
		validateform="false";
	}
		
	if(document.getElementById("swdof").value=="")
	{
		document.getElementById("idswdof").innerHTML="Son/wife/daughter  Should not be empty...";
		validateform="false";
	}
	
	if(document.getElementById("paddr").value=="")
	{
		document.getElementById("idpaddr").innerHTML="Permanent address Should not be empty...";
		validateform="false";
	}
	
	if(document.getElementById("taddr").value =="")
	{	
		document.getElementById("idtaddr").innerHTML="Temporary addressShould not be empty...";
		validateform="false";
	}
	
	if(document.getElementById("paddrduration").value=="")
	{
		document.getElementById("idpaddrduration").innerHTML="Duration of stay at the present address Should not be empty...";
		validateform="false";
	}
	
  
	if(document.getElementById("cityid").value=="")
	{
		document.getElementById("idcityid").innerHTML="City Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("stateid").value=="")
	{
		document.getElementById("idstateid").innerHTML="State Should not be empty...";
		validateform="false";
	}
	
	if(document.getElementById("fileFind").value=="")
	{
		document.getElementById("idfileFind").innerHTML="Must Attach the photo...";
		validateform="false";
	}
	   
	if(document.getElementById("dob").value=="")
	{
		document.getElementById("iddob").innerHTML="Date of birth Should not be empty...";
		validateform="false";
	}
	if(!document.getElementById("birthplace").value.match(alphaspaceExp))
	{
		document.getElementById("idbirthplace").innerHTML="birthplace Should contain only Alphabets...";
		validateform="false";
	}
	if(document.getElementById("birthplace").value=="")
	{
		document.getElementById("idbirthplace").innerHTML="birthplace Should not be empty...";
		validateform="false";
	}
	 
	if(!document.getElementById("qualification").value.match(alphaspaceExp))
	{
		document.getElementById("idqualification").innerHTML="birthplace Should contain only Alphabets...";
		validateform="false";
	}
	if(document.getElementById("qualification").value=="")
	{
		document.getElementById("idqualification").innerHTML="Qualification Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("bloodgroup").value=="")
	{
		document.getElementById("idbloodgroup").innerHTML="Bloodgroup Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("identificationmarks").value=="")
	{
		document.getElementById("ididentificationmarks").innerHTML="identificationmarks Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("document").value=="")
	{
		document.getElementById("iddocument").innerHTML="document Should not be empty...";
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