<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "vaccination";

// Establish a MySQL database connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    // echo "Connected successfully";
}







?>