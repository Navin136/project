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
    $confirmpasswd = $_POST["confirmpasswd"];
    $mobile = $_POST["mobile"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $state = $_POST["state"];

    $stmt = $connect->prepare("INSERT INTO details (USERNAME,PASSWD,MOBILE,DOB,GENDER,ST) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username,$passwd,$mobile,$dob,$gender,$state);
    $stmt->execute();
    $stmt->close();
    $connect->close();
    echo "<h2 style=\"color:green\";><center> Signed up successfully </center></h1>";
    echo "<h2> <center>Click <a style=\"color:blue\"; href=\"login.html\">here</a> to Sign in </center></h2>";
?>