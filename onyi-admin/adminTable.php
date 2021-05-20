<?php
require_once "emeka_db.php";
$createtable="create table if not exists admin_Table(
id int(11) not null auto_increment, primary key(id),
Username varchar(50),
Password varchar(225))";
$sql=$db->query($createtable) or die($db->error);
if(isset($sql)){
    echo "admin_Table creation successful.<br/>";}
    else{
        echo "admin_Table was not created.<br/>";}
  
//  $sql = $db->query("ALTER TABLE admin_Table ADD username varchar(30) after lastname") or die($db->error);
// if($sql)echo "Alter admin_Table successful";
// $sql = $db->query("ALTER TABLE admin_Table ADD password varchar(30) after lastname") or die($db->error);
// if($sql)echo "Alter user successful";
?>