<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "imgphp";


    $conn  = new mysqli($server,$user,$pass,$db);



    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }else{
        // echo("connected<br>");
    }


//    $result = $conn->query("select * from img");

//     $row = $result->fetch_assoc();

//     print_r($row);

?>