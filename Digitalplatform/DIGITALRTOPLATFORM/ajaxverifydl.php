<?php
if(!isset($_SESSION)) { session_start(); }
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT  &  ~E_WARNING);
include("dbconnection.php");
$sql = "SELECT * FROM drivinglicense WHERE dlno='$_GET[dlno]' AND enrollerid='$_SESSION[enrollerid]' AND status='Driving License issued'";
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