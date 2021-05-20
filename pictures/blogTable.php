<?php 
require_once "emeka_db.php";
$createTable ="create table if not exists blog(
    id int(33) not null auto_increment, primary key(id),
    blog_category_id varchar(33),
    blog_title varchar(225),
    blog_author varchar(225),
    blog_date date,
    blog_content text(225),
    blog_image varchar(225),
    blog_tags varchar(225),
    blog_comment_count int(225),
    blog_status varchar(225))";

    $sql = $db->query($createTable) or die($db->error);
    if(isset($sql)){
        echo "Blog Table created successfully";
    }else{
        echo "Blog Table not created successfully";
    }
    $sql = $db->query("ALTER TABLE blog ADD COLUMN blog_title2 varchar(225) after blog_title") or die($db->error);
    if($sql)echo "Alter blog successful";
?>