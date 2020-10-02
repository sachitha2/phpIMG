<?php
    require('db.php');

    $result = $conn->query("SELECT * FROM img");

    $row = $result->fetch_assoc();


    // print_r($row);

    $imageData = $row['data'];
    // $type = $row['type'];
    // echo($imageData);

    header("Content-Type: image/jpeg");

    echo($imageData);

?>