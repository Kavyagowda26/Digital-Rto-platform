<?php
if(!isset($_SESSION)) { session_start(); }
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT  &  ~E_WARNING);
include("dbconnection.php");
if(isset($_GET['ans']))
{
	$sqltest = "UPDATE test SET answer='$_GET[ans]' where test.testid='$_GET[testid]'";
	$qsqltest= mysqli_query($con,$sqltest);
}
else
{
$sqltest = "SELECT * FROM test LEFT JOIN question ON test.qid=question.qid WHERE test.examfor='$_SESSION[insid]' ORDER BY test.testid limit $_GET[qid],1";
}
$qsqltest= mysqli_query($con,$sqltest);
echo mysqli_error($con);
$rstest = mysqli_fetch_array($qsqltest);
?>    
	<div class="form-group form-control">
      <label for="email"><b>Question:</b></label> <br>
		<?php
		echo $rstest['question'];
		echo "<br>";
		if(file_exists("imgquestion/".$rstest["img"]))
		{
		echo "<img src='imgquestion/$rstest[img]' style='width:50%;'>";
		}
		?>
    </div>
	<div class="form-group form-control">
      <label for="email"><b>Option 1 :</b></label><br>
	  <input type="radio" name="answer" id="answer1" value='Option 1' onclick="submitanswer('<?php echo $rstest['testid']; ?>','Option 1')" 
	  <?php
	  if($rstest[4] == "Option 1")
	  {
	  echo " checked ";
	  }
	  ?>  > 
		<?php
		echo "<label  for='answer1'>$rstest[option1]</lable>";
		?>
    </div>
    <div class="form-group form-control">
      <label for="email"><b>Option 2:</b></label><br>
	  <input type="radio" name="answer" id="answer2" value='Option 2' onclick="submitanswer('<?php echo $rstest['testid']; ?>','Option 2')" 
	  <?php
	  if($rstest[4] == "Option 2")
	  {
	  echo " checked ";
	  }
	  ?> > 
		<?php
		echo "<label  for='answer2'>$rstest[option2]</lable>";
		?>
    </div>
	<div class="form-group form-control">
      <label for="email"><b>Option 3:</b></label><br>
	  <input type="radio" name="answer" id="answer3" value='Option 3' onclick="submitanswer('<?php echo $rstest['testid']; ?>','Option 3')" 
	  <?php
	  if($rstest[4] == "Option 3")
	  {
	  echo " checked ";
	  }
	  ?> > 
		<?php
		echo "<label  for='answer3'>$rstest[option3]</lable>";
		?>
    </div>
	<div class="form-group form-control" >
      <label for="email"><b>Option 4:</b></label><br>
	  <input type="radio" name="answer" id="answer4" value='Option 4' onclick="submitanswer('<?php echo $rstest['testid']; ?>','Option 4')"  
	  <?php
	  if($rstest[4] == "Option 4")
	  {
	  echo " checked ";
	  }
	  ?>>  
		<?php
		echo "<label  for='answer4'>$rstest[option4]</lable>";
		?>
    </div>