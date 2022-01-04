<?php
session_start();

$timezone = date_default_timezone_set("Africa/Harare");

$con = mysqli_connect("localhost", "root", "", "vid"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>