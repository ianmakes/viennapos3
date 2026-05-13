<?php
$servername = "localhost";
$username = "u826514770_viennapos3";
$password = "mE4sU3h";
$dbname = "u826514770_viennapos3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
