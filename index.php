<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" ><input type="submit" name="submit" value="Upload">
    </form>


    <?php
        if(isset($_POST['submit'])){
            require('db.php');

            $imgName = $conn->real_escape_string($_FILES['image']['name']);

            $imageData = $conn->real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
            $imageType = $conn->real_escape_string($_FILES['image']['type']);
            
            echo($imageData);
            // echo($imageData);

            if(substr($imageType,0,5) == "image"){
                echo("<br>working code here");
                $conn->query("INSERT INTO img (id, name,data)  VALUES(NULL,'$imgName','$imageData')");
                // $conn->query("INSERT INTO test (id, name) VALUES (NULL, 'sachitha');");
                echo("<br>image uploaded!");
            }else{
                echo("<br>not working");
            }
        }

    ?>

    <img src="show.php">
</body>
</html>