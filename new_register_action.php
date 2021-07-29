<?php
include "db_include.php";
include "header.php";
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $destination = $_POST["destination"];
    $date = $_POST["date"];

   $sql = "INSERT INTO registration (bookingid, name, age, gender, email, destination, date)". 
   "VALUES (NULL,'". $name . "','". $age . "','". $gender. "','" . $email . "','". $destination ."', '". $date ."')";

    $resultset = $conn->query($sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Validation page</title>
    
    <style>
        fieldset 
        {
            
            height: 50%;
            width: 40%;
            background: transparent;
            margin: auto;
            text-align: center;
            margin-top: 100px;
            margin-left: auto;
            
        }

        fieldset input 
        {
            margin-left: 20px;
            text-align: center;
        }

        table
        {
            text-align: justify;
        }
        body
        {
            background: url("Wallpaper-3.jpg");
        }
       
    </style>
</head>
<script>
    function back()
    {
        window.open("index.php");
    }
    
    
</script>
<body>
    <div>
    <form action="payment.php" method="post" onreset="back()">
    <fieldset>
        <legend>Please Confirm Your Particular</legend>
        
    <table>
            <tr><td>Your Name: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $name ?></td></tr>
            <tr><td>Age:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $age . " yrs"; ?></td></tr>
            <tr><td>Gender:</td><br><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $gender ?></td></tr>
            <tr><td>Email:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $email; ?></td></tr>
            <tr><td>Travelling To:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $destination ; ?></td></tr>
            <tr><td>Your Planned Date :</td><td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date ; ?></td></tr>
            
    </table>
    </fieldset>
    <centre>
        <div style="margin-top: 20px;">
    <input type="submit" value="Proceed to payment">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Back to Homepage">
        </div>
    </centre>
    </form>
</div>
</body>
</html>