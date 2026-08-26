<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Credentials Updated</title>
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
    <h1>Hi {{$data['name']}}, Your Credentials Have Been Updated</h1>
    <hr>
    <p>We wanted to inform you that your teacher credentials have been successfully updated in our system. Please review the updated information below:</p>
    <ul>
        <li><strong>Name:</strong> {{$data['name']}}</li>
        <li><strong>Subject:</strong> {{$data['subject']}}</li>
        <li><strong>Classes:</strong> {{$data['classes']}}</li>
        <li><strong>Email:</strong> {{$data['email']}}</li>
        <li><strong>Phone Number:</strong> {{$data['phone_number']}}</li>
    </ul>
</body>
</html>