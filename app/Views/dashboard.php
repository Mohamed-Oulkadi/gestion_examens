<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h1>Welcome to your Dashboard!</h1>

    <p>Hello, <?= session()->get('user')['username'] ?>. You are logged in.</p>

    <!-- Link to log out -->
    <a href="/logout">Logout</a>

</body>
</html>









