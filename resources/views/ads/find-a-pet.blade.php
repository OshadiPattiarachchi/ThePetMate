<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Pet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    align-items: center;
    justify-content:space-between;
    padding: 15px 40px;
    background-color: #f6f1eb;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    
}

.navbar ul {
    display: flex;
    list-style: none;
    justify-content: space-around;
        width: 100%;
    padding: 0;
    margin: 0;
}

.nav-left, .nav-right {
    flex: 1;
    display: flex;
    justify-content: center;
    gap: 20px;
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

    ..logo {
    display: flex;
    justify-content: center;
    align-items: center;
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
        background-color: #f6f1eb;
    }
    .card {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px;
    transition: transform 0.3s ease-in-out;
    max-width: 300px; /* Smaller card size */
    margin: auto;
}

.card:hover {
    transform: scale(1.05);
}

.card-img-top {
    height: 150px; /* Adjust image size */
    object-fit: cover;
    border-radius: 8px;
}

.card-body {
    text-align: center;
    padding: 10px;
}

.card-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
}

.card-text {
    font-size: 14px;
    color: #333;
    margin-bottom: 10px;
}

.btn {
    background-color: #d5ba8f;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out;
}

.btn:hover {
    background-color: #b89c76;
}
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.col-md-6 {
    flex: 0 1 calc(33.333% - 20px); /* Ensures 3 cards per row with spacing */
    max-width: calc(33.333% - 20px);
}

@media (max-width: 992px) {
    .col-md-6 {
        flex: 0 1 calc(50% - 20px); /* Two cards per row for medium screens */
        max-width: calc(50% - 20px);
    }
}

@media (max-width: 768px) {
    .col-md-6 {
        flex: 0 1 100%; /* One card per row for small screens */
        max-width: 100%;
    }
}


    </style>
</head>
<body>
<nav class="navbar">
        <ul class="nav-left">
            <li><a href="{{ url('/index') }}">HOME</a></li>
            <li><a href="{{ url('/find') }}">FIND A MATCH</a></li>
            <li><a href="">BUY PETS</a></li>
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
    <div class="container">
        <div class="mb-4">
            <a href="{{ route('post-ad.create') }}" class="btn btn-primary">Post an Ad</a>
        </div>
        <div class="row">
            @foreach($petAds as $petAd)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        @if($petAd->image)
                            <img src="{{ asset($petAd->image) }}" class="card-img-top" alt="Pet Image">
                        @else
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="No Image Available">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $petAd->title }}</h5>
                            <p class="card-text">
                                <strong>Gender:</strong> {{ $petAd->gender }}<br>
                                <strong>Age:</strong> {{ $petAd->age }} months<br>
                                <strong>Breed:</strong> {{ $petAd->breed }}<br>
                                <strong>Price:</strong> ${{ $petAd->price }}<br>
                            </p>
                            <a href="{{ route('ads.show', $petAd->id) }}" class="btn btn-info">View Ad</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
