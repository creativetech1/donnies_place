<?php
    
// Variables
$servername = "localhost";
$username = "marty123";
$password = "o1wDjasgJQ4j";
$dbname = "MyRestaurantDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Test if connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

    
?>
