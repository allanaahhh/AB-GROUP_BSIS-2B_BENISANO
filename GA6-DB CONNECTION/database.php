<?php

$servername = "localhost";
$database = "crafttique"; 
$username = "root"; 
$password = "";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database connected successfully.";
?>
