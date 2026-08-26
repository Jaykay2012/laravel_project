<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    {{-- Make rich UI for the users to see in their email --}}
    {{-- Add more styling to this original style --}}
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
    <h1>Hello, {{ $data['first_name'] }} {{ $data['last_name'] }}!</h1>
    <h3>Welcome to our platform! We are excited to have you on board.</h3>
    <hr>
    <p>You will be heading to Class Id: {{ $data['class_id'] }}. Great to have you with us!</p>
</body>
</html>