<?php 
require_once "emeka_db.php";
require_once "header.php";

// deleting starts
if(isset($_GET['did'])){
    $gid = $_GET['did'];
    $sql = $db->query("DELETE FROM image_table WHERE id= '$gid'") or die($db->error);
    if($sql){
        echo "<script> window.location = 'imageCRUD.php' </script>";
    }
} 
// deleting ends
extract($_POST, EXTR_OVERWRITE);
if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $title= $_POST['title'];
    $active= $_POST['active'];
    $color= $_POST['color'];
    $pix = $_FILES["pix"]["name"];
    $target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
    
    $sql = " INSERT INTO image_table(id,Picture_ref,text,active,Color) 
    VALUES ('','$pix','$title','$active','$color') ";
    if (!$db->query($sql)){
        die($db->error);
    }
    else{
        $msg = "Your form has been sucessfully submitted!!!";
    }
}

?>
<div class="container-fluid">
    <br>
    <h4 class="content text-center" style = "font-size:45px; font-family: 'Times New Roman', Times, serif;">Image Category</h4>
    <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Images </span>>> Image Category>>Images </h6>
    <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif; color:green;"><?php if(isset($msg)) echo $msg; ?></h4>

    <div class="row">
        <div class="col-lg-3">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                <div class="form-group">
                    <label for="number" style="font-family: 'Times New Roman', Times, serif">Id</label>
                    <input type="number" class="form-control" id="key" name="id" placeholder="Id" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div> 
                <div class="form-group">
                    <label for="title" style="font-family: 'Times New Roman', Times, serif">Image Title</label>
                    <input type="text" class="form-control text-center" id="key" name="title" placeholder="Title" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div> 

                <div class="form-group">
                    <label for="active" style="font-family: 'Times New Roman', Times, serif">Active</label>
                    <input type="text" class="form-control text-center" id="key" name="active" placeholder="Non" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div> 

                <div class="form-group">
                    <label for="color" style="font-family: 'Times New Roman', Times, serif">Color</label>
                    <input type="text" class="form-control text-center" id="key" name="color" placeholder="id='sly'" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div> 
                <!-- <div class="col-lg-4"> -->

                    <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Feature Images</label><br>
                    <input type="file" name="pix"  placeholder="required">     
                <!-- </div> -->

                <br><br>
                <input type="submit" class="btn btn-secondary" value="submit" name="submit" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
            </form>
        </div>
        <!-- update form starts -->
        <div class="col-lg-3">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                             <!-- updating Starts-->
                <?php 
                    if(isset($_GET['s'])){
                        echo "Update Succesfull";
                    }
                    $sql = $db->query("SELECT * FROM image_table" ) or die($db->error);
                    $num = $sql->num_rows;
                       while($row = $sql->fetch_assoc()){
                            $amos[] = $row ['id'];
                            $aron[] = $row ['Picture_ref'];
                            $akon[] = $row ['text'];
                            $akon1[] = $row ['active'];
                            $akon2[] = $row ['Color'];
                       }     
                          
                    if(isset($_GET['update'])){
                        $gid = $_GET['update'];
                        $sql = $db->query("SELECT * FROM image_table where id = '$gid'" ) or die($db->error);
                        
                        if($row = $sql->fetch_assoc()){
                            $id_1 = $row['id'];
                            $pix1= $row['Picture_ref'];
                            $text1 = $row['text'];
                            $active1 = $row['active'];
                            $color1 = $row['Color'];
                        }
                    }

                    if(isset($_POST['update'])){
                        $id = $_POST['pid'];
                        $text1 = $_POST['title'];
                        $active1 = $_POST['active'];
                        $color1 = $_POST['color'];
                        $pix1 = $_FILES["pix"]["name"];
                        $target = "Htmlfolder/".$pix;
                        move_uploaded_file($_FILES["pix"]["tmp_name"],$target);

                        // image selector
                        // if(empty($pix)){
                        //     $sql= "SELECT * FROM image_table where id = '$gid'";
                        //     $sql = $db->query($sql);
                        //     while($row = $sql->fetch_assoc()){
                        //         $ids[] = $row ['id'];
                        //         $pixs[] = $row ['Picture_ref'];
                        //    }        
                        //  }
                    
                        $sql ="UPDATE image_table SET text='$text1', active='$active1', Color='$color1', Picture_ref = '$pix1' WHERE id = '$id' ";
                        
                        $result = $db->query($sql) or die($db->error);
                        if($result){
                            $msg1="Update successful";
                            echo "<script> window.location.href='imageCRUD.php?s=1'; </script>";
                            echo $msg1;
                        }
                    }
                    // updating ends      
                ?>

                    <div class="form-group">
                        <label for="number" style="font-family: 'Times New Roman', Times, serif">Id</label>
                        <input type="number" class="form-control text-center" id="key" name="id" value="<?php if(isset($id_1)) echo $id_1;?>" placeholder="Id" required>
                        <input type="hidden" name="pid" value="<?php echo $id_1 ?>">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="title" style="font-family: 'Times New Roman', Times, serif">Update Image Title</label>
                        <input type="text" class="form-control text-center" id="key"name="title" value="<?php if(isset($text1)) echo $text1;?>" placeholder="Title" required>
                        
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="active" style="font-family: 'Times New Roman', Times, serif">Update active</label>
                        <input type="text" class="form-control text-center" id="key" name="active" value="<?php if(isset($active1)) echo $active1;?>" placeholder="Active" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>


                    <div class="form-group">
                        <label for="color" style="font-family: 'Times New Roman', Times, serif">Update color</label>
                        <input type="text" class="form-control text-center"id="key" name="color" value="<?php if(isset($color1)) echo $color1;?>" placeholder="id='sly'" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div> 


                    <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Feature Images</label><br>
                    <input type="file" name="pix" value="<?php if($pix1) echo $pix1;?>" placeholder="required">     

                <br><br>
                <input type="submit" class="btn btn-secondary" value="update" name="update" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
            </form>
        </div>
        <div class="col-lg-6">
            <?php 
                if(isset($_GET['source'])){
                    $source = $_GET['source'];
                }else{
                    $source ='';
                }
                switch($source){
                    // case '34';
                    // echo "Admin is out of page";
                    case 'add_post';
                    require_once "add_post.php";
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
        </div>
    </div>

</div>