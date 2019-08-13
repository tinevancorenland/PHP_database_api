<?php

require "connection.php";

$resultupdate = $conn->query($update);
$update = "UPDATE notes SET content='$content' where title='$title'";

mysqli_close($conn);

?>