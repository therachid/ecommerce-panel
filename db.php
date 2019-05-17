<?php 

$servername = "localhost";
$username = "root";
$password = "password";
$db="ecom_store";
// Create connection
$conn = mysqli_connect("$servername","$username","","$db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>