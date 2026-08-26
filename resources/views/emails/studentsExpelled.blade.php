<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Hi {{$data['first_name']}} {{$data['last_name']}}, You Have Been Expelled</h1>
    <hr>
    <p>We regret to inform you that your enrollment as a student has been terminated. Please review the details below:</p>
    <ul>
        <li><strong>Name:</strong> {{$data['first_name']}} {{$data['last_name']}}</li>
        <li><strong>Class Id:</strong> {{$data['class_id']}}</li>
        <li><strong>Email:</strong> {{$data['email']}}</li>
        <li><strong>Phone Number:</strong> {{$data['phone_number']}}</li>
    </ul>
    <p>We appreciate your time with us and wish you the best in your future endeavors.</p>
    <hr>
    <h5>DO NOT REPLY TO THIS EMAIL!!</h5>
</body>
</html>