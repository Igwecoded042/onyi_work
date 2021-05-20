<?php 
require_once "emeka_db.php";

$createTable = "create table if not exists category(
    id int(11) not null auto_increment, primary key(id),
    Ankara_Agbada varchar(225),
    Ankara_Agbada_Long_Gowns varchar(225),
    Ankara_Agbada_Short_Gowns varchar(225),
    Ankara_Long_Gowns varchar(225),
    Ankara_Short_Gowns varchar(225),
    Ankara_Crop_Tops varchar(225),
    Ankara_Flare_Short_Gowns varchar(225),
    Ankara_Maxi_Gowns varchar(225),
    Senator_Wears varchar(225),
    Stylish_Ankara_designs varchar(225))";

$sql = $db->query($createTable) or die($db->error);
if(isset($sql)){
    echo "Category Table Created Successfully . </br>";
}else{
    echo "Category Table Creation Table Failed . </br>";
}
?>