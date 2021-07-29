<?php
    include "db_include.php";
    include "header.php";
    include "session.php";

    $bookingid = $_GET["bookingid"];
    $name = "";
    $age = "";
    $gender =  "";
    $num_of_pax = "";
    $destination = "";
    $date = "";

    $sql = "SELECT  name, age, gender, destination, date FROM registration WHERE bookingid= " . $bookingid;
    $resultset = $conn->query($sql);

    if($resultset->num_rows==1){
        if($row = $resultset->fetch_assoc()){
            $name = $row["name"];
            $age = $row["age"];
            $gender = $row["gender"];
            $destination = $row["destination"];
            $date = $row["date"];
        }   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User's Particulars</title>
    <style>
        table 
        {
            text-align: center;
            margin:auto;
            margin-top: 40px;
        }

    </style>
</head>
<body style="background: url('img/Wallpaper-3.jpg');">
    <div>
        <form action="edit_action.php" method="post">
        <fieldset>
                    <legend>Update Your Particulars</legend>
                    <table>
                        <tr><td>Your Name:</td><td><input type="text" name="name" id="name" value="<?php echo $name ?> "></td></tr>
                        <tr><td>Age:</td><td><input type="number" name="age" id="age" value="<?php echo $age ?>"></td></tr>
                        <tr><td>Gender:</td><br><td><input type="text" name="gender" id="gender" value="<?php echo $gender ?> "></td>
                        <tr><td>Enter Your Destination:</td><td><input type="text" name="destination" id="destination" value="<?php echo $destination ?>"></td></tr>
                        <tr><td>Your Planned Date: </td>
                        <td><input type=date name="date" value="<?php echo $date ?>"></td>
                        <tr><td>
                        <input type=submit value="Update Particular">
                        <input type="hidden" name="bookingid" id="bookingid" value ="<?php echo $bookingid ?>">
                        </td></tr>
                    </table>
                
                <br><br>
                

        </form>


    </div>
</body>
</html>