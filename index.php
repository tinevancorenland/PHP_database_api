<?php

$servername = "localhost";
$username = "admin";
$password = "1DtWuUOIz6jO";
$database = "db_notes";

// Create connection
$conn = new mysqli($servername, $username, $password, $database) or die(mysqli_error($conn));

// Insert a new note into the database

$title = filter_var($_GET["title"], FILTER_SANITIZE_STRING);
$content = filter_var($POST["content"], FILTER_SANITIZE_STRING);

$insert = "INSERT INTO notes (title, content)
VALUES ('$title', '$content')";

if($title) {
    if (!$conn->query($insert)) {
        echo "Error: " .$insert . "<br>" .$conn->error;
    }
}

// List notes in an html table overview

$overview = "SELECT note_id, title, content FROM notes";
$overviewresult = $conn->query($overview);

if($overviewresult->num_rows > 0) {
    echo "<table><tr><th>Title</th><th>Content</th></tr>";
    while($row = $overviewresult->fetch_assoc()) {
        echo "<tr><td>".$row["note_id"]."</td><td>".$row["title"]."</td><td>".$row["content"]."</td></tr>";
    } 
    echo "</table>";
} else {
    echo "no results";
}

// Delete note

$delete = "DELETE FROM notes WHERE note_id=2";
$deleteresult = $conn->query($delete);

// // Update note

$update = "UPDATE notes SET title='fouralour' where note_id=6";
$resultupdate = $conn->query($update);


?>