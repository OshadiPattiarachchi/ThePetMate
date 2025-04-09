<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | ThePetMate</title>
    <style>
        /* Import Brittney font */
        @font-face {
            font-family: 'Brittney';
            src: url('{{ asset('fonts/Brittney.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            position: relative;
            overflow: hidden;
            font-family: 'Arial', sans-serif;
            background: url('{{ asset('images/a.jpg') }}') no-repeat center center/cover;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background-color: #f6f1eb;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .navbar ul {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            margin: 0;
            list-style: none;
            gap: 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: rgb(0, 0, 0);
            font-size: 16px;
            font-weight: bold;
            background-color: #f6f1eb;
            padding: 12px 25px;
            border-radius: 20px;
            display: inline-block;
            transition: all 0.3s ease-in-out;
            text-align: center;
            width: 140px;
        }

        .navbar ul li a:hover {
            background-color: #d5ba8f;
            color: black;
            transform: scale(1.05);
        }

        /* Logo */
        .logo img {
            height: 50px;
            width: auto;
            margin-left: 80px;
        }

        /* Content Box */
        .content-box {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 20px;
            margin-left: 50px;
            max-width: 500px;
            text-align: left;
        }

        /* Title */
        .title {
            font-size: 80px;
            font-weight: bold;
            font-family: 'Brittney', cursive;
            color: #2c1d27;
            margin-top: 0;
        }

        /* Tagline */
        .tagline {
            font-size: 24px;
            font-weight: bold;
            color: #2c1d27;
            margin-top: 10px;
        }

        /* Description */
        .description {
            font-size: 18px;
            color: #2c1d27;
            max-width: 400px;
            text-align: left;
            margin-top: 10px;
        }

        /* Buttons */
        .button-container {
            margin-top: 30px;
        }

        .btn {
            background-color: #6b3d1d;
            color: white;
            padding: 18px 36px;
            border: none;
            border-radius: 10px;
            font-size: 22px;
            cursor: pointer;
            margin: 10px 0;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background-color: #54301a;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <ul>
            <li><a href="{{ url('/index') }}">HOME</a></li>
            <li><a href="{{ url('/find') }}">FIND A MATCH</a></li>
            <li><a href="{{ url('/ads') }}">BUY PETS</a></li>
        </ul>
    </nav>

    <!-- Content Box -->
    <div class="content-box">
        <!-- Title -->
        <h1 class="title">ThePetMate</h1>
        <p class="tagline">Find. Connect. Care.</p>
        <p class="description">Where every pet finds their perfect match, connections grow, and love thrives in every home.</p>
        
        <!-- Buttons -->
        <div class="button-container">
            <a href="{{ route('login') }}" class="btn">Log in</a>
            <a href="{{ route('register') }}" class="btn">Register</a>
        </div>
    </div>

</body>
</html>
