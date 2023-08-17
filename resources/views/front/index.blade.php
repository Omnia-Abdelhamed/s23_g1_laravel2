<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        .top{
            padding: 10px 50px;
            background-color: #ED078B;
            color: #fff;
        }
        ul{
            list-style-type: none;
        }
        .top ul li{
            display: inline-block;
            margin-left: 20px;
        }
        a{
            text-decoration: none;
        }
        .header{
            display: flex;
            padding: 30px 5%;
            align-items: center;
            /* justify-content: space-between; */
            justify-content: flex-end;
        }
        .logo{
            margin-right: auto;
        }
        .nav-links{
            margin-right: 40px;
        }
        .header .nav-links li{
            display: inline-block;
            margin-left: 20px;
        }
        .nav-links li a{
            color: #423F8D;
            font-weight: bold;
        }
        .nav-links li a:hover{
            color: #ED078B;
            font-weight: bold;
        }
        .enroll{
            background-color: #12D9DF;
            padding: 15px 40px;
            border-radius: 30px;
            font-weight: bold;
            color: #fff;
        }
        .slider{
            width: 100%;
            height: 700px;
            background-image: url("front/img/h1_hero.png");
            background-size: cover;
            position: center center;
        }
    </style>
</head>
<body>
    <div class="top">
        <ul>
            <li>example@gmail.com</li>
            <li>01099999999</li>
        </ul>
    </div>
    <nav class="header">
        <img src="front/img/logo.png.webp" alt="logo" class="logo">
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            @auth
            <li><a href="#">Class</a></li>
            @endauth

            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endguest

            @auth
                <li><a href="{{ route('logout') }}">Logout</a></li>
            @endauth
        </ul>
        @auth
            <a href="#" class="enroll">{{ Auth::user()->name }}</a>
        @endauth
    </nav>
    <div class="slider"></div>
</body>
</html>
