<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Pet Ad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            background-color: #f6f1eb; 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        h2{
            font-size: 28px;
            font-family: "Baskerville Display PT", serif;
            margin-bottom: 40px; /* Increased space below the heading */
            text-align: center;
        }
        .container.form-container {
            background-color: #f6f1eb;
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
           
          
            border-radius: 8px;
            position: relative;
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 24px;
            cursor: pointer;
            text-decoration: none;
            color: black;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }

        input, select, textarea {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        textarea {
            height: 100px;
        }

        .submit-btn {
            background-color: #d5ba8f;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #b59a76;
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
    

    <div class="container form-container">
        <a href="{{ url()->previous() }}" class="close-btn ">✖</a>
        <h2>Post a Pet Ad</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('post-ad.store') }}" method="POST" enctype="multipart/form-data"> <!--For uploading photos-->
            @csrf <!--(Laravel security feature) -->
            <label>Title:</label>
            <input type="text" name="title" required>

            <label>Gender:</label>
            <select name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label>Age (months):</label>
            <input type="number" name="age" required>

            <label>Breed:</label>
            <input type="text" name="breed" required>

            <label>Pedigree:</label>
            <select name="pedigree" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <label>Description:</label>
            <textarea name="description" required></textarea>

            <label>Phone Number:</label>
            <input type="text" name="phone_number" required>

            <label>Price:</label>
            <input type="number" name="price" required>

            <label>Upload Image:</label>
            <input type="file" name="image">

            <button type="submit" class="submit-btn">Post Ad</button>
        </form>
    </div>
</body>
</html>
