<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* General Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color:#f6f1eb;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Header */
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #1f1f1f;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            margin: 20px;
        }

        .header-container h2 {
            font-size: 26px;
            font-weight: 600;
            color: #e3b04b;
        }

        .logout-button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            background: linear-gradient(135deg, #ff416c, #ff4b2b);
            border: none;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0px 3px 10px rgba(255, 75, 43, 0.3);
        }

        .logout-button:hover {
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
            transform: scale(1.05);
        }

        /* Container */
        .container {
            padding: 50px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 60vh;
        }

        .form-container {
            background: #242424;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        .form-container h3 {
            font-size: 22px;
            color: #e3b04b;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
            color: #bbb;
            font-weight: 500;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            background: #333;
            border: 1px solid #444;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            transition: 0.3s;
        }

        .input-group input:focus {
            outline: none;
            border-color: #e3b04b;
            background: #444;
        }

        .btn {
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            background: linear-gradient(135deg, #e3b04b, #ffcc00);
            border: none;
            border-radius: 8px;
            transition: 0.3s ease-in-out;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0px 3px 10px rgba(255, 204, 0, 0.3);
        }

        .btn:hover {
            background: linear-gradient(135deg, #ffcc00, #e3b04b);
            transform: scale(1.05);
        }

        .text-center {
            margin-top: 20px;
        }

    </style>
</head>
<body>

    <div class="header-container">
        <h2>User Dashboard</h2>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>

    <div class="container">
        <div class="form-container">
            <p>You're logged in!</p>
            <h3>Update Your Profile</h3>
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ auth()->user()->name }}">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ auth()->user()->email }}">
                </div>
                <button type="submit" class="btn">Update Profile</button>
            </form>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ url('/index') }}" class="btn">Go to Home</a>
    </div>

</body>
</html>
