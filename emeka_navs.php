<?php
require_once "emeka_db.php";

$createtable="create table if not exists emeka_navs(
id int(11) not null auto_increment, primary key(id),
Home varchar(225),
Clothes varchar(225),
Blog varchar(225),
Gallery varchar(225),
About varchar(225) not null,
Contact varchar(225),
My_Profile varchar(225),
Create_Account varchar(225),
Delete_Account varchar(225),
Log_Out varchar(225))";

$sql=$db->query($createtable) or die($db->error);
if(isset($sql)){
    echo "emeka_navs creation successful.<br/>";}
    else{
        echo "emeka_navs was not created.<br/>";}

// $sql = $db->query("ALTER TABLE emeka_navs DROP COLUMN Designer") or die($db->error);
// if($sql)echo "Alter emeka_navs successful";
// $sql = $db->query("ALTER TABLE emeka_navs DROP COLUMN Shop") or die($db->error);
// if($sql)echo "Alter emeka_navs successful";
// $sql = $db->query("ALTER TABLE emeka_navs ADD Clothes varchar(225) after Home") or die($db->error);
// if($sql)echo "Alter emeka_navs successful";

?>