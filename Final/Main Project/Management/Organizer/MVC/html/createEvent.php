<!DOCTYPE html>
<html>
<head>
    <title>Create Event</title>
    <link rel="stylesheet" href="../css/createEvent.css">
</head>
<body>

    <div class="event-form">
        <h2>Create Event</h2>

        <form method="POST" action="../php/createEvent.php">  
            <label>Event Name</label><br>
            <input type="text" name="eventName" placeholder="Enter event name"><br><br>

            <label>Date</label><br>
            <input type="date" name="eventDate"><br><br>

            <label>Time</label><br>
            <input type="time" name="eventTime"><br><br>

            <label>Location</label><br>
            <input type="text" name="eventLocation" placeholder="Enter location"><br><br>

            <label>Description</label><br>
            <textarea name="eventDescription" placeholder="Event description"></textarea><br><br>

            <label>All approved Users</label><br>
            <select name="approvedUsers[]" multiple>
                <!--all approved user will be shown here-->
                
            </select><br><br>
            

            <button type="submit">Create Event</button>
        </form>
    </div>

</body>
</html>
