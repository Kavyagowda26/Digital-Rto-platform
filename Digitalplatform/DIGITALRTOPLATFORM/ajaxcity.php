<?php
if(!isset($_SESSION)) { session_start(); }
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT  &  ~E_WARNING);
include("dbconnection.php");
?>
<label for="email">City:</label>
<select name="cityid" class="form-control" >
	<option value=''>Select City</option>
	<?php
		$sqlcity ="SELECT * FROM city WHERE status='Active' AND stateid='$_GET[stateid]'";
		$qsqlcity = mysqli_query($con,$sqlcity);
		while($rscity = mysqli_fetch_array($qsqlcity) )
		{
			if($rscity['cityid'] == $rsedit['cityid'])
			{
			echo "<option value='$rscity[cityid]' selected>$rscity[city]</option>";
			}
			else
			{
			echo "<option value='$rscity[cityid]'>$rscity[city]</option>";
			}
		}
	?>
</select>