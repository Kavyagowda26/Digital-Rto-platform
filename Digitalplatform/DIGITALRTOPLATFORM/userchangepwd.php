<?php
include("header.php");
//statement starts here
if(isset($_POST['submit']))
{
		$sql="UPDATE enroller SET password='$_POST[newpassword]' WHERE password='$_POST[oldpassword]' AND enrollerid='$_SESSION[enrollerid]' ";
		$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Password updated successfully..');</script>";
			echo "<script>window.location='userchangepwd.php';</script>";
		}
		else
		{
			echo "<script>alert('Failed to change password');</script>";
			echo "<script>window.location='userchangepwd.php';</script>";
		}
}
//statement ends here
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
            <li data-blast="bgColor">User Change Password </li>
          </ul>
          <div class="resp-tabs-container">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-5 about-txt-img">
                  <img src="images/register.jpg" class="img-thumbnail" width="100%">
                </div>
                <div class="col-md-7 latest-list">
                  <div class="about-jewel-agile-left">
                    <h5 class="mb-3" data-blast="color">User Change Password </h5>
                    <p>
					
<form action="" method="post" onsubmit="return validateform()">
    <div class="form-group">
      <label for="email">Old Password:<span class="classvalidate" id="idoldpassword"></span></label>
	  <input type="password" class="form-control" id="oldpassword" placeholder="Enter Old Password" name="oldpassword" value="<?php echo $rsedit['oldpassword']; ?>">
    </div>
	<div class="form-group">
      <label for="email">New Password:<span class="classvalidate" id="idnewpassword"></span></label>
     <input type="password" class="form-control" id="newpassword" placeholder="Enter New Password" name="newpassword" value="<?php echo $rsedit['newpassword']; ?>">
    </div>
    
	<div class="form-group">
      <label for="email">Confirm Password:<span class="classvalidate" id="idconfirmpassword"></span></label>
      <input type="password" class="form-control" id="confirmpassword" placeholder="Enter Confirm Password" name="confirmpassword" value="<?php echo $rsedit['confirmpassword']; ?>">
    </div>
    <button type="submit" name="submit" class="btn btn-info">Submit</button>
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
	  
	
		
	if(document.getElementById("oldpassword").value=="")
	{
		document.getElementById("idoldpassword").innerHTML="Oldpassword Should not be empty...";
		validateform="false";
	}
		
	
	if(document.getElementById("newpassword").value != document.getElementById("confirmpassword").value)
	{	
		document.getElementById("idnewpassword").innerHTML="New Password and Confirm password not matching...";
		validateform="false";
	} 
	
	if(document.getElementById("newpassword").value=="")
	{
		document.getElementById("idnewpassword").innerHTML="New password Should not be empty...";
		validateform="false";
	}
	
	if(document.getElementById("confirmpassword").value=="")
	{
		document.getElementById("idconfirmpassword").innerHTML="Confirm password Should not be empty...";
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