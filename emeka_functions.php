<?php 
require_once "emeka_db.php";

function create() {
global $db;
    if(isset($_POST['submit'])){
        $user= $_POST['username'];
        $pass =$_POST['password'];
        
$sql = "INSERT INTO home_table(username,password) VALUES ('$user', '$pass')";    
        
if (!$db->query($sql)){
    die($db->error);
}else{
    $msg="Database connection suscessful !!!" ;
    echo "$msg";
    }
  }
}




?>



