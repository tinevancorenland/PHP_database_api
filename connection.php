<!-- Info
https://nl.wikibooks.org/wiki/Programmeren_in_PHP/MySQL_in_PHP -->

<?php

$servername = "localhost";
$username = "admin";
$password = "n3QnR0QhlpL6";
$database = "db_notes";

$conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error($conn));

$title = filter_var($_GET["title"], FILTER_SANITIZE_STRING);
$content = filter_var($POST["content"], FILTER_SANITIZE_STRING);

?>