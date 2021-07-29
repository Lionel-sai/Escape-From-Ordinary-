<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table
        {
            text-align: justify;
        }

        fieldset 
        {
            height: 50%;
            width: 40%;
            background: transparent;
            margin: auto;
            text-align: center;
            margin-top: 30px;
            border-radius: 35px;
        }
        fieldset input {
            text-align: center;
            margin-left: 30px;
        }

        fieldset .submit input{
            margin: 0 5px;
            padding: 5px 5px;
        }
        

    </style>
</head>
<body>
    <div>
        <form action="new_register_action.php" method="post">
       
        <fieldset>
            <legend>Enter Your Particulars</legend>
                <table>
                    <tr><td>Your Name:</td><td><input type="text" name="name" id="name" required><em>*</em></td></tr>
                    <tr><td>Age:</td><td><input type="number" name="age" id="age" min=18 max=80 required><em>*</em></td></tr>
                    <tr><td>Gender:</td><br><td><input type="text" name="gender" id="gender" required></td>
                    <tr><td>Enter Your Destination:</td><td><input type="text" name="destination" id="destination" required><em>*</em></td></tr>
                    <tr><td>Email:</td><td><input type="email" name="email" id="email" required><em>*</em></td></tr>
                    <tr><td>Your Planned Date: </td>
                    <td><input type=date name="date" value="date"></td>
                    <tr class="submit"><td><input type=submit value="Register"><input type=reset value ="Cancel"></td></tr>
                </table>
        </fieldset>
        </form>
    </div>
    <div>

</body>
</html>