<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbdiary_entry";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("CONNECTION FAILED: " . $conn->connect_error);
}

$sql1 = 'CREATE TABLE diary_entrytbl (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(30) NOT NULL,
    content VARCHAR(255) NOT NULL,
    date DATE
)';
if ($conn->query($sql1) === TRUE) {
    echo "TABLE diary_entrytbl CREATED SUCCESSFULLY";
} else {
    echo "ERROR CREATING TABLE: " . $conn->error;
}
?>
