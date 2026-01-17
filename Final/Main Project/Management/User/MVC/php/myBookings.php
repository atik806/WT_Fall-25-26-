<?php
session_start();
include "../db/db.php";

if (!isset($_SESSION['user_id'])) {
    die("User not logged in");
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT er.event_id, er.event_name, er.event_date, er.event_location, er.event_description, er.status, u.fullname
        FROM event_requests er
        JOIN user u ON er.user_id = u.id
        WHERE er.user_id = $user_id AND er.status = 'Accepted'";

$result = $conn->query($sql);
?>

<?php
if ($result && $result->num_rows > 0) {
    echo "<h3>Your Accepted Bookings</h3>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Date</th>
            <th>Location</th>
            <th>Description</th>
            <th>Status</th>
            <th>Booked By</th>
          </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr style='background-color: #d4edda;'>";
        echo "<td>" . htmlspecialchars($row['event_id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['event_name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['event_date']) . "</td>";
        echo "<td>" . htmlspecialchars($row['event_location']) . "</td>";
        echo "<td>" . htmlspecialchars($row['event_description']) . "</td>";
        echo "<td>" . htmlspecialchars($row['status']) . "</td>";
        echo "<td>" . htmlspecialchars($row['fullname']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align:center;'>No accepted bookings found.</p>";
}

$conn->close();
?>
