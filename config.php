<?php
// Create A Connection
$servernanme = "localhost";
$username = "root";
$password = "";
$database = "Revision_Curd";

$conn = mysqli_connect($servernanme, $username, $password, $database);
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
?>