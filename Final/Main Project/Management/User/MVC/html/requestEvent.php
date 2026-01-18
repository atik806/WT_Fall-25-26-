<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../html/login.php"); 
    exit();
}
$username = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Request Event</title>
    <link rel="stylesheet" href="../css/userDashboard.css">
    <link rel="stylesheet" href="../css/requestEvent.css">
</head>
<body>




    <div class="main-content">
        <h2>Request an Event</h2>

        <!-- Events We Are Working On -->
        <div class="working-events">
            <h3>Events We Are Working On</h3>
            <table class="event-list">
                <tr>
                    <th>Event Name</th>
                    <th>Total Cost</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Corporate Seminar</td>
                    <td>৳45,000</td>
                    <td><button class="btn-select" onclick="selectEvent('Corporate Seminar', '45000')">Select</button></td>
                </tr>
                <tr>
                    <td>Wedding Ceremony</td>
                    <td>৳125,000</td>
                    <td><button class="btn-select" onclick="selectEvent('Wedding Ceremony', '125000')">Select</button></td>
                </tr>
                <tr>
                    <td>Music Concert</td>
                    <td>৳300,000</td>
                    <td><button class="btn-select" onclick="selectEvent('Music Concert', '300000')">Select</button></td>
                </tr>
                <tr>
                    <td>Charity Fundraiser</td>
                    <td>৳60,000</td>
                    <td><button class="btn-select" onclick="selectEvent('Charity Fundraiser', '60000')">Select</button></td>
                </tr>
                <tr>
                    <td>Tech Conference</td>
                    <td>৳72,000</td>
                    <td><button class="btn-select" onclick="selectEvent('Tech Conference', '72000')">Select</button></td>
                </tr>
                <tr>
                    <td>Food Festival</td>
                    <td>৳240,000</td>
                    <td><button class="btn-select" onclick="selectEvent('Food Festival', '240000')">Select</button></td>
                </tr>
            </table>
        </div>

        <!-- Request Form -->
        <div class="request-form">
            <h3>Request Details</h3>
            <form method="POST" action="../php/requestEvent.php">
                <label for="eventName">Event Name:</label>
                <input type="text" id="eventName" name="eventName" required>

                <label for="eventDate">Event Date:</label>
                <input type="date" id="eventDate" name="eventDate" required>

                <label for="eventLocation">Event Location:</label>
                <input type="text" id="eventLocation" name="eventLocation" required>

                <label for="eventDescription">Event Description:</label>
                <textarea id="eventDescription" name="eventDescription" required></textarea>

                <input type="submit" value="Submit Request">
            </form>
        </div>
    </div>
</div>

<script>
    function selectEvent(eventName, cost) {
        document.getElementById('eventName').value = eventName;
    }
</script>

</body>
</html>
