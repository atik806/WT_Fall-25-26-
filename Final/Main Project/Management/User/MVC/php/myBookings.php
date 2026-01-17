<?php
session_start();
include "../db/db.php";

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    die("User not logged in");
}

$user_id = $_SESSION['user_id'];

// SQL query: get all events booked by this user along with request status
$sql = "
SELECT 
    eu.event_id,
    er.event_name,
    er.event_date,
    er.event_location,
    er.event_description,
    er.status AS request_status
FROM event_users eu
JOIN event_requests er ON eu.event_id = er.event_id
WHERE eu.user_id = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Bookings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #555;
            color: #fff;
        }
        
        .accepted {
            background-color: #c8e6c9;
        }
        .denied {
            background-color: #ffcdd2; 
        }
        .pending {
            background-color: #fff9c4; `
            
        }
    </style>
</head>
<body>

<h2>My Bookings</h2>

<?php
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
            <th>Event Name</th>
            <th>Date</th>
            <th>Location</th>
            <th>Description</th>
            <th>Request Status</th>
          </tr>";
    
    while ($row = $result->fetch_assoc()) {
        // Determine row class based on status
        $status_class = strtolower($row['request_status']); // accepted, denied, pending
        if (!in_array($status_class, ['accepted', 'denied', 'pending'])) {
            $status_class = 'pending'; // default to pending
        }

        echo "<tr class='{$status_class}'>";
        echo "<td>" . htmlspecialchars($row['event_name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['event_date']) . "</td>";
        echo "<td>" . htmlspecialchars($row['event_location']) . "</td>";
        echo "<td>" . htmlspecialchars($row['event_description']) . "</td>";
        echo "<td>" . htmlspecialchars($row['request_status']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align:center;'>No bookings found.</p>";
}
?>

</body>
</html>
