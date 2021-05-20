<?php
require_once "emeka_db.php";

$createtable="create table if not exists user(
id int(11) not null auto_increment, primary key(id),
firstname varchar(225),
middlename varchar(225),
lastname varchar(225),
email varchar(225),
username varchar(55),
password varchar(225),
date varchar(225),
phone varchar(55),
male varchar(225),
female varchar(225)nut null,
picture_ref varchar(55))";

$sql=$db->query($createtable) or die($db->error);
if(isset($sql)){
    echo "user table creation successful.<br/>";}
    else{
        echo "user table was not created.<br/>";}

// $sql = $db->query("ALTER TABLE emeka_navs DROP COLUMN Designer") or die($db->error);
// if($sql)echo "Alter emeka_navs successful";
// $sql = $db->query("ALTER TABLE emeka_navs DROP COLUMN Shop") or die($db->error);
// if($sql)echo "Alter emeka_navs successful";
// $sql = $db->query("ALTER TABLE emeka_navs ADD Clothes varchar(225) after Home") or die($db->error);
// if($sql)echo "Alter emeka_navs successful";

?>