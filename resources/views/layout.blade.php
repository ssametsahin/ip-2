<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTest</title>
    <style>
        body {
            background-color: #f0f2f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
        }

        .user-menu {
            display: flex;
            align-items: center;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: bottom;
            bottom: 0;
            width: 100%;
        }

        .container {
            flex: 1;
            padding: 20px;
        }

        .class-box {
            background-color: #28a745;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .class-box a {
            color: #fff;
            font-size: 18px;
            text-decoration: none;
        }

        .class-box:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<header>
    <a href="/" class="logo">EduTest | Online Test Platformu</a>
    <div class="user-menu">
        @auth
            <span style="margin-right: 15px;">Hoş geldiniz, {{ Auth::user()->name }}!</span>
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" style="background-color: #28a745; border: none; color: #fff; cursor: pointer; padding: 8px 15px; border-radius: 4px; font-size: 14px; transition: background-color 0.3s;">Çıkış Yap</button>
            </form>
        @else
            <a href="{{ route('login') }}" style="background-color: #28a745; color: #fff; text-decoration: none; padding: 8px 15px; border-radius: 4px; font-size: 14px; transition: background-color 0.3s;">Giriş Yap</a>
        @endauth
    </div>
</header>
<div class="container">
    @yield('main')
</div>
<footer>
    <p>Design and Developed by Samet Sahin</p>
</footer>
</body>
</html>

