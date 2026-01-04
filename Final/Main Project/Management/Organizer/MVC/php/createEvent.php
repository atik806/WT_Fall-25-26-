<?php
include "../db/db.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventName = trim($_POST['eventName']);
    $eventDate = trim($_POST['eventDate']);
    $eventLocation = trim($_POST['eventLocation']);
    $eventDescription = trim($_POST['eventDescription']);

    if (empty($eventName) || empty($eventDate) || empty($eventLocation) || empty($eventDescription)) {
        die("All fields are required");
    }

    $organizerId = $_SESSION['organizer_id'];

    $sql = "INSERT INTO events (organizer_id, event_name, event_date, event_location, event_description)
            VALUES ('$organizerId', '$eventName', '$eventDate', '$eventLocation', '$eventDescription')";

    if ($conn->query($sql) === TRUE) {
        echo "Event created successfully!";
        header("Location: ../html/organizerDashboard.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

?>