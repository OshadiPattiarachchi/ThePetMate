<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #f6f1eb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            width: 70%;
            max-width: 1000px;
            align-items: center;
            justify-content: space-between;
        }

        .login-box {
            width: 45%;
            height: 500px; /* Increased height */
            background: white;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-box h2 {
            font-size: 30px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-btn {
            width: 100%;
            background-color: #6b3d1d;
            color: white;
            padding: 14px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
        }

        .login-btn:hover {
            background-color: #54301a;
        }

        .logo-section {
            width: 50%;
            text-align: center;
        }

        .logo-section img {
            width: 350px; /* Increased logo size */
        }

        .tagline {
            font-size: 18px; /* Bigger tagline */
            font-weight: bold;
            color: #6b3d1d;
            margin-top: 15px;
            text-align: center;
        }

        .forgot-password {
            display: block;
            text-align: right;
            margin-top: 10px;
            color: #6b3d1d;
            font-size: 14px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Login Box -->
        <div class="login-box">
            <h2>Login</h2>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <div class="mt-4">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <a class="forgot-password" href="{{ route('password.request') }}">Forgot your password?</a>

                <button type="submit" class="login-btn">Log in</button>
            </form>
        </div>

        <!-- Logo Section -->
        <div class="logo-section">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <p class="tagline">Find. Connect. Care.</p>
        </div>
    </div>
</body>
</html>
