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
    <div>
        <form  action="{{ route('handleLogin') }}" method="post" style="height: 200px;width:50%;background-color:#ddd;margin:50px auto" >
            @csrf
            <div>
                <input type="email" name="email" placeholder="email">
            </div>
            <div>
                <input type="password" name="password" placeholder="password">
            </div>
            <div>
                <input type="submit" name="login" value="login">
            </div>
        </form>
    </div>
</body>
</html>
