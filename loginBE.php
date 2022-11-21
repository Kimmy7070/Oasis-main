<?php
session_start ();
include("dbconnect.php"); 

if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['username'];
$b = $_REQUEST['password'];

$res = mysqli_query($conn,"select* from users where username='$a'and password='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	$_SESSION["username"]=$a;
	header("location: userProfile.php");
}
else	
{
	header("location:log.php?err=1");
	
}
}
?>
