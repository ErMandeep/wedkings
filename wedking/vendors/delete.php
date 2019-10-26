<?php
include 'include/controller.php';
$music_number = $_POST['id'];
// echo '$music_number';
$qry = "DELETE FROM images WHERE id ='$music_number'";
$result=mysqli_query($connection ,$qry);

?>

