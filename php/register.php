<?php
    $server_name = "localhost";
    $uname = "phpmyadmin";
    $pass= "/";
    $db_name = "phpmyadmin";
    $connect=new mysqli($server_name, $uname, $pass, $db_name);
    // if ($connect->connect_error){
    //     die("Connection failed: ");
    // }
    $username = $_POST["username"];
    $city = $_POST["city"];
    $sql="insert into users (NAME,CITY) values ('{$username}','{$city}')";
    $connect->query($sql);
    
?>