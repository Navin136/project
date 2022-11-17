<?php
   require 'vendor/autoload.php';
   $username = $_POST["username"];
   $passwd = $_POST["passwd"];
   $dob = $_POST["dob"];
   $mobile = $_POST["mobile"];
   $state = $_POST["state"];
   $con = new MongoDB\Client("mongodb://localhost:27017");
   $db = $con->profile;
   $collection = $db->data;
   $details = (["username" => $username,"passwd" => $passwd,"dob" => $dob,"mobile" => $mobile,"state" => $state]);
   $collection->insertOne($details);

   // storing session data into redis
   $redis=new Redis();
   $redis->connect('127.0.0.1',6379);
   $redis->set("username",$username);
   $redis->set("passwd",$passwd);
   $redis->set("dob",$dob);
   $redis->set("mobile",$mobile);
   $redis->set("state",$state);
   echo "<p>"."<b>"."Welcome Mr.".$redis->get("username")."<br/>"."Your Birthday Date is ".$redis->get("dob")."<br/>"."Your Contact Number is ".$redis->get("mobile")."<br/>"."Your State is ".$redis->get("state")."</b>"."</p>";
?>