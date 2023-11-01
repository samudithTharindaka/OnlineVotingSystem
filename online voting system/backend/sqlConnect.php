<?php

function connectDB(){
	$servername = "localhost:3306";
	$username = "root";
	$password = "";
	$database = "votingsystem";

// Create a database connection
	$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
	if (!$conn) {
    	echo"connect failed" ;
	}
	// echo "db connected";
	return $conn;
}



?>