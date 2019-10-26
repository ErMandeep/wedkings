<?php 
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "project_new";

foreach ($db as $key => $values ){
    
    define(strtoupper($key), $values);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//if($connection){
//    echo "we are connected";
//}


$connect = new PDO("mysql:host=localhost;dbname=project_new", "root", ""); // PDO connection



?>