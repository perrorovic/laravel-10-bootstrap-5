<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
</head>
<body>
    <p>Dear {{ $registration->fullname }},</p>

    <p>Thank you for registering! Your registration details:</p>

    <ul>
        <li><strong>Full Name:</strong> {{ $registration->fullname }}</li>
        <li><strong>Email:</strong> {{ $registration->email }}</li>
        <li><strong>Address:</strong> {{ $registration->address }}</li>
    </ul>

    <p>Thank you trying out the demo!</p>
</body>
</html>
