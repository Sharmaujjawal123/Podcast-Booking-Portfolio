<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payment Details</title>
</head>
<body>
    <h2>New Payment Received</h2>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Podcast Type:</strong> {{ $podcastType }}</p>
    <p><strong>Hours:</strong> {{ $hours }}</p>
    <p><strong>Total Amount:</strong> ₹{{ $price }}</p>
    <p><strong>Screenshot attached with this email.</strong></p>
</body>
</html>
