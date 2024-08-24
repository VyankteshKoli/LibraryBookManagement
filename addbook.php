<!DOCTYPE html>
<html>
<head>
    <title>Books Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        input[type="date"] {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Library Management System</h2>
        <h2>Books Record</h2>
        <form action="addbook.php" method="post">
            <label>Title</label>
            <input type="text" name="title" id="title" required><br>
            <label>Author</label>
            <input type="text" name="author" id="author" required><br>
            <label>Publication Year</label>
            <input type="date" name="publicationyear" id="publicationyear"><br>
            <label>Quantity of Books</label>
            <input type="number" name="quantityofbooks" id="quantityofbooks"><br>
            <label>Price</label>
            <input type="number" name="price" id="price"><br>
            <div class="button-group">
                <a href="homepage.html"><button type="submit" class="button" style="background-color: #28a745; padding: 10px 20px; color: white; text-decoration: none; margin-right: 10px;">ADD BOOK</button></a>
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $publicationyear = $_POST["publicationyear"];
        $quantityofbooks = $_POST["quantityofbooks"];
        $price = $_POST["price"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "librarybook";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "INSERT INTO books (title, author, publicationyear, quantityofbooks, price) VALUES ('$title', '$author', $publicationyear, $quantityofbooks, $price)";
        $execute = mysqli_query($conn, $sql);
        if ($execute == 1) {
            echo "<script>alert('Book Added Successfully');</script>";
        } else {
            $error_message = mysqli_error($conn);
            echo "<script>displayError('$error_message');</script>";
        }
        mysqli_close($conn);
    }
    ?>
</body>
</html>
