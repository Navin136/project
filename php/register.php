<?php
    $server_name = "localhost";
    $uname = "phpmyadmin";
    $pass= "/";
    $db_name = "phpmyadmin";
    $connect=new mysqli($server_name, $uname, $pass, $db_name);
    if ($connect->connect_error){
        die("Connection failed: ");
    }
    $username = $_POST["username"];
    $passwd = $_POST["passwd"];
    $mobile = $_POST["mobile"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $state = $_POST["state"];
    $sql="INSERT into details (USERNAME,PASSWD,MOBILE,DOB,GENDER,ST) values ('{$username}','{$passwd}','{$mobile}','{$dob}','{$gender}','{$state}')";
    $connect->query($sql);
    
?>