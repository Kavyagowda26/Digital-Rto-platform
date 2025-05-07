<?php
include("header.php");
//Insert statement starts here
if(isset($_POST['submit']))
{
	$filename = rand().$_FILES["img"]["name"];
	move_uploaded_file($_FILES["img"]["tmp_name"],"imgquestion/".$filename);
	
	if(isset($_GET['editid']))
	{
		$sql="UPDATE question SET question='$_POST[question]', option1='$_POST[option1]', option2='$_POST[option2]',option3='$_POST[option3]',option4='$_POST[option4]',answer='$_POST[answer]'";
		if($_FILES['img']['name'] != "")
		{
		$sql = $sql . ",img='$filename'";
		}
		$sql = $sql . ",status='$_POST[status]' WHERE qid='$_GET[editid]'";
		$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Question record updated successfully...');</script>";
			echo "<script>window.location='question.php';</script>";
		}
	}
	else
	{	
		$sql="INSERT INTO question (question, option1, option2,option3,option4,answer,img,status) VALUES 
		('$_POST[question]','$_POST[option1]','$_POST[option2]','$_POST[option3]','$_POST[option4]','$_POST[answer]','$filename','$_POST[status]')";
		$qsql = mysqli_query($con,$sql);
		echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('New question added successfully...');</script>";
			echo "<script>window.location='question.php';</script>";
		}
	}
}
//Insert statement ends here
//Delete statement starts here
if(isset($_GET['delid']))
{
	$sql ="DELETE FROM question WHERE qid='$_GET[delid]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Question record deleted successfully');</script>";
		echo "<script>window.location='question.php';</script>";
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
	$sqledit ="SELECT * FROM question WHERE qid='$_GET[editid]'";
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
            <li data-blast="bgColor">Question Answer Entry</li>
            <li data-blast="bgColor">View Question</li>
          </ul>
          <div class="resp-tabs-container">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-12 latest-list">
                  <div class="about-jewel-agile-left">
                    <p>
					
<form action="" method="post" enctype="multipart/form-data" onsubmit="return validateform()">
    <div class="form-group">
      <label for="email">Question:<span class="classvalidate" id="idquestion"></span></label>
	  <textarea class="form-control" id="question" placeholder="Enter Question" name="question"><?php echo $rsedit['question']; ?></textarea>
    </div>
	<div class="form-group">
      <label for="email">Option 1 :<span class="classvalidate" id="idoption1"></span></label>
	  <textarea class="form-control" id="option1" placeholder="Enter Option 1" name="option1"><?php echo $rsedit['option1']; ?></textarea>
    </div>
    <div class="form-group">
      <label for="email">Option 2:<span class="classvalidate" id="idoption2"></span></label>
	  <textarea  class="form-control" id="option2" placeholder="Enter Option 2" name="option2"><?php echo $rsedit['option2']; ?></textarea>
    </div>
	<div class="form-group">
      <label for="email">Option 3:<span class="classvalidate" id="idoption3"></span></label>
	  <textarea class="form-control" id="option3" placeholder="Enter Option 3" name="option3"><?php echo $rsedit['option3']; ?></textarea>
    </div>
	<div class="form-group">
      <label for="email">Option 4:<span class="classvalidate" id="idoption4"></span></label>
	  <textarea class="form-control" id="option4" placeholder="Enter Option 4" name="option4"><?php echo $rsedit['option4']; ?></textarea>
    </div>
	<div class="form-group">
      <label for="email">Answer:<span class="classvalidate" id="idanswer"></span></label>      
	  <select class="form-control" id="answer" placeholder="Enter Answer" name="answer">
		<option value="">Select answer</option>
		<?php
		$arr = array("Option 1","Option 2","Option 3","option 4");
		foreach($arr as $val)
		{
			if($val == $rsedit['answer'])
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
    <div class="form-group">
      <label for="email">Image:<span class="classvalidate" id="idimg"></span></label>
	  <input type="file" class="form-control" id="img" name="img">
	  <?php
	  if(isset($_GET['editid']))
	  {
	  ?>
	  <?php echo "<img src='imgquestion/$rsedit[img]' style='height:150px;width:150px;box-shadow: 0 0 0 0 #9e9e9e;'>"; ?>
	  <?php
	  }
	  ?>
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
    <button type="submit" name="submit" class="btn btn-info">Click here to Submit</button>
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
				<th style="width:25px;">Image</th>
				<th>Question</th>
				<th>Options</th>
				<th>Answer</th>
				<th style="width:25px;">Status</th>
				<th style="width:25px;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
					$sql = "SELECT * FROM question";
					$qsql= mysqli_query($con,$sql);
					while($rs = mysqli_fetch_array($qsql))
					{
						echo "<tr>
							<td><img src='imgquestion/$rs[img]' style='height:50px;width:50px;box-shadow: 0 0 0 0 #9e9e9e;'></td>
							<td>$rs[question]</td>
							<td>
							<b>Option 1:</b> $rs[option1]<br>
							<b>Option 2:</b> $rs[option2]<br>
							<b>Option 3:</b> $rs[option3]<br>
							<b>Option 4:</b> $rs[option4]<br>
							</td>
							
							<td>$rs[answer]</td>
							<td>$rs[status]</td>
							<td><a href='question.php?editid=$rs[0]' class='btn btn-info'>Edit</a> <br>
							<a href='question.php?delid=$rs[0]'  class='btn btn-danger' onclick='return confirmdel()'>Delete</a></td>
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
	

	if(document.getElementById("question").value=="")
	{
		document.getElementById("idquestion").innerHTML="Question Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("option1").value=="")
	{
		document.getElementById("idoption1").innerHTML="Option1 Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("option2").value=="")
	{
		document.getElementById("idoption2").innerHTML="Option2 Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("option3").value=="")
	{
		document.getElementById("idoption3").innerHTML="Option3 Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("option4").value=="")
	{
		document.getElementById("idoption4").innerHTML="Option4 Should not be empty...";
		validateform="false";
	}
	if(document.getElementById("answer").value=="")
	{
		document.getElementById("idanswer").innerHTML="Answer Should not be empty...";
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