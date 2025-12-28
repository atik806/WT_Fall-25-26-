
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="../css/register.css">
    
</head>

<body>

    <div class="a">
        <h2>Create Account</h2>

        <form method="POST">
    <label>Full Name</label>
    <input type="text" name="fullname" placeholder="Enter your name" required>

    <label>Phone Number</label>
    <input type="text" name="phone" placeholder="Enter your phone number" required>

    <label>Email</label>
    <input type="email" name="email" placeholder="Enter your email" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Create a password" required>

    <button type="submit">Register</button>
</form>


        <div class="login">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>

<?php
include "<db>db.php";
$success = "";
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullname = trim($_POST['fullname']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(empty($fullname) || empty($phone) || empty($email) || empty($password)){
        die("All fields are required");
    }

    if(preg_match('/[0-9]/', $fullname)){
        die("Name must not contain numbers");
    }

    if(!preg_match('/^01[0-9]{9}$/', $phone)){
        die("Please enter a valid phone number");
    }

    if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email)){
        die("Please enter a valid email address (e.g., example@domain.com)");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (fullname, phone, email, password) VALUES ('$fullname', '$phone', '$email', '$hashedPassword')";

    if ($conn->query($sql)) {
        $success = "Registration successful!";  
        

    } else {
        $error="ERROR ". $conn->error;
    }

    $conn->close();
}
?>


</body>
</html>
