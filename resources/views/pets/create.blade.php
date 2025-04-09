<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Pet</title>
    <style>
        /* Embedded CSS */
        @font-face {
            font-family: "Baskerville Display PT";
            src: url("fonts/BaskervilleDisplayPT.woff2") format("woff2"),
                 url("fonts/BaskervilleDisplayPT.woff") format("woff"),
                 url("fonts/BaskervilleDisplayPT.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }
        body { 
            background-color: #f6f1eb; 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .form-container {
            background-color: #f6f1eb;
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .form-container h2 {
            font-size: 28px;
            font-family: "Baskerville Display PT", serif;
            margin-bottom: 40px; /* Increased space below the heading */
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert ul {
            list-style: none;
            padding: 0;
        }

        .alert li {
            font-size: 16px;
        }

        label {
            font-size: 16px;
            margin-bottom: 10px; /* Space below the label */
            display: block;
            font-weight: bold;
            color: #333;
        }

        .input-box {
            background-color: #CFB189;
            padding: 8px;
            border-radius: 20px; /* Curved box around answers */
            border: 1px solid #ddd;
            width: 50%; /* Smaller width for answer boxes */
            margin: 0 auto 30px; /* Centered and added space below */
        }

        .input-box input,
        .input-box select {
            background-color: transparent;
            border: none;
            color: #333;
            width: 100%;
            font-size: 14px; /* Smaller font size */
            padding: 5px;
        }

        .input-box input[type="file"] {
            padding: 0;
        }

        button[type="submit"] {
            background-color: #CFB189;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px; /* Space above the submit button */
        }

        button[type="submit"]:hover {
            background-color: #a67c52;
        }

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
    </style>
</head>
<body>


<div class="container">
    <h1>Create Pet Profile</h1>
    <form method="POST" action="{{ route('petProfiles.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" required>
        </div>

        <div class="mb-3">
            <label for="breed" class="form-label">Breed</label>
            <input type="text" class="form-control" id="breed" name="breed" required>
        </div>

        <div class="mb-3">
            <label for="pedigree_tested" class="form-label">Pedigree Tested</label>
            <select class="form-control" id="pedigree_tested" name="pedigree_tested" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="dna_tested" class="form-label">DNA Tested</label>
            <select class="form-control" id="dna_tested" name="dna_tested" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="vaccinated" class="form-label">Vaccinated</label>
            <select class="form-control" id="vaccinated" name="vaccinated" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="text" class="form-control" id="size" name="size" required>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" step="0.01" class="form-control" id="weight" name="weight" required>
        </div>

        <div class="mb-3">
            <label for="photos" class="form-label">Photos</label>
            <input type="file" class="form-control" id="photos" name="photos">
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


</body>
</html>