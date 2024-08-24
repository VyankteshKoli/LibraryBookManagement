<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-image: url("booksbg.jpg");
            background-size: cover; 
            background-position: center; 
        }

        .button-container {
            text-align: center;
            margin-top: 50px; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
        }

        .button-container a {
            display: inline-block;
            width: 150px;
            height: 150px;
            margin: 0 10px;
            background-color: #b1c9e4;
            color: #000;
            text-align: center;
            line-height: 150px;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .button-container a:hover {
            background-color: #0056b3;
        }

        h1 {
            color: #fff;
            font-size: 36px;
            background-color: #000;
            padding: 10px 20px; 
        }

        .textStyleBold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>LIBRARY MANAGEMENT SYSTEM</h1>
    <div class="button-container">
        <a href="addbook.php" class="textStyleBold">Add Book</a>
        <a href="updatebook.php" class="textStyleBold">Update Book</a>
        <a href="deletebook.php" class="textStyleBold">Delete Book</a>
    </div>
</body>
</html>
