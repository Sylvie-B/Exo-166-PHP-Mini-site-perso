<?php



$jsonMessage = file_put_contents("../data/last_message.json", $_POST);

$arrayJson = [$jsonMessage];

json_encode($arrayJson);

header('Location: admin.php');

