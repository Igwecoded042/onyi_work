<?php
require_once "emeka_db.php";
$createtable="create table if not exists emeka_Table(
id int(11) not null auto_increment, primary key(id),
Firstname varchar(225),
MiddleName varchar(225),
Lastname varchar(225),
username varchar(225),
password varchar(225),
Date_of_birth varchar(225) not null,
phone varchar(55),
Email varchar(55),
picture_ref varchar(55))";

$sql=$db->query($createtable) or die($db->error);
if(isset($sql)){
    echo "emeka_Table creation successful.<br/>";}
    else{
        echo "emeka_Table was not created.<br/>";}
  
// $sql = $db->query("ALTER TABLE upload DROP COLUMN ncontent") or die($db->error);
//  if($sql)echo "Alter upload successful";
// $sql = $db->query("ALTER TABLE upload DROP COLUMN Product") or die($db->error);
//  if($sql)echo "Alter upload successful";
// $sql = $db->query("ALTER TABLE upload DROP COLUMN scategory") or die($db->error);
//  if($sql)echo "Alter upload successful";
// $sql = $db->query("ALTER TABLE upload DROP COLUMN srank") or die($db->error);
//  if($sql)echo "Alter upload successful";

// $sql = $db->query("ALTER TABLE Category ADD picture_ref varchar(55) after Kitchen_Utensil") or die($db->error);
// if($sql)echo "Alter Category_Table successful";

?>