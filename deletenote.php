<?php

include_once "connection.php";

$delete = "DELETE FROM notes WHERE title='$title'";
$deleteresult = $conn->query($delete);

mysqli_close($conn);

?>