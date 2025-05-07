<?php
include("header.php");
//Insert statement starts here
if(isset($_POST['submit']))
{
	if(isset($_GET['editid']))
	{
		$sql="UPDATE test SET userid='$_POST[userid]', examfor='$_POST[examfor]',
		qid='$_POST[qid]',answer='$_POST[answer]',marks='$_POST[marks]',status='$_POST[status]' 
		WHERE testid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Test updated successfully');</script>";
			echo "<script>window.location='test.php';</script>";
		}
		else
		{
			echo mysqli_error($con);
		}		
	}
	else
	{
		$sql="INSERT INTO test (userid, examfor, qid,answer,marks,status)VALUES 
		('$_POST[userid]','$_POST[examfor]','$_POST[qid]','$_POST[answer]','$_POST[marks]','$_POST[status]')";
		$qsql = mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Registration done successfully');</script>";
			echo "<script>window.location='test.php';</script>";
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
	$sql ="DELETE FROM test WHERE testid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Test record deleted successfully');</script>";
		echo "<script>window.location='test.php';</script>";
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
	$sqledit ="SELECT * FROM test WHERE testid='$_GET[editid]'";
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
            <li data-blast="bgColor">Test Registration</li>
            <li data-blast="bgColor">View Test</li>
          </ul>
          <div class="resp-tabs-container">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-5 about-txt-img">
                  <img src="images/register.jpg" class="img-thumbnail" width="100%">
                </div>
                <div class="col-md-7 latest-list">
                  <div class="about-jewel-agile-left">
                    <h5 class="mb-3" data-blast="color">Test Registration  </h5>
                    <p>
					
<form action="" method="post" onsubmit="return validateform()">
    <div class="form-group">
      <label for="email">UserId:<span class="classvalidate" id="iduserid"></span></label>
	  <input type="text" class="form-control" id="userid" placeholder="Enter UserId" name="userid" value="<?php echo $rsedit[userid]; ?>" >
    </div>
	<div class="form-group">
      <label for="email">ExamFor :<span class="classvalidate" id="idexamfor"></span></label>
     <input type="text" class="form-control" id="examfor" placeholder="Enter ExamFor" name="examfor" value="<?php echo $rsedit[examfor]; ?>">
    </div>
    <div class="form-group">
      <label for="email">QId:<span class="classvalidate" id="idqid"></span></label>
      <input type="text" class="form-control" id="qid" placeholder="Enter QId" name="qid" value="<?php echo $rsedit[qid]; ?>">
    </div>
	<div class="form-group">
      <label for="email">Answer:<span class="classvalidate" id="idanswer"></span></label>
      <input type="text" class="form-control" id="answer" placeholder="Enter Answer" name="answer" value="<?php echo $rsedit[answer]; ?>">
    </div>
	<div class="form-group">
      <label for="email">Marks:<span class="classvalidate" id="idmarks"></span></label>
      <input type="text" class="form-control" id="marks" placeholder="Enter Marks" name="marks" value="<?php echo $rsedit[marks]; ?>">
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
				echo "<option value='$val'>$val</option>";
				}
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
				<th>UserId</th>
				<th>ExamFor</th>
				<th>QId</th>
				<th>Answer</th>
				<th>Marks</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
					$sql = "SELECT * FROM test";
					$qsql= mysqli_query($con,$sql);
					while($rs = mysqli_fetch_array($qsql))
					{
						echo "<tr>
							<td>$rs[userid]</td>
							<td>$rs[examfor]</td>
							<td>$rs[qid]</td>
							<td>$rs[answer]</td>
							<td>$rs[marks]</td>
							<td>$rs[status]</td>
							<td><a href='test.php?editid=$rs[0]' class='btn btn-info'>Edit</a> 
							<a href='test.php?delid=$rs[0]'  class='btn btn-danger' onclick='return confirmdel()'>Delete</a></td>
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
	var numericExpression = /^[0-9]+$/;
	var alphaExp = /^[a-zA-Z]+$/;
	var alphaspaceExp = /^[a-zA-Z\s]+$/;
	var alphaNumericExp = /^[0-9a-zA-Z]+$/;
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	
	var validateform="true";
	$( ".classvalidate" ).empty();
	
		
	if(document.getElementById("userid").value=="")
	{
		document.getElementById("iduserid").innerHTML="Userid Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("examfor").value=="")
	{
		document.getElementById("idexamfor").innerHTML="Examfor Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("qid").value=="")
	{
		document.getElementById("idqid").innerHTML="Qid Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("answer").value=="")
	{
		document.getElementById("idanswer").innerHTML="Answer Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("marks").value=="")
	{
		document.getElementById("idmarks").innerHTML="Marks Should not be empty...";
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