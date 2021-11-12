<?php
$servername = "localhost";
$username = "bopt";
$password = "br_AQ=yl]x_v";
$database ="bopt";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>