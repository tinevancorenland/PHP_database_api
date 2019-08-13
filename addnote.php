<?php

include_once "connection.php";

$insert = "INSERT INTO notes (title, content)
VALUES ('$title', '$content')";

if($title) {
    if (!$conn->query($insert)) {
        echo "Error: " .$insert . "<br>" .$conn->error;
    }
}

mysqli_close($conn);

?>