<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: ../php/login.php");
    exit();
}

$userId   = $_SESSION['user_id'];
$userName = $_SESSION['user_name'] ?? 'Guest';

include "../db/db.php";


$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$search_error = '';


if (!empty($search)) {
   
    if (strlen($search) < 2) {
        $search_error = 'Search term must be at least 2 characters long';
        $search = '';
    }
    
    else if (strlen($search) > 50) {
        $search_error = 'Search term cannot exceed 50 characters';
        $search = '';
    }
    
    else if (!preg_match('/^[a-zA-Z0-9\s\-@.]+$/', $search)) {
        $search_error = 'Search term contains invalid characters';
        $search = '';
    }
}


$sql = "SELECT er.event_id, er.event_name, er.event_date, er.event_location, er.event_description, er.status, er.user_id, u.fullname, u.email
        FROM event_requests er
        LEFT JOIN user u ON er.user_id = u.id
        WHERE er.status = 'Accepted'";


if (!empty($search)) {
    $search = $conn->real_escape_string($search);
    $sql .= " AND (er.event_name LIKE '%$search%' OR er.event_location LIKE '%$search%' OR u.fullname LIKE '%$search%')";
}

$sql .= " ORDER BY er.event_date DESC";

$result = $conn->query($sql);

if (!$result) {
    die("Query Error: " . $conn->error);
}

$bookings = $result->fetch_all(MYSQLI_ASSOC);

if ($bookings === null) {
    $bookings = array();
}
?>
