<?php

$pageHeading = 'Details';

require 'Core/Database.php';

$db = new Database();

$post = $db->query("SELECT * FROM users
    JOIN posts ON users.id = posts.user_id
    JOIN user_info ON users.id = user_info.user_id
    WHERE posts.id = :id;",[
        "id" => $_GET['id']
    ])->find();

require 'views/posts/post-show.view.php';