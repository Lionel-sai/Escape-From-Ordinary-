<?php
    session_start();

    $username = $_POST["username"];
    $password = $_POST["password"];



    if(strcmp($username, "admin") == 0 and strcmp($password, "P@ssword")==0){
        $_SESSION["username"] = $username;
        header("Location: check_data.php");
    } else {
        header("Location: login_error.php");
    }


?>