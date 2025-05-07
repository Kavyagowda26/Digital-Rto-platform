<?php
include("header.php");
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

<div  style="position:fixed;width=50px;background-color:white;z-index:500;  border: 2px solid red;
  border-radius: 5px;padding:25;">
	<b>&nbsp; Time Left <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="time"><img src='images/clock-preloader.gif' style="width:50px;height:50px;"></span></b>
</div>
    </div>
    <!-- //banner -->
    <!--about-->
	<section class="about" id="about">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <!--Horizontal Tab-->
        <div id="horizontalTab">
          <ul class="resp-tabs-list justify-content-center">
            <li data-blast="bgColor">Exam panel </li>
          </ul>		 

	
          <div class="resp-tabs-container">
			<div class="tab1">
              <div class="row mt-lg-4 mt-3">
                <div class="col-md-12 latest-list">
                  <div class="about-jewel-agile-left">
                    <p>
					
<hr>			
<?php
$sql = "SELECT * FROM test WHERE examfor='$_GET[insid]' ORDER BY testid";
$qsql= mysqli_query($con,$sql);
$i=0;
$j=0;
while($rs = mysqli_fetch_array($qsql))
{
	$j = $i+1;
	echo "<input type='button' name='button' class='btn btn-info'  value='". $j ."' style='width:50px;' onclick='changequestion($i)'> ";
	$i=$i+1;
}
$_GET['qid']=0;
?>					
<hr>
<form action="" method="post">

<div id="divexampanel">
<?php include("ajaxexampanel.php"); ?>
</div>	
	
<hr>			
<?php
$sql = "SELECT * FROM test WHERE examfor='$_GET[insid]' ORDER BY testid";
$qsql= mysqli_query($con,$sql);
$i=0;
$j=0;
while($rs = mysqli_fetch_array($qsql))
{
	$j = $i+1;
	echo "<input type='button' name='button' class='btn btn-info'  value='". $j ."' style='width:50px;' onclick='changequestion($i)'> ";
	$i=$i+1;
}
?>					
<hr>
	
   <center> <button type="button" onclick="window.location='examresult.php?insid=<?php echo $_GET['insid']; ?>'" name="submit" class="btn btn-info">Click here to Complete Exam</button></center>
  </form>
					
					</p>
                  </div>
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
function changequestion(qid)
{
	 if (window.XMLHttpRequest) 
	 {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
    } 
	else 
	{
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("divexampanel").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajaxexampanel.php?qid="+qid,true);
	xmlhttp.send();
}
function submitanswer(testid,ans)
{
	if (window.XMLHttpRequest) 
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
    } 
	else 
	{
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
	xmlhttp.open("GET","ajaxexampanel.php?testid="+testid+"&ans="+ans,true);
	xmlhttp.send();
}


function startTimer(duration, display) 
{
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
		//$_SESSION["timeleft"]
		//alert(timer);
		
		//Ajax Timer starts
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("GET","ajaxtimer.php?timer="+timer,true);
        xmlhttp.send();
		//Ajax Timer ends
		
        if (--timer < 0) {
            timer = duration;
			window.location='examresult.php?insid=<?php echo $_GET['insid'];?>';
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = '<?php echo $_SESSION["timeleft"]; ?>',
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>