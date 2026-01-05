<?php
include "../db/db.php";

// Fetch pending requests
$sql = "SELECT * FROM event_requests WHERE status='Pending' ORDER BY event_id DESC";
$result = $conn->query($sql);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Event Name</th>
        <th>Date</th>
        <th>Location</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['event_id'] ?></td>
                <td><?= $row['event_name'] ?></td>
                <td><?= $row['event_date'] ?></td>
                <td><?= $row['event_location'] ?></td>
                <td><?= $row['event_description'] ?></td>
                <td>
                    <form style="display:inline;" method="POST" action="../php/updateRequest.php">
                        <input type="hidden" name="event_id" value="<?= $row['event_id'] ?>">
                        <input type="hidden" name="action" value="accept">
                        <button type="submit" class="action-btn accept-btn">Accept</button>
                    </form>
                    <form style="display:inline;" method="POST" action="../php/updateRequest.php">
                        <input type="hidden" name="event_id" value="<?= $row['event_id'] ?>">
                        <input type="hidden" name="action" value="reject">
                        <button type="submit" class="action-btn reject-btn">Reject</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="6" style="text-align:center;">No pending requests</td>
        </tr>
    <?php endif; ?>
</table>

<?php $conn->close(); ?>
