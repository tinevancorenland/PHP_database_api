<?php

$servername = "localhost";
$username = "admin";
$password = "N2T74v6fRbCP";
$database = "db_notes";

$conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error($conn));

if (isset($_POST["save"])) {
    $title = filter_var($_POST["title"], FILTER_SANITIZE_STRING);
    $content = filter_var($_POST["content"], FILTER_SANITIZE_STRING);

    $conn->query("INSERT INTO notes (title, content) VALUES ('$title', '$content')") or die($conn->error);

    header("location: index.php");
}

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $conn->query("DELETE FROM notes WHERE note_id=$id") or die ($conn->error);

    header("location: index.php");
}

?>