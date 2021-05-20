<?php 
require_once "emeka_db.php";

$createTable = "create table if not exists cat_title(
    id int(11) not null auto_increment, primary key(id),
    Category_Title varchar(225),
    Category_Description varchar(225),
    Comment varchar(225),
    Category_Type varchar(225),
    Rank varchar(225),
    Picture_ref varchar(55))";

$sql = $db->query($createTable) or die($db->error);
if(isset($sql)){
    echo "cat_title Table Created Successfully . </br>";
}else{
    echo "cat_title Table Creation Table Failed . </br>";
}
?>