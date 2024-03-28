<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "jMm@0000";
$dbname = "serversidetask";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
