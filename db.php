<?php
$host = "localhost";
$user = "root";
$pass = ""; 
$dbname = "organic_shop"; // আপনার ডাটাবেসের নাম

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>