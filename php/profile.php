<?php
   require 'vendor/autoload.php';
   $username = $_POST["username"];
   $passwd = $_POST["passwd"];
   $dob = $_POST["dob"];
   $mobile = $_POST["mobile"];
   $state = $_POST["state"];
   $mode = $_POST["mode"];
   if($mode == "display"){
      require 'vendor/autoload.php';
      $username = $_POST["username"];
      $passwd = $_POST["passwd"];
      $dob = $_POST["dob"];
      $mobile = $_POST["mobile"];
      $state = $_POST["state"];
      $con = new MongoDB\Client("mongodb://localhost:27017");
      $db = $con->profile;
      $collection = $db->data;
      $cursor = $collection->find();
      foreach ($cursor as $details) {
         if($details["username"] == "$username"){
            echo "<p>"."<b>"."Welcome Back to Profile Mr.".$details["username"]."<br/>"."Your Birthday Date is ".$details["dob"]."<br/>"."Your Contact Number is ".$details["mobile"]."<br/>"."Your State is ".$details["state"]."</b>"."</p>";
         }
      }
   }
   if($mode == "update"){
      require 'vendor/autoload.php';
      $username = $_POST["username"];
      $passwd = $_POST["passwd"];
      $dob = $_POST["dob"];
      $mobile = $_POST["mobile"];
      $state = $_POST["state"];
      $con = new MongoDB\Client("mongodb://localhost:27017");
      $db = $con->profile;
      $collection = $db->data;
      // $collection->remove($details);
      $details = (["username" => $username,"passwd" => $passwd,"dob" => $dob,"mobile" => $mobile,"state" => $state]);
      $collection->insertOne($details);
      echo "<b>Refresh page to see Update History<b>";
   }
   

   //storing session data into redis
   $redis=new Redis();
   $redis->connect('127.0.0.1',6379);
   $redis->set("username",$username);
   $redis->set("passwd",$passwd);
   $redis->set("dob",$dob);
   $redis->set("mobile",$mobile);
   $redis->set("state",$state);
?>