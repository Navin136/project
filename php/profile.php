<?php
   require 'vendor/autoload.php';
   $username = $_POST["username"];
   $passwd = $POST["passwd"];
   $dob = $_POST["dob"];
   $mobile = $_POST["mobile"];
   $state = $_POST["state"];
   $con = new MongoDB\Client("mongodb://localhost:27017");
   $db = $con->profile;
   $collection = $db->data;
   $details = array(["username" => $username,"passwd"=>$passwd,"age"=>$age,"dob"=>$dob,"mobile"=>$mobile]);
   $collection->insertOne($details);
?>