<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f4f6f8;
}

.navbar {
    background: #2c3e50;
    color: white;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
}

.navbar a {
    color: white;
    text-decoration: none;
}

.container {
    display: flex;
}

.sidebar {
    width: 220px;
    background: #34495e;
    min-height: 100vh;
}

.sidebar a {
    display: block;
    color: white;
    padding: 15px;
    text-decoration: none;
}

.sidebar a:hover {
    background: #2c3e50;
}

.content {
    padding: 20px;
    width: 100%;
}

.cards {
    display: flex;
    gap: 20px;
    margin: 20px 0;
}

.card {
    background: white;
    padding: 20px;
    width: 200px;
    text-align: center;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

.table-box {
    background: white;
    padding: 20px;
    border-radius: 5px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

th {
    background: #ecf0f1;
}

    </style>
</head>
<body>

<div class="navbar">
    <h2>Event Management System</h2>
    <a href="login.php">Logout</a>
</div>

<div class="container">

    <div class="sidebar">
        <a href="#">Dashboard</a>
        <a href="#">View Events</a>
        <a href="#">My Bookings</a>
        <a href="#">Request Event</a>
        <a href="#">Profile</a>
    </div>

    <div class="content">
        <h1>Welcome, User 👋</h1>

        <div class="cards">
            <div class="card">
                <h3>Total Events</h3>
                <p>12</p>
            </div>

            <div class="card">
                <h3>My Bookings</h3>
                <p>5</p>
            </div>

            <div class="card">
                <h3>Pending Requests</h3>
                <p>2</p>
            </div>
        </div>

        <div class="table-box">
            <h2>Upcoming Events</h2>
            <table>
                <tr>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>Tech Conference</td>
                    <td>20 Jan 2026</td>
                    <td>Dhaka</td>
                    <td>Booked</td>
                </tr>
                <tr>
                    <td>Music Fest</td>
                    <td>5 Feb 2026</td>
                    <td>Chittagong</td>
                    <td>Available</td>
                </tr>
            </table>
        </div>

    </div>

</div>

</body>
</html>
