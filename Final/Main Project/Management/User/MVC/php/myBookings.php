<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: ../php/login.php");
    exit();
}

$userId = $_SESSION['user_id'];
$userName = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest';



include "../db/db.php";  


$stmt = $conn->prepare("
    SELECT event_id, event_name, event_date, event_location, status
    FROM event_requests1      
    WHERE user_id = ?
    ORDER BY event_date DESC
");

$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$bookings = $result->fetch_all(MYSQLI_ASSOC);

$stmt->close();
$conn->close();
?>
