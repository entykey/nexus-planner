<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scheduling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("[Tung hay ho] Connection to database failed: " . $conn->connect_error);
} 
?>