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

// Check if form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $scan_type = $_POST['scan'];


    //SQL statement insert data into mysql data

    $sql = "INSERT INTO userdata (name, phonenumber, scantype) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $phone, $scan_type);


    // here checking data enter into mysql successfully or not
    if ($stmt->execute()) {
        echo "<h1>Booking Successful</h1>";
    } else {
        echo "<h1>Error:</h1> " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
    $conn->close();
    

}
?>