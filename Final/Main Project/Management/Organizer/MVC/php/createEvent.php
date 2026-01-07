<?php
session_start();
include "../db/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventName = trim($_POST['eventName']);
    $eventDate = trim($_POST['eventDate']);
    $eventLocation = trim($_POST['eventLocation']);
    $eventDescription = trim($_POST['eventDescription']);
    $status = 'Pending';

    //validation
    if (empty($eventName) || empty($eventDate) || empty($eventLocation) || empty($eventDescription)) {
        die("All fields are required");
    
    }


    $sql = "INSERT INTO events (event_name, event_date, event_location, event_description, status)
            VALUES ('$eventName', '$eventDate', '$eventLocation', '$eventDescription', '$status')";

    if ($conn->query($sql)){
        
        
        header("Location: ../html/organizerDashboard.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
