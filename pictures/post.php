<?php 
    if(isset($_GET['source'])){
        $source = $_GET['source'];
    }else{
        $source ='';
    }
    switch($source){
        // case '34';
        // echo "Admin is out of page";
        case 'admin_post_create';
        require_once "admin_post_create.php";
    break;

    case '100';
        echo "oops!You are out of the page....";
    break;

    case '200';
        echo "Error! check back the source";
    break;

    default;
        require_once "view_all_post.php";
    break;
    }
?>