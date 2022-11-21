<?php
session_start ();
include("dbconnect.php"); 

if(isset($_REQUEST['submit']))
{
$a = $_REQUEST['email'];
$b = $_REQUEST['password'];

$res = mysqli_query($conn,"select* from admin_login  where USERNAME='$a'and PASSWORD='$b'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	$_SESSION["username"]=$a;
	header("location: AdminPanel.php");
}
else	
{
	header("location:log.php?err=1");
	
}
}
?>
