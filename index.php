<?php

$servername = "localhost";
$username = "admin";
$password = "eWTaf85EmyiY";
$database = "db_notes";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$title = filter_var($_GET["title"], FILTER_SANITIZE_STRING);
$content = filter_var($POST["content"], FILTER_SANITIZE_STRING);

echo $title, $content;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// insert a new note into the database
$sql = "INSERT INTO notes (title, content)
VALUES ('$title', '$content')";

if($title) {
    if ($conn->query($sql)) {
        echo "new record created";
    } else {
        echo "Error: " .$sql . "<br>" .$conn->error;
    }
}

?>