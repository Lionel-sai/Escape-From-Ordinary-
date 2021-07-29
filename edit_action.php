<?php
include "db_include.php";
include "header.php";

    $bookingid = $_POST["bookingid"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $destination = $_POST["destination"];
    $date = $_POST["date"];

   $sql = "UPDATE registration SET " . 
        "name = '" . $name . "', " . 
        "age = '" . $age . "', " . 
        "gender = '" . $gender . "', " .  
        "destination = '" . $destination . "', " . 
        "date = '" . $date . "' " .
        "WHERE bookingid =" . $bookingid; 
        

    $result = $conn->query($sql);     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Confirmed</title>
</head>
<body style="background: url('img/Wallpaper-3.jpg');">
    <div>
    <h1>Your Data Have Been Updated!</h1>
    <br><br><br>
    <p>Click <a href="index.php">HERE</a> to Hompage <br> or <br></p>
    <p>Click <a href="logout.php">Here</a> to Loggout<p>
    </div>
</body>
</html>