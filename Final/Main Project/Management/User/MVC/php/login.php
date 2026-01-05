<?php
session_start();
include "../db/db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request");
}

if (
    !isset($_POST['email'], $_POST['password']) ||
    trim($_POST['email']) === '' ||
    trim($_POST['password']) === ''
) {
    die("Missing value in the form!");
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM user WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    die("Invalid email or password");
}

$user = $result->fetch_assoc();


if (!password_verify($password, $user['password'])) {
    die("Invalid email or password");
}


$_SESSION['user_id'] = $user['id'];
$_SESSION['email']   = $user['email'];
$_SESSION['username'] = $user['fullname']; 


header("Location: ../html/userDashboard.php");
exit();
