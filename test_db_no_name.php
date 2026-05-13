<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "u826514770_viennapos3";
$password = "mE4sU3h";

echo "Testing connection to $servername WITHOUT database name...<br>";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the server!";
?>
