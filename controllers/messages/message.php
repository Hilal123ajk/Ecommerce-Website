<?php

$pageHeading = 'Send Message';

require 'Core/Database.php';
$db = new Database();

if(! $_SESSION['loggedin']['id'])
{
    header("Location: /user-login");
    exit();
}

$user_info = $db->query("SELECT * FROM user_info WHERE user_id = :userId", [
    "userId" => $_GET['id']
])->find();

$post = $db->query("SELECT * FROM posts WHERE user_id = :userId",[
    'userId' => $_GET['id']
])->find();

if(isset($_POST['submit']))
{
    
    $db->query("INSERT INTO `messages` ( `sender_id`, `receiver_id`, `message`, `sent_at`, `created_by`, `laptop_name`) VALUES (:senderId, :receiverId, :message, current_timestamp(), :createdBy, :laptopName);",
    [        
        'senderId' => $_SESSION['loggedin']['id'],        
        'receiverId' => $_GET['id'],        
        'message' => $_POST['message'],
        'createdBy' => $_SESSION['loggedin']['id'],
        'laptopName' => $post['laptop_name']    
    ]);

}

$messages = $db->query("SELECT * FROM messages")->fetchAll();


require 'views/messages/message.view.php';
