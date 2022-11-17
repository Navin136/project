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
   echo "done";
?>