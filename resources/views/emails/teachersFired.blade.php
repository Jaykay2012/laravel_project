{{-- Make a Mail Template for Firing Teachers --}}
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
    <h1>Hi {{$data['name']}}, You Have Been Fired</h1>
    <hr>
    <p>We regret to inform you that your employment as a teacher has been terminated. Please review the details below:</p>
    <ul>
        <li><strong>Name:</strong> {{$data['name']}}</li>
        <li><strong>Subject:</strong> {{$data['subject']}}</li>
        <li><strong>Email:</strong> {{$data['email']}}</li>
        <li><strong>Phone Number:</strong> {{$data['phone_number']}}</li>
    </ul>
    <p>We appreciate your contributions during your time with us and wish you the best in your future endeavors.</p>
    <hr>
    <h5>DO NOT REPLY TO THIS EMAIL!!</h5>
</body>
</html>