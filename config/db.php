<?php 

$connection = mysqli_connect("localhost", "netguru", "success12", "cruddie");

if(mysqli_connect_errno()) {
	echo "Error: " . mysqli_connect_error();
} else {
	echo "Connection to DB successful!";
}

?>