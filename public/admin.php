<?php



$messageJson = file_get_contents("../data/last_message.json");

$message = json_decode($messageJson, true);

echo end($message);

