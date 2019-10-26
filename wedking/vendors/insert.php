<?php

//insert.php


include 'include/controller.php';
$session_username = $_SESSION['user_name'];
$session_role = $_SESSION['role'];
if(empty($_SESSION['user_name'])){
    header("location:login.php");
}

if (isset($_SESSION['id'])) {
      $login_id = $_SESSION['id'];
      }

if(count($_FILES["image"]["tmp_name"]) > 0)
{
 for($count = 0; $count < count($_FILES["image"]["tmp_name"]); $count++)
 {
  $image_file = addslashes(file_get_contents($_FILES["image"]["tmp_name"][$count]));
  $query = "INSERT INTO images (venderID, image) VALUES ('$login_id','$image_file')";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}


?>