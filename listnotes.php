<?php

require "connection.php"; 

$overview = "SELECT note_id, title, content FROM notes";
$overviewresult = $conn->query($overview);

if($overviewresult->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Title</th><th>Content</th></tr>";
    while($row = $overviewresult->fetch_assoc()) {
        echo "<tr><td>".$row["note_id"]."</td><td>".$row["title"]."</td><td>".$row["content"]."</td></tr>";
    } 
    echo "</table>";
} else {
    echo "no results";
}

mysqli_close($conn);

?>