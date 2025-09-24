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

$fname = $_POST["full_name"];
$title = $_POST["book_title"];
$rating = $_POST["rating"];
$review = $_POST["review_text"];

$sql = "INSERT INTO book_review (full_name, book_title, review_text, rating)
VALUES ('$fname', '$title', '$review', $rating)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"  . "<br /> \n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo ("Data Successfully Sent!" . "<br /> \n");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBMIT PHP</title>
</head>

<body>

    <a href="/">Home</a>

</body>

</html>