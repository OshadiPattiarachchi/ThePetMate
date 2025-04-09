<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Match - Pet Match</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>
<style>
    @font-face {
        font-family: "Baskerville Display PT";
        src: url("fonts/BaskervilleDisplayPT.woff2") format("woff2"),
             url("fonts/BaskervilleDisplayPT.woff") format("woff"),
             url("fonts/BaskervilleDisplayPT.ttf") format("truetype");
        font-weight: normal;
        font-style: normal;
    }

    body {
        margin: 0;
        padding: 0;
        background-color: #f6f1eb;
        font-family: "Baskerville Display PT", "Libre Baskerville", serif;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 40px;
        background-color: #f6f1eb;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar ul {
        display: flex;
        justify-content: space-around;
        width: 100%;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .navbar ul li {
        margin: 0 25px;
        position: relative;
    }

    .navbar ul li a {
        text-decoration: none;
        color: rgb(0, 0, 0);
        font-size: 15px;
        position: relative;
        padding-bottom: 5px;
        transition: color 0.3s ease-in-out;
    }

    .navbar ul li a::after {
        content: "";
        display: block;
        height: 4px;
        width: 0%;
        background-color: #d5ba8f;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        transition: width 0.3s ease-in-out;
    }

    .navbar ul li a:hover {
        color: black;
    }

    .navbar ul li a:hover::after {
        width: 100%;
    }

    .logo img {
        height: 50px;
        width: auto;
        display: block;
        margin: 0 auto;
        justify-content: center;
        align-items: center;
        flex: 1;
    }

    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            text-align: center;
        }
        .nav-left, .nav-right {
            flex-direction: column;
            align-items: center;
        }
        .nav-left li, .nav-right li {
            margin: 10px 0;
        }
    }

    .container {
        padding: 20px;
    }

    .pet-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .pet-card {
        display: flex;
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .pet-card img {
        width: 150px;
        height: 150px;
        object-fit: cover;
    }

    .pet-details {
        padding: 15px;
        flex: 1;
    }

    .pet-details h5 {
        margin: 0 0 10px;
        font-size: 18px;
    }

    .pet-details p {
        margin: 5px 0;
        font-size: 14px;
    }

    .btn-primary {
        display: block;
        margin: 20px auto;
        padding: 12px 24px;
        font-size: 18px;
        font-weight: bold;
        color: black;
        background: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        border-radius: 30px;
        text-align: center;
        transition: all 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background: black;
        color: white;
        transform: scale(1.05);

    }
    .findamatch-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: 20px;
}

.white-box {
    background-color: #ffffff;
    padding: 50px;
    border: 1px solid #050505;
    border-radius: 30px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.plus-link {
    text-decoration: none;
    color: inherit;
    transition: transform 0.3s ease-in-out;
}

.plus-link:hover {
    transform: scale(1.05);
}

.circle {
    width: 150px;
    height: 150px;
    border: 4px solid #d5ba8f;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    transition: all 0.3s ease-in-out;
}

.plus-link:hover .circle {
    border-color: #000;
    background-color: rgba(213, 186, 143, 0.1);
    transform: rotate(90deg);
}

.plus-sign {
    font-size: 80px;
    font-weight: bold;
    color: #d5ba8f;
    transition: color 0.3s ease-in-out;
}

.plus-link:hover .plus-sign {
    color: #000;
}

.add-pet-text {
    font-size: 24px;
    color: #000;
    font-family: "Baskerville Display PT", "Libre Baskerville", serif;
    transition: color 0.3s ease-in-out;
}

.plus-link:hover .add-pet-text {
    color: #d5ba8f;
}
</style>
<body>
    <nav class="navbar">
        <ul class="nav-left">
            <li><a href="{{ url('/index') }}">HOME</a></li>
            <li><a href="{{ url('/find') }}">FIND A MATCH</a></li>
            <li><a href="{{ url('/ads') }}">BUY PETS</a></li>
        </ul>
        
        <!-- Logo in the Center -->
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>

        <ul class="nav-right">
            <li><a href="#">SHOP</a></li>
            <li><a href="#">MY PETS</a></li>
            <li><a href="{{ url('/dashboard') }}" class="profile-icon"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </nav>
    <div class="container text-center my-4">
  
    
    @auth
            <div class="findamatch-container">
                <div class="white-box">
                    <a href="{{ route('pets.create') }}" class="plus-link">
                    <div class="circle" href="{{ route('pets.create')}}">
                    <div class="plus-sign">+</div>
</div>
                        <div class="add-pet-text">ADD A PET</div>
                    </a>
                </div>
            </div>
        @else
            <div class="alert alert-warning">
                <p>You need to <a href="{{ route('login') }}">log in</a> to add a pet.</p>
            </div>
        @endauth
    
    <div class="pet-grid mt-4">
        @foreach($pets as $pet)
            <div class="pet-card">
                <img src="{{ asset('storage/' . $pet->photo) }}" alt="{{ $pet->name }}" onerror="this.onerror=null;this.src='default-image.jpg';">
                <div class="pet-details">
                    <h5>{{ $pet->name }}</h5>
                    <p><strong>Type:</strong> {{ $pet->type }}</p>
                    <p><strong>Breed:</strong> {{ $pet->breed }}</p>
                    <p><strong>Gender:</strong> {{ ucfirst($pet->gender) }}</p>
                    <p><strong>Age:</strong> {{ $pet->age }} years</p>
                    <p><strong>City:</strong> {{ $pet->city }}</p>
                    <a href="#" class="btn btn-info">Find A Match</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>

