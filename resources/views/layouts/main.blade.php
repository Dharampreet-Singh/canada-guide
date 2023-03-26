<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" type="text/css">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
<nav class="navbar">
    <a href="http://localhost:8000/home"><h1 class="logo">Canada Guide</h1></a>
    <ul class="nav-links">
        <li><a href="http://localhost:8000/home">Home</a></li>
        <li><a href="http://localhost:8000/blogs">Blogs</a></li>
        <li><a href="http://localhost:8000/housingsearch">Housing</a></li>
        <li><a href="http://localhost:8000/grocerysearch">Grocery</a></li>
        <li><a href="http://localhost:8000/about">About</a></li>
        <li><a href="http://localhost:8000/login">LogIn/SignUp</a></li>
        <li class="ctn"><a href="http://localhost:8000/contact">Contact</a></li>
    </ul>
    <img src="menu_btn.jpeg" alt="" class="menu-btn">
</nav>
    <div class='container'>
        @yield('content')
    </div>
</body>
</html>
