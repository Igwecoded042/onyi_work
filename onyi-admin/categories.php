<?php 
require_once "emeka_db.php";
require_once "header.php";
require_once "function.php";
ob_start();

insert_data();
 //creating data or inserting data in database end
           
?>

<div class="container-fluid" style=" width:100%; height:80px;">
    <h4 style = "display: flex; justify-content:center; align-item:center; font-size:65px; font-family: 'Times New Roman', Times, serif;">Admin Index</h4>

    <!-- Page Location         -->
    <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Admin Index </span>>> Admin </h6>

    <!-- div control -->
    <div class="row">
        <div class="col-lg-6">
        <!-- form creation -->
            <?php require_once "formCreate.php"; ?>
        </div>

        <div class="col-lg-6">
            <?php 
                // updating data            
                update_query();   
                if(isset($_GET['update'])){
                    $gid = $_GET['update'];
                    $sql = $db->query("SELECT * FROM cat_title where id = '$gid'" ) or die($db->error);
                    
                    if($row = $sql->fetch_assoc()){
                        $id_1 = $row['id'];
                        $shoe = $row['Category_Title'];
                        $shoe1 = $row['Category_Description'];
                        $comment = $row['Comment'];
                        $shoe2 = $row['Category_Type'];
                        $shoe3= $row['Rank'];
                        $shoe4= $row['Picture_ref'];
                    }
                }
                if(isset($_POST['update'])){
                    $id = $_POST['pid'];
                    $ncontent = $_POST['ncontent'];
                    $product = $_POST['product'];
                    $comment = $_POST['comment'];
                    $scategory = $_POST['scategory'];
                    $srank = $_POST['srank'];
                    $pix = $_FILES["pix"]["name"];
                    $target = "Htmlfolder/".$pix;
                    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);

                    $sql ="UPDATE cat_title SET Category_Title = '$ncontent', Category_Description = '$product',Comment='$comment', 
                    Category_Type = '$scategory',Rank = '$srank',picture_ref = '$pix' WHERE id = '$id' ";
                    
                    $result = $db->query($sql) or die($db->error);
                    if($result){
                        $msg="Update successful";
                    }
                }
                // updating data ends
            ?>
            
            <!-- form update -->
            <?php require_once "formUpdate.php"; ?>
        </div>
    </div>
    <br><br>
    <!-- Page Table -->
    <div class="col-lg-12">
        <?php 
            extract ($_GET, EXTR_OVERWRITE);

            $sql = $db->query("SELECT * FROM cat_title ") or die($db->error);
            $num = $sql->num_rows;
                while($row = $sql->fetch_assoc()){
                    // print_r($row);
                    $ids[] = $row ['id'];
                    $ncontents[] = $row ['Category_Title'];
                    $products[] = $row ['Category_Description'];
                    $comments[] = $row ['Comment'];
                    $scategorys[] = $row ['Category_Type'];
                    $sranks[] = $row ['Rank'];
                    $pixs[] = $row ['Picture_ref'];
                
            } 
            //select query using while loop for cat title read in the CRUD

            // deleting data

            $sql = $db->query("SELECT * FROM cat_title" ) or die($db->error);
            $num = $sql->num_rows;
            while($row = $sql->fetch_assoc()){
                $ids[] = $row['id'];
                $ncontents[] = $row['Category_Title'];
                $products[] = $row['Category_Description'];
                $comments[] = $row['Comment'];
                $scategorys[] = $row['Category_Type'];
                $sranks[] = $row['Rank'];
                $pixs[] = $row['Picture_ref'];
            }     
                
            if(isset($_GET['did'])){
                $gid = $_GET['did'];
                $sql = $db->query("DELETE FROM cat_title WHERE id= '$gid'") or die($db->error);
                // if($sql) {
                //     echo "<script>window.location='indexAdmin.php'</script>";
                // }
                if($sql)header("Location:indexAdmin.php");
            }  
            // deleting ends
        ?>

        <!-- table for updating and deleting -->
        <?php require_once "formTable.php"; ?>
        <!-- Looping Ends -->
    </div>

</div>