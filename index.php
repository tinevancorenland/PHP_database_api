<?php

$servername = "localhost";
$username = "admin";
$password = "GZodU80m8FNE";

// Create connection
$conn = new mysqli($servername, $username, $password);

$title = $_GET["title"];
$content = $_GET["content"];

echo $title, $content;

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";

$sql = "INSERT INTO notes (title, content)
VALUES ('titleone', 'contentone',)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>