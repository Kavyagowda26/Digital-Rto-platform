<?php
include("header.php");
//Insert statement starts here
if(isset($_POST['submit']))
{
	if(isset($_GET['editid']))
	{
		$sql="UPDATE drivinglicense SET dltype='$_POST[dltype]', stateid='$_POST[stateid]',
		cityid='$_POST[cityid]',vehicletypeid='$_POST[vehicletypeid]',Photo='$_POST[Photo]',
		name='$_POST[name]',swdof='$_POST[swdof]',paddr='$_POST[paddr]',
		taddr='$_POST[taddr]',paddrduration='$_POST[paddrduration]',dob='$_POST[dob]',
		qualification='$_POST[qualification]',identificationmarks='$_POST[identificationmarks]',bloodgroup='$_POST[bloodgroup]',
		previousdl='$_POST[previousdl]',startdate='$_POST[startdate]',enddate='$_POST[enddate]',
		entrydate='$_POST[entrydate]',dlno='$_POST[dlno]',Note='$_POST[Note]'
		,status='$_POST[status]' 
		WHERE drivinglicenseid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Driving License updated successfully');</script>";
			echo "<script>window.location='drivinglicense.php';</script>";
		}
		else
		{
			echo mysqli_error($con);
		}		
	}
	else
	{
		$sql="INSERT INTO drivinglicense (dltype, stateid, cityid,vehicletypeid,Photo,name,swdof,paddr,taddr,
		paddrduration,dob,qualification,identificationmarks,bloodgroup,previousdl,
		startdate,enddate,entrydate,dlno,
		Note,status)VALUES 
		('$_POST[dltype]','$_POST[stateid]','$_POST[cityid]','$_POST[vehicletypeid]','$_POST[Photo]','$_POST[name]',
		'$_POST[swdof]','$_POST[paddr]','$_POST[taddr]','$_POST[paddrduration]','$_POST[dob]','$_POST[qualification]',
		'$_POST[identificationmarks]','$_POST[bloodgroup]','$_POST[previousdl]','$_POST[startdate]','$_POST[enddate]',
		'$_POST[entrydate]','$_POST[dlno]','$_POST[Note]','$_POST[status]')";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Registration done successfully');</script>";
			echo "<script>window.location='drivinglicense.php';</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
}
//Insert statement ends here
//Delete statement starts here
if(isset($_GET['delid']))
{
	$sql ="DELETE FROM drivinglicense WHERE drivinglicenseid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('DrivingLicense record deleted successfully');</script>";
		echo "<script>window.location='drivinglicense.php';</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
//Delete statement ends here
//Edit statement starts here
if(isset($_GET['editid']))
{
	$sqledit ="SELECT * FROM drivinglicense WHERE drivinglicenseid='$_GET[editid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
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
            <li data-blast="bgColor">View Driving License Details</li>
          </ul>
          <div class="resp-tabs-container">
			<div class="tab2">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-12 about-txt-img">
                 
	 <table border="1" id="myTable"  class="table table-striped table-bordered">
		<thead>
<tr>
	<th>Application No.</th>
	<th>Name</th>
	<th>Address</th>
	<th>RTO Location</th>
	<th>Driving license type</th>
	<th>DL Date</th>
	<th>DL No.</th>
	<th>Status</th>
	<th>Action</th>
</tr>
		</thead>
		<tbody>
			<?php
					$sql = "SELECT drivinglicense.*,city.*,state.* FROM drivinglicense LEFT JOIN state ON drivinglicense.stateid=state.stateid LEFT JOIN city ON drivinglicense.cityid=city.cityid order by drivinglicense.drivinglicenseid DESC";
					$qsql= mysqli_query($con,$sql);
					while($rs = mysqli_fetch_array($qsql))
					{
	$sqlbranch= "SELECT * FROM branch WHERE stateid='$rs[stateid]' AND cityid='$rs[cityid]'";
	$qsqlbranch = mysqli_query($con,$sqlbranch);
	$rsbranch = mysqli_fetch_array($qsqlbranch);
echo "<tr>
	<td>$rs[0]</td>
	<td>$rs[name]<br>
	<img src='dlphoto/$rs[photo]' style='width:50px;height:50px;'></td>
	<td>$rs[paddr]</td>
	<td>";	
	echo $rsbranch['branchname'] . ",<br>" . $rsbranch['branchaddress']. ",<br>" . $rs['city'] . ",<br>" . $rs['state'] . ",<br>PIN" . $rsbranch['pin'];	
	echo "</td>	
	<td>";
	$arrvehicletypes = unserialize($rs['vehicletypeid']);
	foreach($arrvehicletypes as $vtype)
	{
		$sqlvehicletype = "SELECT * FROM vehicletype WHERE vehicletypeid='$vtype'";
		$qsqlvehicletype = mysqli_query($con,$sqlvehicletype);
		$rsvehicletype = mysqli_fetch_array($qsqlvehicletype);
		echo $rsvehicletype['vehicletype'].",<br>";
	}
	echo "</td>
	<td>$rs[startdate] - $rs[enddate]</td>
	<td>$rs[dlno]</td>
	<td>$rs[26]</td>
	<td>
	<a href='drivinglicense.php?delid=$rs[0]'  class='btn btn-danger' 
		onclick='return confirmdel()'>Delete</a><hr>
	<a href='dlview.php?insid=$rs[0]'  class='btn btn-warning' >View</a>
				</td>
</tr>";
					}
					?>
					</tbody>
				  </table>
				  
				 
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
    <!--//about-->

	
	
    <!--footer-->

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
	      
	
	if(document.getElementById("dltype").value=="")
	{
		document.getElementById("iddltype").innerHTML="DLtype Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("stateid").value=="")
	{
		document.getElementById("idstateid").innerHTML="State Should not be empty...";
		validateform="false";
	}if(document.getElementById("cityid").value=="")
	{
		document.getElementById("idcityid").innerHTML="City Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("vehicletypeid").value=="")
	{
		document.getElementById("idvehicletypeid").innerHTML="Vehicletype Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("photo").value=="")
	{
		document.getElementById("idphoto").innerHTML="Photo Should not be empty...";
		validateform="false";
	}
	if(!document.getElementById("name").value.match(alphaspaceExp))
	{
		document.getElementById("idname").innerHTML="Name should contain alphabets and characters...";
		validateform="false";
	}
		
	if(document.getElementById("name").value=="")
	{
		document.getElementById("idname").innerHTML="Name Should not be empty...";
		validateform="false";
	}
	
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
	
	if(document.getElementById("dob").value=="")
	{
		document.getElementById("iddob").innerHTML="Date of birth Should not be empty...";
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
	
	if(document.getElementById("identificationmarks").value=="")
	{
		document.getElementById("ididentificationmarks").innerHTML="identificationmarks Should not be empty...";
		validateform="false";
	} 
	if(document.getElementById("bloodgroup").value=="")
	{
		document.getElementById("idbloodgroup").innerHTML="Bloodgroup Should not be empty...";
		validateform="false";
	} 
	if(document.getElementById("previousdl").value=="")
	{
		document.getElementById("idpreviousdl").innerHTML="Previousdl Should not be empty...";
		validateform="false";
	}
	
	if(document.getElementById("startdate").value=="")
	{
		document.getElementById("idstartdate").innerHTML="Startdate Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("enddate").value=="")
	{
		document.getElementById("idenddate").innerHTML="Enddate Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("entrydate").value=="")
	{
		document.getElementById("identrydate").innerHTML="Entrydate Should not be empty...";
		validateform="false";
	}
			
	if(document.getElementById("dlno").value=="")
	{
		document.getElementById("iddlno").innerHTML="Dlno Should not be empty...";
		validateform="false";
	}
	
	if(document.getElementById("note").value=="")
	{
		document.getElementById("idnote").innerHTML="Note Should contain more than 6 characters...";
		validateform="false";
	}
	
	if(document.getElementById("status").value=="")
	{
		document.getElementById("idstatus").innerHTML="Status Should not be empty...";
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