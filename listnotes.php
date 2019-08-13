<?php

require "connection.php"; 

$overview = "SELECT * FROM notes";
$overviewresult = $conn->query($overview);

if($overviewresult->num_rows > 0) {
    while($row = $overviewresult->fetch_assoc()) {
        $jsonresult = json_encode($row);
        print_r($jsonresult);
    } 
} else {
    echo "no results";
}

mysqli_close($conn);

?>