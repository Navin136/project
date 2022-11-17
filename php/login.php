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
    $stmt = $connect->prepare("SELECT * FROM details where USERNAME=? and PASSWD=?");
    $stmt->bind_param("ss", $username,$passwd);
    $stmt->execute();
    $result=$stmt->get_result();
    $rows=mysqli_num_rows($result);
    $canLogin="";
    if($rows>0)
        $canLogin=true;
    else{
        $canLogin=false;
    }
    if($canLogin){
        echo "Login success";
    }
    else{
        echo "<h2 style=\"color:green\";><center> Wrong Username or password </center></h1>";
        echo "<h2> <center>Click <a style=\"color:blue\"; href=\"login.html\">here</a> to Try Again </center></h2>";
    }
    // $stmt->close();
    // $connect->close();
?>