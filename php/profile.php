<?php
    $client = new MongoDB\Client("mongo://localhost:27017");
    $collection = $client->mongophp->details;
    $result =$collection->insertOne(['newText' => 'hi']);
    echo "Done"
?>