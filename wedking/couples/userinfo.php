<?php

require_once ("config.php");
if(isset($_GET["username"]))
{
    $username = $_GET["username"];
    $stmt = $connection->prepare("SELECT * FROM userxmeta WHERE username = :username ");
    $stmt->bindParam(":username",$username,PDO::PARAM_STR);
    $stmt->execute();

    if($stmt->rowCount()>0)
    {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        header('Content-type: application/json');
        echo json_encode($row);
    }
}
?>