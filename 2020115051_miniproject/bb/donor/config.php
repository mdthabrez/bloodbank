<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "blood_bank";

$con = mysqli_connect($host,$user,$pass,$dbname);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>