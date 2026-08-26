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
    
</body>
</html>
</head>
<body>
    <h1>Hi {{$data['first_name']}} {{$data['last_name']}}, Your Credentials Have Been Updated</h1>
    <hr>
    <p>We wanted to inform you that your student credentials have been successfully updated in our system. Please review the updated information below:</p>
    <ul>
        <li><strong>Name:</strong> {{$data['first_name']}} {{$data['last_name']}}</li>
        <li><strong>Class Id:</strong> {{$data['class_id']}}</li>
        <li><strong>Email:</strong> {{$data['email']}}</li>
        <li><strong>Phone Number:</strong> {{$data['phone_number']}}</li>
    </ul>
</body>
</html>