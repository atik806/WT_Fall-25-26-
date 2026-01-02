<?php
include "../db/db.php";
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if (empty($email) || empty($password)) {
        die("Both fields are required");
    }
    $sql = "SELECT * FROM user WHERE email='$email' && password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $success = "Login successful!";
        header("Location: ../html/dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password.";
    }
    
    $conn->close();
}
?>