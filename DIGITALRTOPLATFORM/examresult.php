<?php
include("header.php");

//Edit statement starts here
if(isset($_SESSION['enrollerid']))
{
	$sqledit ="SELECT * FROM enroller WHERE enrollerid='$_SESSION[enrollerid]'";
	$qsqledit = mysqli_query($con,$sqledit);
	$rsedit = mysqli_fetch_array($qsqledit);
}
//Edit statement ends here

$sqltest = "SELECT * FROM test LEFT JOIN question ON test.qid=question.qid WHERE test.examfor='$_SESSION[insid]'";
$qsqltest= mysqli_query($con,$sqltest);
echo mysqli_error($con);
$totalscore = 0;
while($rstest = mysqli_fetch_array($qsqltest))
{
	if($rstest[4]== $rstest[13])
	{
		$totalscore = $totalscore +1;
	}
}

if(isset($_SESSION["examsession"]))
{
	unset($_SESSION["examsession"]);
	unset($_SESSION["timeleft"]);
	if($totalscore >= 9)
	{
		$expdate= date("Y-m-d",strtotime($dt. ' + 30 days'));
		$sqledit ="UPDATE llr SET status='Active',startdate='$dt',enddate='$expdate' WHERE llrid='$_GET[insid]'";
		mysqli_query($con,$sqledit);
		echo mysqli_error($con);
	}
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
            <li data-blast="bgColor">EXAM RESULT</li>
          </ul>
          <div class="resp-tabs-container">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-5 about-txt-img">
                  <img src="images/logo-llr-online.png" class="img-thumbnail" width="100%">
                </div>
                <div class="col-md-7 latest-list">
                  <div class="about-jewel-agile-left"> 

				  
				  
				  <p>
					
<form action="" method="post">
    <div class="form-group">
      <label for="email">Total Marks:</label>
      <input type="text" class="form-control" readonly value="15">
    </div>
	<div class="form-group">
      <label for="email">Pass Mark</label>
      <input type="text" class="form-control"  readonly value="9">
    </div>	
	<div class="form-group">
      <label for="email">Scored Marks</label>
      <input type="text" class="form-control"  readonly value="<?php echo $totalscore;?>">
    </div>
    
    <div class="form-group">
      <label for="pwd">Result:</label>
	  <?php
	  if($totalscore >= 9)
	  {
	  ?>
      <input type="text" class="form-control" value="Pass" style="color:green;" readonly >	  
	  <br>
    <button type="button" name="submit" class="btn btn-info" onclick="window.location='llrprint.php?insid=<?php echo $_GET['insid']; ?>';" >Click here to download LLR document</button>
	  <?php
	  }
	  else
	  {
	   ?>
      <input type="text" class="form-control" value="Failed" style="color:red;" readonly >  
	  <br>
    <button type="button" name="submit" class="btn btn-info" onclick="window.location='index.php'" >You can re-apply for LLR after 7 days</button>
	  <?php
	  }
	  ?>
    </div>
	
  </form>
					
					</p>
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