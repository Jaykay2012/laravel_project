<!DOCTYPE html>
<html>
<head>
    <title>Teacher Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Hello, {{ $data['name'] }}!</h1>
    <h3>You've gotten the job as a {{ $data['subject'] }} Teacher!</h3>
    <hr>
    <br>
    <p><strong>Thank you for signing up. We are thrilled to have you teaching here! We do hope you enjoy your time with us.</strong></p>
</body>
</html>