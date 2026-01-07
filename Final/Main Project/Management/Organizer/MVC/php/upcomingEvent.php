<?php
session_start();
include "../db/db.php";
$query = "SELECT * FROM events WHERE status = 'Pending' ORDER BY id DESC";

$result = $conn->query($query);


if (!$result) {
    die("Query Failed: " . $conn->error);
}
if

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['event_name']}</td>";
        echo "<td>{$row['event_date']}</td>";
        echo "<td>{$row['event_location']}</td>";
        echo "<td>{$row['event_description']}</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5' style='text-align:center;'>No upcoming events</td></tr>";
}
$conn->close();
?>
</table>
