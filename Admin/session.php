<?php

session_start ();
if(!isset($_SESSION["login"]))

	header("location: notLogin.php");

if(!isset($_SESSION["username"]))

?>