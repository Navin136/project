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
    
    function preuser($un){
            $server_name = "localhost";
            $uname = "phpmyadmin";
            $pass= "/";
            $db_name = "phpmyadmin";
            $connect=new mysqli($server_name, $uname, $pass, $db_name);
            if ($connect->connect_error){
                die("Connection failed: ");
            }
            $stmt = $connect->prepare("SELECT * FROM details where USERNAME=?");
            $stmt->bind_param("s", $un);
            $stmt->execute();
            $result=$stmt->get_result();
            $rows=mysqli_num_rows($result);
            $isUser='';
            if($rows>0)
                $isUser=true;
            else{
                $isUser=false;
            }
            mysqli_free_result($result);
            $stmt->close();
            mysqli_close($connect);
            return $isUser;
    }

    if(preuser($username)){
        echo "<h2 style=\"color:green\";><center> You already registered </center></h1>";
        echo "<h2> <center>Click <a style=\"color:blue\"; href=\"login.html\">here</a> to Sign in </center></h2>";

    }
    else{
        $stmt = $connect->prepare("INSERT INTO details (USERNAME,PASSWD,MOBILE) VALUES ( ?, ?, ?)");
        $stmt->bind_param("sss", $username,$passwd,$mobile);
        $stmt->execute();
        $stmt->close();
        $connect->close();
        echo "<h2 style=\"color:green\";><center> Signed up successfully </center></h1>";
        echo "<h2> <center>Click <a style=\"color:blue\"; href=\"login.html\">here</a> to Sign in </center></h2>";
    }
    
?>