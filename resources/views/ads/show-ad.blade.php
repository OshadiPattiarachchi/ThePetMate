<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $petAd->title }}</title>
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
              background-color: #f6f1eb;; /* Set the entire background color */
              font-family: "Baskerville Display PT", "Libre Baskerville", serif;
          }

          /* Close button */
          .close-btn {
              font-size: 24px;
              cursor: pointer;
              text-decoration: none;
              color: black;
              position: absolute;
              top: 20px;
              right: 20px;
          }

          .close-btn:hover {
              color: #a67c52;
          }

          /* Flexbox container for image and details */
          .content-wrapper {
              display: flex;
              align-items: center;
              justify-content: center;
              gap: 30px; /* Increased gap between image and details */
              max-width: 1000px;
              margin: 0 auto;
              background-color: #f6f1eb;
              padding: 30px;
              border-radius: 8px;
              
          }

          /* Styling for pet image */
          .pet-image {
              width: 50%;  /* Image takes 40% of the width */
              max-width: 350px;  /* Maximum image width */
              height: auto;
              border-radius: 8px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
          }

          /* Styling for pet details */
          .pet-details {
              width: 50%;  /* Details take the remaining 60% */
              text-align: left;
              padding-left: 30px; /* Adds space between the image and the description */
          }

          /* Heading styles */
          h2 {
              font-size: 32px;
              font-weight: bold;
              margin-bottom: 20px;
              color: #333;
          }

          /* Styling for text */
          p {
              font-size: 18px;
              line-height: 1.6;
              margin-bottom: 10px;
              color: #555;
          }

          strong {
              color: #333;
          }

          /* Button styling */
          .btn {
              background-color: #d5ba8f;
              color: white;
              border: none;
              padding: 10px;
              margin-top: 15px;
              border-radius: 5px;
              cursor: pointer;
              font-size: 16px;
          }

          .btn:hover {
              background-color: #b59a76;
          }

          /* Phone number visibility */
          .phone-number {
              display: none;
              margin-top: 10px;
              font-size: 18px;
          }
    </style>
</head>
<body>

    @extends('layouts.app') <!-- for  consistancy -->

    @section('content')<!-- Defines the content block that will be injected into layouts.app. -->
    <a href="{{ url()->previous() }}" class="close-btn">✖</a>
    <div class="container mt-5">
        <div class="content-wrapper">
            <!-- Pet image -->
            @if($petAd->image)
                <img src="{{ asset($petAd->image) }}" alt="Pet Image" class="pet-image">
            @endif

            <!-- Pet details -->
            <div class="pet-details">
                <h2 class="mb-3">{{ $petAd->title }}</h2>
                <p><strong>Gender:</strong> {{ $petAd->gender }}</p>
                <p><strong>Age:</strong> {{ $petAd->age }} months</p>
                <p><strong>Breed:</strong> {{ $petAd->breed }}</p>
                <p><strong>Pedigree:</strong> {{ $petAd->pedigree ? 'Yes' : 'No' }}</p>
                <p><strong>Description:</strong> {{ $petAd->description }}</p>
                <p><strong>Price:</strong> ${{ $petAd->price }}</p>

                @auth
                    <button class="btn" onclick="togglePhoneNumber()">Click here to contact</button>
                    <p id="phoneNumber" class="phone-number"><strong>Phone Number:</strong> {{ $petAd->phone_number }}</p>
                @else
                    <p><strong>Phone Number:</strong> <a href="{{ route('login') }}">Log in</a> to view</p>
                @endauth
            </div>
        </div>
    </div>
    @endsection

    <script>
        function togglePhoneNumber() {
            var phoneNumberElement = document.getElementById('phoneNumber');
            phoneNumberElement.style.display = phoneNumberElement.style.display === 'block' ? 'none' : 'block';
        }
    </script>

</body>
</html>
