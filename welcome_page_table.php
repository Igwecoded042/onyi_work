<?php 
require_once "emeka_db.php";
$createTable ="create table if not exists welcome_table(
    id int(33) not null auto_increment, primary key(id),
    Welcome varchar(225),
    Cashback varchar(225),
    Shop varchar(225),
    unbeatable varchar(225),
    Best_Deals varchar(225))";

    $sql = $db->query($createTable) or die($db->error);
    if(isset($sql)){
        echo "Welcome Table created successfully";
    }else{
        echo "welcome table not created successfully";
    }
?>