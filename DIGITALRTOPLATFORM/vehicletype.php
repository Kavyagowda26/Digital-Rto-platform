<?php
include("header.php");
//Insert statement starts here
if(isset($_POST['submit']))
{
	if(isset($_GET['editid']))
	{
		$sql="UPDATE vehicletype SET vehicletype='$_POST[vehicletype]', description='$_POST[description]',llrcost='$_POST[llrcost]',dlcost='$_POST[dlcost]',vehicleregcost='$_POST[vehicleregcost]',addresschangecost='$_POST[addresschangecost]',dlrenewalcost='$_POST[dlrenewalcost]',
		status='$_POST[status]' WHERE vehicletypeid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Vehicle type updated successfully');</script>";
			echo "<script>window.location='vehicletype.php';</script>";
		}	
	}
	else
	{
		$sql="INSERT INTO vehicletype (vehicletype, description,llrcost,dlcost,vehicleregcost,addresschangecost,dlrenewalcost,status)VALUES 
		('$_POST[vehicletype]','$_POST[description]','$_POST[llrcost],'$_POST[dlcost],'$_POST[vehicleregcost],'$_POST[addresschangecost],'$_POST[dlrenewalcost],'$_POST[status]')";
		$qsql = mysqli_query($con,$sql);
			echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Vehicle type inserted successfully');</script>";
			echo "<script>window.location='vehicletype.php';</script>";
		}
	}
}
//Insert statement ends here
//Delete statement starts here
if(isset($_GET['delid']))
{
	$sql ="DELETE FROM vehicletype WHERE vehicletypeid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('vehicletype record deleted successfully');</script>";
		echo "<script>window.location='vehicletype.php';</script>";
	}
}
//Delete statement ends here
//Edit statement starts here
if(isset($_GET['editid']))
{
	$sqledit ="SELECT * FROM vehicletype WHERE vehicletypeid='$_GET[editid]'";
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
            <li data-blast="bgColor">Vehicle type </li>
            <li data-blast="bgColor">View vehicle type</li>
          </ul>
          <div class="resp-tabs-container">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-5 about-txt-img">
                  <img src="images/register.jpg" class="img-thumbnail" width="100%">
                </div>
                <div class="col-md-7 latest-list">
                  <div class="about-jewel-agile-left">
                    <h5 class="mb-3" data-blast="color">Vehicle type Registration  </h5>
                    <p>
					
<form action="" method="post" onsubmit="return validateform()">
    <div class="form-group">
      <label for="email">Vehicle Type:<span class="classvalidate" id="idvehicletype"></span></label>
	  <input type="text" class="form-control" id="vehicletype" placeholder="Enter VehicleType" name="vehicletype" value="<?php echo $rsedit['vehicletype']; ?>">
    </div>
	<div class="form-group">
      <label for="email">Description :<span class="classvalidate" id="iddescription"></span></label>
	 <textarea name="description" id="description" class="form-control" placeholder="Enter Description"><?php echo $rsedit['description']; ?></textarea>
    </div>
	
    <div class="form-group">
      <label for="email">LLR Cost:<span class="classvalidate" id="idllrcost"></span></label>
	 <input type="text" name="llrcost" id="llrcost" class="form-control" placeholder="Enter LLR Cost" value="<?php echo $rsedit['llrcost']; ?>">
    </div>
	
	 <div class="form-group">
      <label for="email">DL Cost:<span class="classvalidate" id="iddlcost"></span></label>
	 <input type="text" name="dlcost" id="dlcost" class="form-control" placeholder="Enter DL Cost" value="<?php echo $rsedit['dlcost']; ?>">
    </div>
	
	<div class="form-group">
      <label for="email">Vehicle Registration Cost:<span class="classvalidate" id="idvehicleregcost"></span></label>
	 <input type="text" name="vehicleregcost" id="vehicleregcost" class="form-control" placeholder="Enter Vehicle Registration Cost" value="<?php echo $rsedit['vehicleregcost']; ?>">
    </div>
	
	<div class="form-group">
      <label for="email">Address Change Cost:<span class="classvalidate" id="idaddresschangecost"></span></label>
	 <input type="text" name="addresschangecost" id="addresschangecost" class="form-control" placeholder="Enter Address Change Cost" value="<?php echo $rsedit['addresschangecost']; ?>">
    </div>
	
	<div class="form-group">
      <label for="email">DL Renewal cost:<span class="classvalidate" id="iddlrenewalcost"></span></label>
	 <input type="text" name="dlrenewalcost" id="dlrenewalcost" class="form-control" placeholder="Enter DL Renewal cost" value="<?php echo $rsedit['dlrenewalcost']; ?>">
    </div>
	
	<div class="form-group">
      <label for="email">Status:<span class="classvalidate" id="idstatus"></span></label>
      <select id="status" name="status" class="form-control">
		<option value="">Select status</option>
		<?php
			$arr = array("Active","Inactive");
			foreach($arr as $val)
			{
				if($val == $rsedit['status'])
				{
				echo "<option value='$val' selected>$val</option>";
				}
				else
				{
				echo "<option value='$val' >$val</option>";
				}
			}
		?>
	  </select>
    </div>
    <button type="submit" name="submit" class="btn btn-info">Submit</button>
  </form>
					
					</p>
                  </div>
                </div>
              </div>
            </div>
            
			<div class="tab2">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-12 about-txt-img">
                  
				  <table id="myTable"  class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Vehicle Type</th>
							<th>Vehicle description</th>
							<th>LLR Cost</th>
							<th>DL Cost</th>
							<th>Vehicle Registration Cost</th>
							<th>Address Change Cost</th>
							<th>DL Renewal cost</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$sql = "SELECT * FROM vehicletype";
					$qsql= mysqli_query($con,$sql);
					while($rs = mysqli_fetch_array($qsql))
					{
						echo "<tr>
							<td>$rs[vehicletype]</td>
							<td>$rs[description]</td>
							<td>₹$rs[llrcost]</td>
							<td>₹$rs[dlcost]</td>
							<td>₹$rs[vehicleregcost]</td>
							<td>₹$rs[addresschangecost]</td>
							<td>₹$rs[dlrenewalcost]</td>
							<td>$rs[status]</td>
					<td> <a href='vehicletype.php?editid=$rs[0]' class='btn btn-info'>Edit</a>   <hr>  <a href='vehicletype.php?delid=$rs[0]'  class='btn btn-danger' onclick='return confirmdel()'>Delete</a></td>
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
	
	     
<script>
function validateform()
{
	var numericExpression = /^[0-9].+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaspaceExp = /^[a-zA-Z\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	
	var validateform="true";
	$( ".classvalidate" ).empty();
		
	if(document.getElementById("vehicletype").value=="")
	{
		document.getElementById("idvehicletype").innerHTML="Vehicletype Should not be empty...";
		validateform="false";
	}
		
	
	if(document.getElementById("description").value=="")
	{
		document.getElementById("iddescription").innerHTML="Description Should not be empty...";
		validateform="false";
	}
	
	if(!document.getElementById("llrcost").value.match(numericExpression))
	{
		document.getElementById("idllrcost").innerHTML="Entered llrcost is not in number format....";
		validateform="false";
	}
	
	if(document.getElementById("llrcost").value=="")
	{
		document.getElementById("idllrcost").innerHTML="llrcost Should not be empty...";
		validateform="false";
	}
		if(!document.getElementById("dlcost").value.match(numericExpression))
	{
		document.getElementById("iddlcost").innerHTML="Entered DL Cost is not in number format....";
		validateform="false";
	}
	if(document.getElementById("dlcost").value=="")
	{
		document.getElementById("iddlcost").innerHTML="DL Cost Should not be empty...";
		validateform="false";
	}
	if(!document.getElementById("vehicleregcost").value.match(numericExpression))
	{
		document.getElementById("idvehicleregcost").innerHTML="Entered Vehicleregcost is not in number format....";
		validateform="false";
	}
	
	
	if(document.getElementById("vehicleregcost").value=="")
	{
		document.getElementById("idvehicleregcost").innerHTML="Vehicleregcost Should not be empty...";
		validateform="false";
	}
	 
if(!document.getElementById("addresschangecost").value.match(numericExpression))
	{
		document.getElementById("idaddresschangecost").innerHTML="Entered Addresschange cost is not in number format....";
		validateform="false";
	}	 
	  if(document.getElementById("addresschangecost").value=="")
	{
		document.getElementById("idaddresschangecost").innerHTML="Addresschange cost Should not be empty...";
		validateform="false";
	}
	
	if(!document.getElementById("dlrenewalcost").value.match(numericExpression))
	{
		document.getElementById("iddlrenewalcost").innerHTML="Entered Dl Renewalcost  is not in number format....";
		validateform="false";
	}
	if(document.getElementById("dlrenewalcost").value=="")
	{
		document.getElementById("iddlrenewalcost").innerHTML="Dl Renewalcost Should not be empty...";
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