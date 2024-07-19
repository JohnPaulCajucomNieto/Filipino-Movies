<?php
$host = "localhost";
$username = "your_database_username";
$password = "";
$database = "login_form";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}

$conn->close();
?>
