<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    include "../db/db.php";

    if (!isset($_SESSION['user_id'])) {
        die("User not logged in");
    }

    $user_id = $_SESSION['user_id'];
    $eventName = trim($_POST['eventName']);
    $eventDate = trim($_POST['eventDate']);
    $eventLocation = trim($_POST['eventLocation']);
    $eventDescription = trim($_POST['eventDescription']);

    if (empty($eventName) || empty($eventDate) || empty($eventLocation) || empty($eventDescription)) {
        die("All fields are required");
    }

    $sql = "INSERT INTO event_requests (user_id, event_name, event_date, event_location, event_description, status)
            VALUES ($user_id, '$eventName', '$eventDate', '$eventLocation', '$eventDescription', 'pending')";

    if ($conn->query($sql)) {
        echo "<script>
                alert('Event request submitted successfully!');
                window.location.href='../html/dashboard.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
