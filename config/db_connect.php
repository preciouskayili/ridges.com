<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'presh', 'Legendpresh88!!', 'ridges');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	} else {
        // echo 'Successful';
	}
?>