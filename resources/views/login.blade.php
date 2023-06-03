<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        body{
            background-color: #f1f1f1;
        }
        form{
            background-color: #fff;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        input{
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
        }
        input[type=submit]{
            background-color: #333;
            color: #fff;
            border: none;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Login page</h1>
    <form >
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>