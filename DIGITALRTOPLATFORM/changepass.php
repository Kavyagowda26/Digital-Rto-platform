<?php
include("header.php");
//statement starts here
if(isset($_POST['submit']))
{
session_start();
include "dbconnection.php";
$name = $_POST['name'];
//$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$confirmpassword = $_POST['confirmpassword'];
$sql = "select * from enroller where name='$_POST[name]' and status='active'";
 $qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
 $data=mysqli_fetch_array($aa);
 
 if($newpassword!==$confirmpassword)
 {
	 
	  echo "<script>alert('The entered new passwords do not match')</script>";
	 echo "<script> window.location.assign('changepass.php')</script>";
	
 }
 else
 {
	 $select_query = "SELECT enrollerid FROM enroller";
        $run_select_query = mysqli_query($con,$select_query); 
        while ($row_post=mysqli_fetch_array($run_select_query))
		{

             $enrollerid = $row_post['enrollerid']; 

             //echo $user_id;

        }
		$update_posts = "UPDATE enroller SET  password='$newpassword' where name='$name'";  
        $run_update = mysqli_query($con,$update_posts); 
        echo "<script>alert('The Password Has been Updated!')</script>";
		echo "<script> window.location.assign('userlogin.php')</script>";
		 
 
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
            <li data-blast="bgColor">User Forget Password </li>
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
      <label for="email">User Name:<span class="classvalidate" id="idname"></span></label>
	  <input type="text" class="form-control" id="name" placeholder="Enter User Name" name="name" value="<?php echo $rsedit['name']; ?>">
    </div>  
 
      <label for="email">New Password:<span class="classvalidate" id="idnewpassword"></span></label>
     <input type="password" class="form-control" id="newpassword" placeholder="Enter New Password" name="newpassword" value="<?php echo $rsedit['newpassword']; ?>">
    </div>
    
	<div class="form-group">
      <label for="email">Confirm Password:<span class="classvalidate" id="idconfirmpassword"></span></label>
      <input type="password" class="form-control" id="confirmpassword" placeholder="Enter Confirm Password" name="confirmpassword" value="<?php echo $rsedit['confirmpassword']; ?>">
    </div>
    <button type="submit" name="submit" class="btn btn-info">Reset Password</button>
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
	  
	
		
	if(document.getElementById("name").value=="")
	{
		document.getElementById("idusername").innerHTML="Name Should not be empty...";
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