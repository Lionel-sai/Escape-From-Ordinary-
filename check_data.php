<?php
    include "header.php";
    include "db_include.php";

    $sql = "SELECT bookingid, name, age, gender, email, destination, date FROM registration";

    $resultset = $conn->query($sql);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Registration</title>
    <style>
        table
        {
            text-align: center;
            margin:auto;
            margin-top: 40px;
        }
    </style>
</head>

<body style="background:url('img/Wallpaper-3.jpg')">
    <?php echo "<h1> Number of Record: $resultset->num_rows </h1>"
    ?>
    <table border = 1>
        <tr><th>Name</th><th>Age</th><th>Gender</th><th>Email</th><th>Destination</th><th>Date</th></tr>

        <?php
            if($resultset->num_rows > 0){
                while($row = $resultset->fetch_assoc()){
                    echo "<tr><td>". $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["gender"] . "</td><td>" .
                     $row["email"] . "</td><td>" . $row["destination"] . "</td><td>" . $row["date"] . "</td><td>" .
                    "<a href = 'edit_data.php?bookingid=". $row["bookingid"] . "'>Edit</a></td></tr>";
                }
            }
            
        ?>

    </table>
</body>
</html>