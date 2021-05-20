<?php 
require_once "emeka_db.php";

$createTable = "create table if not exists Post_table(
    id int(11) not null auto_increment, primary key(id),
    title varchar(225),
    Post_Category_id varchar(225),
    Post_Author varchar(225),
    Post_tags varchar(225),
    Post_Content varchar(225),
    date varchar(225) not null,
    Comment_count varchar(4),
    picture_ref varchar (55))";

    $sql = $db->query($createTable) or die ($db->error);
    if(isset($sql)){
        echo "Post_table creation was successful . </br>";
    } else{
        echo "Post_table creation was not successful . </br>";
    }
    // $sql = $db->query("ALTER TABLE Post_table ADD Post_Status varchar(225) after Post_Author") or die($db->error);
    // if ($sql) echo "Alter Post_Status table successful!!!";
?>