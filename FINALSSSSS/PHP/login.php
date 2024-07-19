<?php
// Correct variable names
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli("localhost", "root", "", "login_form");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Use a prepared statement with placeholders to avoid SQL injection
    $sql = $conn->prepare("SELECT * FROM diaries WHERE email = ? AND password = ?");
    $sql->bind_param('ss', $email, $password);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc(); // Change $sql to $result
        if ($data['password'] == $password) { // Use the correct field name 'password'
            header("Location: /FINALSSSSS/HTML/profile.html");
            exit; // Add exit to stop script execution after redirect
        } else {
            echo "Login failed. Invalid email or password.";
        }
    } else {
        echo "Login failed. Invalid email or password.";
    }
}

$conn->close();
?>
