<?php 
require_once "emeka_db.php";

$createTable = "create table if not exists troubleshoot(
    id int(11) not null auto_increment, primary key(id),
    Category_id varchar(22),
    Category_Description varchar(222),
    Picture_ref varchar(55))";
    $sql = $db->query($createTable) or die($db->error);
    if(isset($sql)){
        echo "table created successfully.</br>";
    } else{
        echo "table not created successfully.</br>";
    }
    // $sql = $db->query("ALTER TABLE troubleshoot ADD Picture_ref varchar(55) after Category_Description") or die($db->error);
    // if($sql)echo "Alter troubleshoot successful";
?>