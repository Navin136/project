<?php
    $server_name = "localhost";
    $uname = "phpmyadmin";
    $pass= "/";
    $db_name = "phpmyadmin";
    $connect=new mysqli($server_name, $uname, $pass, $db_name);
    if ($connect->connect_error){
        die("Connection failed: ");
    }

    $stmt = $connect->prepare("SELECT * FROM details where USERNAME=? and PASSWD=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result=$stmt->get_result();
    
    
?>