<?php

//Create Output Buffer
ob_start();


//Create Session

if(!isset($_SESSION)) {
	session_start();
}


// Connect to DB

$connection = mysqli_connect("localhost", "netguru", "success12", "cruddie");

if(mysqli_connect_errno()) {
	echo "Error: " . mysqli_connect_error();
}

?>