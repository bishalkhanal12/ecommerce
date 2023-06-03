<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
body{
    background-color: #f1f1f1;
}
header{
    background-color: #333;
    padding: 20px;
    margin-bottom: 15px;
}
header ul{
    list-style: none;
    margin: 0;
    padding: 0;
}
header ul li{
    display: inline-block;
}
header ul li a{
    color: #fff;
    text-decoration: none;
    padding: 10px;
}
main{
    background-color: #fff;
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
}
footer{
    background-color: #333;
    padding: 20px;
    margin-top: 15px;
}
footer p{
    color: #fff;
    text-align: center;
    margin: 0;
}
    </style>
</head>
<body>
    <header>
        <ul>
            <li>
        <a href="/home">Home</a>
        </li>
        <li>
        <a href="/about">About</a>
        </li>
        <li>
        <a href="/contact">Contact</a>
        </li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2020 laravel</p>
    </footer>
</body>
</html>