<?php

include_once "connection.php";

$resultupdate = $conn->query($update);
$update = "UPDATE notes SET title='twosies' where note_id=2";

mysqli_close($conn);

?>