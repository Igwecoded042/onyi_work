<?php 
function insert_data(){
    global $db;

    extract ($_POST, EXTR_OVERWRITE);
    //creating data or inserting data in database
    if(isset($_POST["submit"])){
        $pix = $_FILES["pix"]["name"];
        $target = "Htmlfolder/".$pix;
        move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
        

    $sql = "INSERT INTO cat_title (id,Category_Title,Category_Description,Comment,Category_Type,Rank,Picture_ref)
    VALUES 
        ('','$ncontent','$product','$comment','$scategory','$srank','$pix')";
        if (!$db->query($sql)){
            die($db->error);
        }else{
            $msg = "Your form has been sucessfully submitted!!!";
        }
    }
}

function update_query(){
    global $db;
    $sql = $db->query("SELECT * FROM cat_title" ) or die($db->error);
    $num = $sql->num_rows;
    while($row = $sql->fetch_assoc()){
        $amos[] = $row['id'];
        $alex[] = $row['Category_Title'];
        $aron[] = $row['Category_Description'];
        $abel[] = $row['Comment'];
        $akon[] = $row['Category_Type'];
        $ada[] = $row['Rank'];
        $aka[] = $row['Picture_ref'];
    }     
}

?>