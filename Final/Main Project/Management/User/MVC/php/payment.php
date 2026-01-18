<?php
/* DB connection */
include "../db/db.php";

/* Fetch ALL accepted bookings */
$sql = "SELECT er.event_id, er.event_name, er.event_date, er.event_location, er.event_description, er.status, u.fullname, u.email
        FROM event_requests er
        LEFT JOIN user u ON er.user_id = u.id
        WHERE er.status = 'Accepted'
        ORDER BY er.event_date DESC";

$result = $conn->query($sql);

if (!$result) {
    die("Query Error: " . $conn->error);
}

$bookings = $result->fetch_all(MYSQLI_ASSOC);

if ($bookings === null) {
    $bookings = array();
}

/* Handle payment submission */
$payment_message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_id = isset($_POST['event_id']) ? intval($_POST['event_id']) : 0;
    $payment_method = isset($_POST['payment_method']) ? trim($_POST['payment_method']) : '';
    
    if ($event_id > 0 && !empty($payment_method)) {
        $payment_message = "Payment processed successfully for event ID: $event_id using $payment_method";
    } else {
        $payment_message = "Please select an event and payment method";
    }
}
?>
