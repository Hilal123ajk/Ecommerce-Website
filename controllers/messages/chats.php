<?php

require 'Core/Database.php';

$db = new Database();


$userId = $_SESSION['loggedin']['id'];

$users = $db->query("SELECT u.*
    FROM users u
    JOIN messages m ON u.id = CASE
        WHEN m.sender_id = $userId THEN m.receiver_id
        WHEN m.receiver_id = $userId THEN m.sender_id
    END
    WHERE u.id != $userId
    GROUP BY u.id")->fetchAll();


if(isset($_POST['submit'])) 
{
    $messages = $db->query("SELECT * FROM messages
    WHERE (sender_id = :senderId AND receiver_id = :receiverId)
    OR (sender_id = {$_POST['user-id']} AND receiver_id = {$_SESSION['loggedin']['id']})
    ORDER BY sent_at ASC;", [

    'senderId' => $_SESSION['loggedin']['id'],
    'receiverId' => $_POST['user-id']

    ])->fetchAll();

    $user = $db->query("SELECT user_name from users WHERE id = :id", [
        "id" => $_POST['user-id']
    ])->find();

    $user_name = $user['user_name'];
    
}
  

require 'views/messages/chats.view.php';