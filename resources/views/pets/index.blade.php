<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4">Pet Listings</h1>
    
    <a href="{{ route('pets.create') }}" class="btn btn-primary mb-3">Add a New Pet</a>

    <div class="row">
        @foreach($pets as $pet)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('storage/' . $pet->photo) }}" class="card-img-top" alt="{{ $pet->name }}" onerror="this.onerror=null;this.src='default-image.jpg';">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pet->name }}</h5>
                        <p class="card-text">
                            <strong>Type:</strong> {{ $pet->type }} <br>
                            <strong>Breed:</strong> {{ $pet->breed }} <br>
                            <strong>Gender:</strong> {{ ucfirst($pet->gender) }} <br>
                            <strong>Age:</strong> {{ $pet->age }} years <br>
                            <strong>City:</strong> {{ $pet->city }}
                        </p>
                        <a href="#" class="btn btn-info">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



</body>
</html>