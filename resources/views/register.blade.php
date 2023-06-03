<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <h1>Register</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Register">
    </form>
</body>
</html>