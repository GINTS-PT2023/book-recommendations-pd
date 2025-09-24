 <?php
    $servername = "localhost";
    $username = "book_review_user_24092025";
    $password = "password";
    $dbname = "book_review_24092025";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, full_name, book_title, review_text, rating FROM book_review";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["full_name"] . " " . $row["book_title"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>List</title>
 </head>

 <body>

     <a href="/">Home</a>

 </body>

 </html>