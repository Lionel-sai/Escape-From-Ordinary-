<?php
    include "data_connect.php";

    $conn = new mysqli($server_name, $username, $password, $dbase);

    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
        }
        
?>