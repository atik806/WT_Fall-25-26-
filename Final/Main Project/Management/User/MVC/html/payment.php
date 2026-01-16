<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Payment</title>
    <link rel="stylesheet" href="payment.css">
</head>
<body>

<div class="payment-container">
    <h2>Event Payment</h2>

    <!-- Event Details -->
    <div class="card">
        <h3>Event Details</h3>
        <p><strong>Event:</strong> Tech Innovation Summit 2026</p>
        <p><strong>Date:</strong> 20 February 2026</p>
        <p><strong>Location:</strong> Dhaka Convention Center</p>
    </div>
    <div class="card">
        <h3>User Information</h3>
        <input type="text" placeholder="Full Name">
        <input type="email" placeholder="Email Address">
        <input type="text" placeholder="Phone Number">
    </div>

    <div class="card">
        <h3>Payment Method</h3>
        <label>
            <input type="radio" name="payment" checked>
            Credit / Debit Card
        </label>
        <label>
            <input type="radio" name="payment">
            Mobile Banking (bKash / Nagad)
        </label>
        <label>
            <input type="radio" name="payment">
            Bank Transfer
        </label>
    </div>

    <div class="card">
        <h3>Payment Summary</h3>
        <p>Ticket Price: <span>৳1500</span></p>
        <p>Service Charge: <span>৳100</span></p>
        <hr>
        <p class="total">Total: <span>৳1600</span></p>
    </div>

    <!-- Pay Button -->
    <button class="pay-btn">Pay Now</button>

</div>

</body>
</html>