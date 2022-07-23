<?php
$servername = "localhost";
$username = "root";
$password = "nung7384488";
$dbname ="eveningk";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>