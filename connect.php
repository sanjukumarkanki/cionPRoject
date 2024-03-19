<?php
$servername = "localhost";
$username = "id21984242_sanju"; 
$password = "Appugaru@104"; 
$database = "id21984242_cion_db"; 

// Create connection

$conn = new mysqli($servername, $username, $password, $database);


// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>