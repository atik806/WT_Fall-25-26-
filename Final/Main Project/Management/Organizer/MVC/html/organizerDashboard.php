<?php
session_start();
include "../db/db.php";

// Check if organizer is logged in
if (!isset($_SESSION['id'])) {
    header("Location: ../html/login.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Organizer Dashboard</title>
    <link rel="stylesheet" href="../css/organizerDashboard.css">
</head>
<body>

    <div class="a">
        <h2>EventOrg</h2>
        <nav class = "z">
            <ul>
                <li class="active"><a href="organizerDashboard.php">Dashboard</a></li>
                <li><a href="createEvent.php">Create Event</a></li>
                <li><a href="manageEvent.php">Manage Events</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>

        </nav>
    </div>

   
    <div class="main">
     
        <div class="b">
            <h1>Organizer Dashboard</h1>
            <div class="profile">
                <span>Welcome, Organizer</span>
                
                
            </div>
        </div>

    <div class="c">
        <h2>
            Total Revenue
        </h2>
        <p>$12,345</p>
        <p>Upcoming Events</p>
        <div class="event-list">
            <!-- Event items will go here -->
            <div class="event-item">
                <h3>Sample Event 1</h3>
                <p>Date: 2024-07-15</p>
                <p>Location: New York</p>
                <p>Description: This is a sample event description.</p>
                <button class="edit-btn">Edit</button>
                <button class="delete-btn">Delete</button>
            </div>
        </div>
        

   

</body>
</html>
