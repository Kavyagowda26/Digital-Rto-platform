<?php
session_start();
include "dbconnection.php";
$name = $_POST['name'];
//$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];
$sql = "select * from login where name='$_POST[name]' and status='active'";
 $aa=$con->query($sql);
 $exist=mysqli_num_rows($aa);
 $data=mysqli_fetch_array($aa);
 
 if($newpassword!==$confirmnewpassword)
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
 

      ?>
