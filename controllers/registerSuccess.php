<?php

require 'views/registerSuccess.view.php';

require 'Database.php';

if(isset($_POST['submit'])){

    // If submit button is clicked create database object 
    
    $db = new Database();

    $user_name = $_POST['userName'];
    $user_email = $_POST['userEmail'];
    $user_password = $_POST['userPassword'];

    $query = "INSERT INTO `users` (`user_name`, `user_email`, `user_password`) VALUES ('{$user_name}', '{$user_email}', '{$user_password}');";

    $db->registerUserQuery($query);
}