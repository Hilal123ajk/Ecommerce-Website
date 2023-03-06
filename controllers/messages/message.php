<?php

require 'Core/Database.php';
$db = new Database();

$user_info = $db->query("SELECT * FROM user_info WHERE user_id = :userId", [
    "userId" => 1
])->find();

require 'views/messages/message.view.php';