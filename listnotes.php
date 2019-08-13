<?php

require "connection.php"; 

$overview = "SELECT * FROM notes";
$overviewresult = $conn->query($overview);
$result = array();

if($overviewresult->num_rows > 0) {
    while($row = $overviewresult->fetch_assoc()) {
        $jsonresult = json_encode($row);
        print_r($jsonresult);
    } 
} else {
    echo "no results";
}

// $overview = "SELECT * FROM notes";
// $result = mysql_query($conn, $overview);
// $rows = [];

// if(mysql_num_rows($result) > 0) {
//     while($row = mysqli_fetch_assoc($result)) {
//         array_push($rows, $row);
//     }

//     print json_encode($rows);
// }

mysqli_close($conn);

?>