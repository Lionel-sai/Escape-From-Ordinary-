
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            
        }
        fieldset input {
            text-align: center;
        }


    </style>
</head>
<body style="background: url('img/Wallpaper-3.jpg');">
    <div>
        <h2 style="text-align: center";>Login to check & Update particular</h2>
        <form action="login_action.php" method="post">
       
        <fieldset>
            <legend>Log In</legend>
                <table>
                    <tr><td>Username: </td><td><input type="text" name="username" id="username"></td></tr>
                    <tr><td>Password: </td><td><input type="password" name="password" id="password"></td></tr>
                    <tr><td><input type=submit value="Login"><input type=reset value ="Clear"></td></tr>
                </table>
        </fieldset>
        </form>
    </div>
</body>
</html>