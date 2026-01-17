
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Bookings</title>
    <link rel="stylesheet" href="../css/userDashboard.css">
</head>
<body>

<div class="navbar">
    <h2>Event Management System</h2>
    <a href="dashboard.php">Back to Dashboard</a>
    <a href="../php/logout.php" class="logout-btn">Logout</a>
</div>


<div class="container">
    <div class="sidebar">
        <a href="dashboard.php">Dashboard</a>
        <a href="events.php">View Events</a>
        <a href="myBookings.php">My Bookings</a>
        <a href="requestEvent.php">Request Event</a>
        <a href="payment.php">Payment</a>
    </div>

    <div class="main-content">
        <?php include "../php/myBookings.php"; ?>
    </div>
</div>

</body>
</html>
