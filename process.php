<?php

$servername = "localhost";
$username = "admin";
$password = "N2T74v6fRbCP";
$database = "db_notes";

$conn = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error($conn));

if (isset($_POST["save"])) {
    $titlesan = filter_var($_POST["title"], FILTER_SANITIZE_STRING);
    $contentsan = filter_var($_POST["content"], FILTER_SANITIZE_STRING);

    $conn->query("INSERT INTO notes (title, content) VALUES ('$titlesan', '$contentsan')") or die($conn->error());

    header("location: index.php");
}

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $conn->query("DELETE FROM notes WHERE note_id=$id") or die ($conn->error());

    header("location: index.php");
}

if(isset($_GET["edit"])) {
    $id = $_GET["edit"];
    $result = $conn->query("SELECT FROM notes WHERE note_id=$id") or die($conn->error());

    if (count($result)) {
        $row = $result->fetch_array();
        $title = $row["title"];
        $content = $row["content"];
    }
}

?>