<?php 
ob_start();
require_once "emeka_db.php";
require_once "header.php";

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $sql = $db->query("DELETE FROM gallery_slider2 WHERE id= '$delete_id'") or die($db->error);

    if($sql)header("Location:galleryslider2.php");
} 

if(isset($_POST['create-post'])){
    $id = $_POST['id'];
    $p_link = $_POST['p_link'];
    $pix = $_FILES["pix"]["name"];
    $target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);

    $sql = "INSERT INTO gallery_slider2(id,g_image,page_link) 
    VALUES 
    ('$id','$pix','$p_link')";

    if (!$db->query($sql)){
        die($db->error);
    }else{
        $msg ="Your form was submitted successfully!";
    }
}
?>

<div class="container-fluid">
    <h4 style = "display: flex; justify-content:center; align-item:center; font-size:45px; font-family: 'Times New Roman', Times, serif;">Gallery Slider 2</h4>
    <div class="row">
        <div class="container">
            <div class="row">
            <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Gallery Slider 2 </span>>> <span style="color:crimson;"> Gallery Slider </span>>>> Carousel </h6>
            </div>
        </div>
    </div>
    <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif; color:green;"><?php if(isset($msg)) echo $msg; ?></h4>
    
    <div class="row">
        <div class="col-md-3">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                <div class="form-group">
                    <label for="number">id</label>
                    <input type="number" class="form-control" name="id" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="text">Page link</label>
                    <input type="text" class="form-control" name="p_link" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="file">Feature Images</label>
                    <input type="file" name="pix" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>
                <input type="submit" class="btn btn-secondary" value="publish-post" name="create-post" style="font-size:15px;font-family: 'Times New Roman', Times, serif">

            </form>
        </div>
        <div class="col-md-3">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                <?php 
                    if(isset($_GET['s'])){
                        echo "Update Succesfull";
                    }
                    $sql = $db->query("SELECT * FROM gallery_slider2" ) or die($db->error);
                    $num = $sql->num_rows;
                       while($row = $sql->fetch_assoc()){
                            $idsl[] = $row ['id'];
                            $g_image[] = $row ['g_image'];
                            $page_link[] = $row ['page_link'];
                       }     
                          
                    if(isset($_GET['Update_post'])){
                        $gid = $_GET['Update_post'];
                        $sql = $db->query("SELECT * FROM gallery_slider2 where id = '$gid'" ) or die($db->error);
                        
                        if($row = $sql->fetch_assoc()){
                            $id_1 = $row['id'];
                            $pix1= $row['g_image'];
                            $page_link1 = $row ['page_link'];
                        }
                    }

                    if(isset($_POST['Update_post'])){
                        $id = $_POST['pid'];
                        $p_link1 = $_POST['p_link'];
                        $pixx = $_FILES["pix"]["name"];
                        $target = "Htmlfolder/".$pix;
                        move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
                    
                        $sql ="UPDATE gallery_slider2 SET g_image = '$pixx',page_link='$p_link1' WHERE id = '$id' ";
                        
                        $result = $db->query($sql) or die($db->error);
                        if($result){
                            $msg1="Update successful";
                            echo "<script> window.location.href='galleryslider2.php?s=1'; </script>";
                            echo $msg1;
                        }
                    }
                ?>
                <div class="form-group">
                    <label for="number">id</label>
                    <input type="number" class="form-control" name="id" value="<?php if(isset($id_1)) echo $id_1;?>" required>
                    <input type="hidden" name="pid" value="<?php echo $id_1 ?>">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="text">Page Link</label>
                    <input type="text" class="form-control" name="p_link" value="<?php if(isset($page_link1)) echo $page_link1;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="file">Feature Images</label>
                    <input type="file" name="pix" value="<?php if($pix1) echo $pix1;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>
                <input type="submit" class="btn btn-secondary" value="Update_post" name="Update_post" style="font-size:15px;font-family: 'Times New Roman', Times, serif">

            </form>
        </div> 

        <div class="col-md-6">
            <table class="table table-striped table-hover table-bordered">
                <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
                    <tr>
                        <th>id</th>
                        <th>Image Title</th>
                        <th>Page Link</th>
                        <th>Gallery_image</th>  
                        <th>Update</th>  
                        <th>Trash</th>  
                    </tr>
                </thead>
    
                <tbody style="font-family: 'Times New Roman', Times, serif;">
                <!-- loop starts -->
                <?php 
                    for($i=0; $i<$num; $i++){?>
                        <tr>
                            <td><?php echo $i+1 ?></td>
                            <td><?php echo $g_image[$i] ?></td>
                            <td><?php echo $page_link[$i] ?></td>
                            <td><img width='100' height='100' class="img-fluid" src="../pictures/<?php if(isset($g_image[$i]))echo $g_image[$i]; ?>" ></td>
                            <td> <a href="galleryslider2.php?Update_post=<?php echo $idsl[$i] ?>">
                                    <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                                </a>
                            </td>
                            <td> <a href="galleryslider2.php?delete=<?php echo $idsl[$i] ?>">
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