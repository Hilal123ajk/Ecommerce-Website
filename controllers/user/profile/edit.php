<?php


require base_path('/Core/Database.php');

  $db = new Database();
  
  $user_id = $_GET['id'];
  
  $user = $db->query("SELECT * FROM users WHERE id = :id", [
      "id" => $user_id
  ])->find();

  require 'views/user/profile/edit.view.php';
