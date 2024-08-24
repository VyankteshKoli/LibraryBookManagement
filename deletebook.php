<html>
<head>
    <title>Books Management System</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        
        select {
            width: 430px; 
            height: 40px; 
            padding: 5px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Library Management System</h2>

        <h2>Books Record</h2>
        <form action="deletebook.php" method="post">
            <label>Select Title</label>
            <select id="title" name="title" required>
                        <option value="">Select Title</option>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "librarybook");


                        $result = $conn->query("SELECT title FROM books");
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["title"] . "'>" . $row["title"] . "</option>";
                            }
                        } else {
                            echo "<option disabled>No Title Found</option>";
                        }

                        $conn->close();
                        ?>
                    </select>

            <div class="button-group">
                <button type="submit" class = "button" style="background-color: #28a745; padding: 10px 20px; color: white; text-decoration: none; margin-right: 10px;">DELETE BOOK</button>    
        </div>
        </form>
    </div>  
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["title"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "librarybook";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "DELETE from books WHERE title = '$title'";
    $execute = mysqli_query($conn, $sql);

    if ($execute == 1) {
        echo "<script>alert('Book Deleted Successfully');</script>";
      } else 
      {
        $error_message = mysqli_error($conn);
        echo "<script>displayError('$error_message');</script>";
      }

    mysqli_close($conn);
}
?>

</body>
</html>