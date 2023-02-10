<?php

require 'Core/Database.php';

$db = new Database();

$user_info = $db->query("SELECT * FROM user_info WHERE user_id = :userId", [
    "userId" => $_GET['id']
])->find();

if(! $user_info)
{
    header("Location: /");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    session_destroy();
    header("Location: /user-logout");
}

require 'views/user/profile/show.view.php';