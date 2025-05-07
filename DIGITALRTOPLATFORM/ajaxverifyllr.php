<?php
session_start();
include("dbconnection.php");
$sql = "SELECT * FROM llr WHERE llrid='$_GET[llrid]' AND enrollerid='$_SESSION[enrollerid]' AND status='Active'";
$qsql = mysqli_query($con,$sql);
$rs = mysqli_fetch_array($qsql);
if(mysqli_num_rows($qsql) >= 1)
{
	echo 1;
}
else
{
	echo 0;
}
?>