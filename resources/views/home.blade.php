<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div style="border: 3px solid black;">
        <h1>Welcome to the Home Page</h1>
        <h2>Register</h2>
        <hr>
        <form action="/register" method="post">
            @csrf
            <input type="text" name="name" placeholder="Enter your name">
            <input type="email" name="email" placeholder="Enter your email">
            <input type="password" name="password" placeholder="Enter your password">
            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>