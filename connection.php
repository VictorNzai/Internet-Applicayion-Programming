<?php
$servername = "localhost";
$username = "root";
$password = "rehanais2cool";
$database = "usermanagement";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";
?>
