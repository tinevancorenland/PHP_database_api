<?php

$servername = "localhost";
$username = "admin";
$password = "n3QnR0QhlpL6";
$database = "db_notes";

$conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error($conn));

$title = filter_var($_GET["title"], FILTER_SANITIZE_STRING);
$content = filter_var($_GET["content"], FILTER_SANITIZE_STRING);

?>