<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_header.css">
    <title>Payment page</title>
    <style>
        body
        {
            background: url('Wallpaper-3.jpg');
            width: absolute;
        }
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


    </style>


</head>
<body>
    <div>
        <form action="payment_action.php" method="post">
            <fieldset>
                <legend>Payment Information</legend>
            <table>
                <tr><th>Please enter your credit card information below and click Submit</th></tr>
                <tr><td>Credit Card Accepted</td><td><input type="radio" name="card" id="visa" value="visa" checked><label for="visa">Visa</label>
                <input type="radio" name="card" id="master" value="master"><label for="master">Master</label>
                <input type="radio" name="card" id="paypal" value="paypal"><label for="paypal">PayPal</label></td></tr>
                <tr><td>Card Number</td><td><input type="number" name="number" id="number" value="number" required></td></tr>
                <tr><td>Expiry Date (MM)</td><td><input type="number" name="exmonth" id="exmonth" value="exmonth" max=12 min=10 required>
                    <input type="number" name="exyear" id="exyear" value="exyear"min=01 max=99 required></td></tr>
                <tr><td>CVV</td><td><input type="number" name="cvv" id="cvv" value="cvv" size=2 required></td></tr>
                <tr><td>Name On Card</td><td><input type="text" name="name" id="name" value="name" required></td></tr>
                <tr><td>Address 1</td><td><input type="text" name="add1" id="add1" value="add1" required></td></tr>
                <tr><td>Address 2</td><td><input type="text" name="add2" id="add2" value="add2"></td></tr>
                
            </table>
            <div style="margin-top: 50px;"><centre>
            <input type="submit" name="submit" id="submit" value="Submit">
            </centre></div>
            </fieldset>
        </form>

    </div>
</body>
</html>
