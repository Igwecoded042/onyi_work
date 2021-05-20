<?php 
require_once "emeka_db.php";

$createTable = "create table if not exists image_table(
    id int(11) not null auto_increment, primary key(id),
    Picture_ref varchar(1000))";

    $sql = $db->query($createTable) or die($db->error);

    if(isset($sql)){
        echo "image table created successfully";
    } else {
        echo 
        "image table not created successfully";
    }



?>
