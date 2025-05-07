<?php
include("dbconnection.php");
if($_GET[dlid] != "")
{
	//Edit statement starts here
	$sqledit ="SELECT * FROM drivinglicense WHERE drivinglicenseid='$_GET[dlid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
	//Edit statement ends here
	if(mysqli_num_rows($qsqledit) >= 1)
	{
	?>
	<br><hr>
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
<?php
	}
	else
	{
		echo "Application Number not found..";
	}
}
//validatevehiclereg vehicleregid divvehicleregstatus 
if($_GET[vehicleregid] != "")
{
	//Edit statement starts here
//payment statement starts here
$sqlpayment ="SELECT * FROM payment WHERE paidid='$_GET[vehicleregid]'";
$qsqlpayment = mysqli_query($con,$sqlpayment);
$rspayment = mysqli_fetch_array($qsqlpayment);
$sqledit ="SELECT * FROM vehicleregistration WHERE vehicleregid='$_GET[vehicleregid]'";
$qsqledit = mysqli_query($con,$sqledit);
$rsedit = mysqli_fetch_array($qsqledit);
//echo $stat = $rsedit['status'];
//payment statement ends here
	//Edit statement ends here
	if(mysqli_num_rows($qsqledit) >= 1)
	{
	?>
	<br><hr>
	<!--Don't add spaces or newlines between the li elements!-->
<style>
ol.progtrckr {
    margin: 0;
    padding: 0;
    list-style-type none;
}

ol.progtrckr li {
    display: inline-block;
    text-align: center;
    line-height: 3.5em;
}

ol.progtrckr[data-progtrckr-steps="2"] li { width: 49%; }
ol.progtrckr[data-progtrckr-steps="3"] li { width: 33%; }
ol.progtrckr[data-progtrckr-steps="4"] li { width: 24%; }
ol.progtrckr[data-progtrckr-steps="5"] li { width: 19%; }
ol.progtrckr[data-progtrckr-steps="6"] li { width: 16%; }
ol.progtrckr[data-progtrckr-steps="7"] li { width: 14%; }
ol.progtrckr[data-progtrckr-steps="8"] li { width: 12%; }
ol.progtrckr[data-progtrckr-steps="9"] li { width: 11%; }

ol.progtrckr li.progtrckr-done {
    color: black;
    border-bottom: 4px solid yellowgreen;
}
ol.progtrckr li.progtrckr-todo {
    color: silver; 
    border-bottom: 4px solid silver;
}

ol.progtrckr li:after {
    content: "\00a0\00a0";
}
ol.progtrckr li:before {
    position: relative;
    bottom: -2.5em;
    float: left;
    left: 50%;
    line-height: 1em;
}
ol.progtrckr li.progtrckr-done:before {
    content: "\2713";
    color: white;
    background-color: yellowgreen;
    height: 2.2em;
    width: 2.2em;
    line-height: 2.2em;
    border: none;
    border-radius: 2.2em;
}
ol.progtrckr li.progtrckr-todo:before {
    content: "\039F";
    color: silver;
    background-color: white;
    font-size: 2.2em;
    bottom: -1.2em;
}


</style>
<ol class="progtrckr" data-progtrckr-steps="4">
    <li class="progtrckr-done">Application Submission</li>
	<li class="progtrckr-done">Payment</li>
	<?php
	if($rsedit['status'] == "Verified" || $rsedit['status'] == "Active")
	{
	?>
	<li class="progtrckr-done">Verified</li>
	<?php
	}
	else
	{
	?>
	<li class="progtrckr-todo">Verification</li>		
	<?php
	}
	?>
	<?php
	if($rsedit['status'] == "Active")
	{
	?>
	<li class="progtrckr-done">RC Issued</li>
	<?php
	}
	else
	{
	?>
	<li class="progtrckr-todo">RC Issue</li>
	<?php
	}
	?>
</ol>
<?php
	}
	else
	{
		echo "Application Number not found..";
	}
}
//validateaddresschange divaddresschange addrchgid 
if($_GET[addrchgid] != "")
{
	//Edit statement starts here
//Select statement starts here
	$sqlnewaddress ="SELECT *  FROM drivinglicense WHERE drivinglicenseid='$_GET[addrchgid]'";
	$qsqlnewaddress = mysqli_query($con,$sqlnewaddress);
	$rsnewaddress = mysqli_fetch_array($qsqlnewaddress);
	
	$sqledit ="SELECT *  FROM drivinglicense WHERE drivinglicenseid='$rsnewaddress[previousdl]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
//Select statement ends here

//Edit statement starts here
$sqledit ="SELECT * FROM drivinglicense WHERE drivinglicenseid='$_GET[addrchgid]'";
$qsqledit = mysqli_query($con,$sqledit);
$rsedit = mysqli_fetch_array($qsqledit);

	//Edit statement ends here
	if(mysqli_num_rows($qsqledit) >= 1)
	{
	?>
	<br><hr>
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
	echo "done";
	}
	else
	{
	echo " todo";
	}
	?>
	" >New Address Verification</li>
	
	<li 	<?php
	if($rsedit['status'] == "Rejected" )
	{	
		echo " style='color:red;border-bottom-color: red;' ";
	}
	?> class="progress-point 
	<?php
	if($rsedit['status'] == "Driving License issued" )
	{		
	echo "done";
	}
	else
	{
	echo " todo";
	}
	?>
	">New Driving license issued</li>
  </ol>
  <?php
	if($rsedit['status'] == "Rejected" )
	{	
		echo "<center><label style='color:red;'>Your application has been rejected</label></center>";
	}
	?>

	</div>
<?php
	}
	else
	{
		echo "Application Number not found..";
	}
}
//validatelicenserenewal divlicenserenewal licrenewid
if($_GET[licrenewid] != "")
{
	//Edit statement starts here
$sqledit ="SELECT * FROM drivinglicense WHERE drivinglicenseid='$_GET[licrenewid]'";
$qsqledit = mysqli_query($con,$sqledit);
$rsedit = mysqli_fetch_array($qsqledit);
$sqlexpired = "SELECT drivinglicense.*,city.*,state.* FROM drivinglicense LEFT JOIN state ON drivinglicense.stateid=state.stateid LEFT JOIN city ON drivinglicense.cityid=city.cityid WHERE drivinglicense.dltype='New' and drivinglicense.dlno='$rsedit[dlno]' order by drivinglicense.drivinglicenseid DESC";
$qsqlexpired = mysqli_query($con,$sqlexpired);
$rsexpired = mysqli_fetch_array($qsqlexpired);
	//Edit statement ends here
	if(mysqli_num_rows($qsqledit) >= 1)
	{
	?>
	<br><hr>
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
<?php
	}
	else
	{
		echo "Application Number not found..";
	}
}
?>
		