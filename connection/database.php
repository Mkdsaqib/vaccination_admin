<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "vaccination";

try{

    $connection  = new PDO('mysql:host=localhost;dbname=vaccination','root','');
}catch(PDOException){
    echo "Database not connected";
}
// Establish a MySQL database connection















?>