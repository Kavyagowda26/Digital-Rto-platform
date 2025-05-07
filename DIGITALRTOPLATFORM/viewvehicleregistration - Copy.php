<?php
include("header.php");
//Insert statement starts here
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
            <li data-blast="bgColor">Registration Vehicle Registration</li> 
            <li data-blast="bgColor">View Vehicle Registration Details</li>
          </ul>
          <div class="resp-tabs-container">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-5 about-txt-img">
                  <img src="images/register.jpg" class="img-thumbnail" width="100%">
                </div>
                <div class="col-md-7 latest-list">
                  <div class="about-jewel-agile-left">
                    <h5 class="mb-3" data-blast="color">Application For Vehicle Registration</h5>
                    <p>
					
<form action="" method="post">
    <div class="form-group">
      <label for="email">UserId:</label>
	  <input type="text" class="form-control" id="userid" placeholder="Enter UserId" name="userid">
    </div>
	<div class="form-group">
      <label for="email">StateId:</label>
     <input type="text" class="form-control" id="stateid" placeholder="Enter StateId" name="stateid">
    </div>
    <div class="form-group">
      <label for="email">CityId:</label>
      <input type="text" class="form-control" id="cityid" placeholder="Enter CityId" name="cityid">
    </div>
    <div class="form-group">
      <label for="email">OwnerName:</label>
      <input type="text" class="form-control" id="ownername" placeholder="Enter OwnerName" name="ownername">
    </div>
    <div class="form-group">
      <label for="email">swdof:</label>
      <input type="text" class="form-control" id="swdof" placeholder="Enter SWD/of" name="swdof">
    </div>
	<div class="form-group">
      <label for="email">RegType:</label>
      <input type="text" class="form-control" id="regtype" placeholder="Enter RegType" name="regtype">
    </div>
	<div class="form-group">
      <label for="email">DOB:</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter DOB" name="dob">
    </div>
	<div class="form-group">
      <label for="email">PAddr:</label>
      <input type="text" class="form-control" id="paddr" placeholder="Enter Permanent Address" name="paddr">
    </div>
	<div class="form-group">
      <label for="email">TAddr:</label>
      <input type="text" class="form-control" id="taddr" placeholder="Enter Temporery Address" name="taddr">
    </div>
	<div class="form-group">
      <label for="email">PAddrDuration:</label>
      <input type="text" class="form-control" id="paddrduration" placeholder="Enter Permanent Address Duration" name="paddrduration">
    </div>
	<div class="form-group">
      <label for="email">PanCardNo:</label>
      <input type="text" class="form-control" id="pancardno" placeholder="Enter PanCardNo" name="pancardno">
    </div>
	<div class="form-group">
      <label for="email">BirthPlace:</label>
      <input type="text" class="form-control" id="birthplace" placeholder="Enter BirthPlace" name="birthplace">
    </div>
	<div class="form-group">
      <label for="email">VehiclePurchasedFrom :</label>
      <input type="text" class="form-control" id="vehiclepurchasedfrom" placeholder="Enter VehiclePurchasedFrom" name="vehiclepurchasedfrom">
    </div>
	<div class="form-group">
      <label for="email">VehicleTypeId:</label>
      <input type="text" class="form-control" id="vehicletypeid" placeholder="Enter VehicleTypeId" name="vehicletypeid">
    </div>
	<div class="form-group">
      <label for="email">VehicleDetail:</label>
      <input type="text" class="form-control" id="vehicledetail" placeholder="Enter VehicleDetail" name="vehicledetail">
    </div>
	<div class="form-group">
      <label for="email">Chasis No:</label>
      <input type="text" class="form-control" id="chasisno" placeholder="Enter ChasisNo" name="chasisno">
    </div>
	<div class="form-group">
      <label for="email">EngineNo:</label>
      <input type="text" class="form-control" id="engineno" placeholder="Enter EngineNo" name="engineno">
    </div>
	<div class="form-group">
      <label for="email">SeatingCapacity:</label>
      <input type="text" class="form-control" id="seatingcapacity" placeholder="Enter SeatingCapacity" name="seatingcapacity">
    </div>
	<div class="form-group">
      <label for="email">Fuel:</label>
      <input type="text" class="form-control" id="fuel" placeholder="Enter Fuel" name="fuel">
    </div>
	<div class="form-group">
      <label for="email">VehicleImg:</label>
      <input type="text" class="form-control" id="vehicleimg" placeholder="Enter VehicleImg" name="vehicleimg">
    </div>
	<div class="form-group">
      <label for="email">Note:</label>
      <input type="text" class="form-control" id="note" placeholder="Enter Note" name="note">
    </div>
	<div class="form-group">
      <label for="email">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date">
    </div>
	<div class="form-group">
      <label for="email">VehicleNo:</label>
      <input type="text" class="form-control" id="vehicleno" placeholder="Enter VehicleNo" name="vehicleno">
    </div>
	<div class="form-group">
      <label for="email">Status:</label>
      <select id="status" name="status" class="form-control">
		<option value="">Select status</option>
		<?php
			$arr = array("Active","Inactive");
			foreach($arr as $val)
			{
				echo "<option value='$val'>$val</option>";
			}
		?>
	  </select>
    </div>
    <button type="submit" name="submit" class="btn btn-info">Click here to Register</button>
  </form>
					
					</p>
                  </div>
                </div>
              </div>
            </div>
            
			<div class="tab2">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-12 about-txt-img">
     
	 <table border="1" id="myTable"  class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>userid</th>
				<th>stateid</th>
				<th>cityid</th>
				<th>ownername</th>
				<th>swdof</th>
				<th>regtype</th>
				<th>dob</th>
				<th>paddr</th>
				<th>taddr</th>
				<th>paddrduration</th>
				<th>pancardno</th>
				<th>birthplace</th>
				<th>vehiclepurchasedfrom</th>
				<th>vehicletypeid</th>
				<th>vehicledetail</th>
				<th>chasisno</th>
				<th>engineno</th>
				<th>seatingcapacity</th>
				<th>fuel</th>
				<th>vehicleimg</th>
				<th>note</th>
				<th>date</th>
				<th>vehicleno</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
					$sql = "SELECT * FROM vehicleregistration";
					$qsql= mysqli_query($con,$sql);
					while($rs = mysqli_fetch_array($qsql))
					{
						echo "<tr>
							<td>$rs[userid]</td>
							<td>$rs[stateid]</td>
							<td>$rs[cityid]</td>
							<td>$rs[ownername]</td>
							<td>$rs[swdof]</td>
							<td>$rs[regtype]</td>
							<td>$rs[dob]</td>
							<td>$rs[paddr]</td>
							<td>$rs[taddr]</td>
							<td>$rs[paddrduration]</td>
							<td>$rs[pancardno]</td>
							<td>$rs[birthplace]</td>
							<td>$rs[vehiclepurchasedfrom]</td>
							<td>$rs[vehicletypeid]</td>
							<td>$rs[vehicledetail]</td>
							<td>$rs[chasisno]</td>
							<td>$rs[engineno]</td>
							<td>$rs[seatingcapacity]</td>
							<td>$rs[fuel]</td>
							<td>$rs[vehicleimg]</td>
							<td>$rs[note]</td>
							<td>$rs[date]</td>
							<td>$rs[vehicleno]</td>
							<td>$rs[status]</td>
							<td><a href='vehicleregistration.php?editid=$rs[0]' class='btn btn-info'>Edit</a> 
							<a href='vehicleregistration.php?delid=$rs[0]'  class='btn btn-danger' onclick='return confirmdel()'>Delete</a></td>
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

	
	
    <!--footer-->
	<div class="nav-footer py-sm-4 py-3">
      <div class="container-fluid">
        <div class="buttom-nav ">
          <nav class="border-line py-2">
            <ul class="nav justify-content-center">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a href="#about" class="nav-link scroll">About</a>
              </li>
              <li class="nav-item">
                <a href="#service" class="nav-link scroll">Services</a>
              </li>
              <li class="nav-item">
                <a href="#blog" class="nav-link scroll">Blog</a>
              </li>
              <li class="nav-item">
                <a href="#contact" class="nav-link scroll">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
<?php
include("footer.php");
?>
<script>
	$(document).ready( function () 
	{
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