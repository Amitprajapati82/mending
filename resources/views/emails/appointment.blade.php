<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Scheduled</title>
</head>
<body>
    <h1>Welcome, {{ $appointmentDetails['name'] }}</h1>
    <p>Thank you for scheduling an appointment with us!</p>
    <p><strong>Appointment Date:</strong> {{ $appointmentDetails['date'] }}</p>
    <p><strong>Appointment Time:</strong> {{ $appointmentDetails['time'] }}</p>
    <p>We look forward to seeing you then. If you have any questions, feel free to contact us.</p>
    <p>Best regards,<br>{{ config('app.name') }} Team</p>
</body>
</html>
