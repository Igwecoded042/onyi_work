<?php 
require_once "emeka_db.php";
require_once "header.php";

extract($_POST, EXTR_OVERWRITE);
if(isset($_POST['submit'])){
    $pix = $_FILES["pix"]["name"];
    $target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
    
    $sql = " INSERT INTO troubleshoot(id,Category_id,Category_Description,Picture_ref) 
    VALUES ('','$cat_id','$cat_description','$pix') ";
    if (!$db->query($sql)){
        die($db->error);
    }
    else{
        $msg = "Your form has been sucessfully submitted!!!";
    }
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
            <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif;"><?php if(isset($msg)) echo $msg; ?></h4>
                <div class="form-group">
                    <label for="name">Category-id</label>
                    <input type="text" class="form-control" id="name" name="cat_id" placeholder="Category-id" required>

                    <label for="name">Category-Description</label>
                    <textarea class="form-control" name="cat_description" id="name" cols="30" rows="2"placeholder="Category-description" required></textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>

                    <div class="col-lg-4">
                        <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Feature Images</label><br>
                        <input type="file" name="pix"  placeholder="required">     
                    </div>

                    <br><br>
                    <input type="submit" class="btn btn-secondary" value="submit" name="submit" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
                </div>
            </form>
            <br><br>
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif;"><?php if(isset($msg)) echo $msg; ?></h4>
                <!-- updating Starts-->
                <?php 
                    $sql = $db->query("SELECT * FROM troubleshoot" ) or die($db->error);
                    $num = $sql->num_rows;
                       while($row = $sql->fetch_assoc()){
                            $amos[] = $row ['id'];
                            $abel[] = $row ['Category_id'];
                            $akon[] = $row ['Category_Description'];
                            $aron[] = $row ['Picture_ref'];
                       }        
                        if(isset($_GET['update'])){
                            $gid = $_GET['update'];
                            $sql = $db->query("SELECT * FROM troubleshoot where id = '$gid'" ) or die($db->error);
                            
                                if($row = $sql->fetch_assoc()){
                                    $id_1 = $row['id'];
                                    $send1 = $row['Category_id'];
                                    $send2= $row['Category_Description'];
                                    $send3= $row['Picture_ref'];
                                }
                        }
                        if(isset($_POST['update'])){
                            $id = $_POST['pid'];
                            $cat_id = $_POST['cat_id'];
                            $cat_description = $_POST['cat_description'];
                            $pix = $_FILES["pix"]["name"];
                            $target = "Htmlfolder/".$pix;
                            move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
                        
                                $sql ="UPDATE troubleshoot SET Category_id = '$cat_id',Category_Description = '$cat_description',picture_ref = '$pix' WHERE id = '$id' ";
                                
                                $result = $db->query($sql) or die($db->error);
                                if($result){
                                    $msg="Update successful";
                                }
                            }
                            // updating ends      
                ?>
                <div class="form-group">
                    <label for="name">Category-id</label>
                    <input type="text" class="form-control" id="name" name="cat_id" value="<?php if(isset($send1)) echo $send1;?>" placeholder="Category-id" required>
                    <input type="hidden" name="pid" value="<?php echo $id_1 ?>">

                    <label for="name">Category-Description</label>
                    <textarea class="form-control" name="cat_description" id="name" value="<?php if($send2) echo $send2;?>"cols="30" rows="2"placeholder="Category-description" required></textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>

                    <div class="col-lg-4">
                        <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Feature Images</label><br>
                        <input type="file" name="pix" value="<?php if($send3) echo $send3;?>" placeholder="required">     
                    </div>

                    <br><br>
                    <input type="submit" class="btn btn-secondary" value="update" name="update" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <?php 
                extract ($_GET, EXTR_OVERWRITE);

                $sql = $db->query("SELECT * FROM troubleshoot") or die($db->error);
                $num = $sql->num_rows;
                    while($row = $sql->fetch_assoc()){
                        // print_r($row);
                        $ids[] = $row ['id'];
                        $cat_ids[] = $row ['Category_id'];
                        $cat_descriptions[] = $row ['Category_Description'];
                        $pixs[] = $row ['Picture_ref'];
                    
                } 
                //select query using while loop for cat title read in the CRUD

                // deleting starts
                $sql = $db->query("SELECT * FROM troubleshoot") or die($db->error);
                $num = $sql->num_rows;
                    while($row = $sql->fetch_assoc()){
                        // print_r($row);
                        $ids[] = $row ['id'];
                        $cat_ids[] = $row ['Category_id'];
                        $cat_descriptions[] = $row ['Category_Description'];
                        $pixs[] = $row ['Picture_ref'];
                    
                } 
                if(isset($_GET['did'])){
                    $gid = $_GET['did'];
                    $sql = $db->query("DELETE FROM troubleshoot WHERE id= '$gid'") or die($db->error);
                    if($sql){
                       echo "<script> window.location = 'troubleshoot.php' </script>";
                    }
                   } 
                // deleting ends
            ?>

        <table class="table table-striped table-hover table-bordered">
        <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
            <tr>
                <th>id</th>
                <th>Category-id</th>
                <th>Category Description</th>
                <th>Picture Ref</th>
            </tr>
        </thead>
        
        <tbody style="font-family: 'Times New Roman', Times, serif;">
        <!-- loop starts -->
        <?php 
            for($i=0; $i<$num; $i++){?>
                <tr>
                    <td><?php echo $i+1 ?></td>
                    <td><?php echo $cat_ids[$i] ?></td>
                    <td><?php echo $cat_descriptions[$i] ?></td>
                    <td><?php echo $pixs[$i] ?></td>
                    <td> <a href="troubleshoot.php?update=<?php echo $ids[$i] ?>">
                            <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                        </a>
                    </td>
                    <td> <a href="troubleshoot.php?did=<?php echo $ids[$i] ?>">
                            <i class="fa fa-trash fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                        </a>
                    </td>
                </tr>
        <?php }?>
        <!-- loop ends -->
        </tbody>
    </table>
    </div>
    </div>

    
</div>