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
            <li data-blast="bgColor">View Driving license renewal Application Form..</li>
          </ul>
          <div class="resp-tabs-container">

			<div class="tab2">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-12 about-txt-img">
                 
	 <table border="1" id="myTable"  class="table table-striped table-bordered">
		<thead>
<tr>
	<td>Application No.</td>
	<th>Name</th>
	<th>Address</th>
	<th>RTO Location</th>
	<th>Driving license type</th>
	<th>DL expired on </th>
	<th>DL No.</th>
	<th>Status</th>
	<th>Action</th>
</tr>
		</thead>
		<tbody>
			<?php
					$sql = "SELECT drivinglicense.*,city.*,state.* FROM drivinglicense LEFT JOIN state ON drivinglicense.stateid=state.stateid LEFT JOIN city ON drivinglicense.cityid=city.cityid WHERE drivinglicense.dltype='Renewal' and drivinglicense.status='Paid' order by drivinglicense.drivinglicenseid DESC";
					$qsql= mysqli_query($con,$sql);
					while($rs = mysqli_fetch_array($qsql))
					{

$sqlexpired = "SELECT drivinglicense.*,city.*,state.* FROM drivinglicense LEFT JOIN state ON drivinglicense.stateid=state.stateid LEFT JOIN city ON drivinglicense.cityid=city.cityid WHERE drivinglicense.dltype='New' and drivinglicense.dlno='$rs[dlno]' order by drivinglicense.drivinglicenseid DESC";
$qsqlexpired = mysqli_query($con,$sqlexpired);
$rsexpired = mysqli_fetch_array($qsqlexpired);

	$sqlbranch= "SELECT * FROM branch WHERE stateid='$rs[stateid]' AND cityid='$rs[cityid]'";
	$qsqlbranch = mysqli_query($con,$sqlbranch);
	$rsbranch = mysqli_fetch_array($qsqlbranch);
echo "<tr>
	<td>$rs[0]</td>
	<td>$rs[name]<br>
	<img src='dlphoto/$rs[photo]' style='width:50px;height:50px;'></td>
	<td>$rs[paddr]</td>
	<td>";	
	echo $rsbranch['branchname'] . ",<br>" . $rsbranch['branchaddress']. ",<br>" . $rs['city'] . ",<br>" . $rs['state'] . ",<br><b>PIN-</b>" . $rsbranch['pin'];	
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
	<td>" . date("d-M-Y",strtotime($rsexpired['enddate'])) . "</td>
	<td>$rs[dlno]</td>
	<td>$rs[26]</td>
	<td>
	<a href='drivinglicenserenewal.php?delid=$rs[0]'  class='btn btn-danger' 
		onclick='return confirmdel()'>Delete</a><hr>
	<a href='drivinglicenserenewalview.php?insid=$rs[0]'  class='btn btn-warning' >View</a>
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