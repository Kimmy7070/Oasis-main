<?php
include("dbconnect.php");


if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO `users`(`fname`, `lname`, `username`, `email`, `password`) VALUES ('$fname','$lname','$username','$email','$password')";
    $iquery = mysqli_query($conn, $query);

	if($iquery)
	{
		//echo "Registration Successfully";
        header("Location: log.php");
	}
	else{
		echo "failed:";
	}
}
?>