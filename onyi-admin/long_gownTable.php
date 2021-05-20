<?php 
ob_start();
require_once "emeka_db.php";
require_once "header.php";

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $sql = $db->query("DELETE FROM long_gown_table WHERE id= '$delete_id'") or die($db->error);

    if($sql)header("Location:long_gownTable.php");
} 

if(isset($_POST['create-post'])){
    $id = $_POST['id'];
    $image_title = $_POST['image_title'];
    $Wishlist = $_POST['Wishlist'];
    $page = $_POST['page_link'];
    $pix = $_FILES["pix"]["name"];
    $target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);

    $sql = "INSERT INTO long_gown_table(id,pic_title,Add_to_wishlist,picture_ref,page_link) 
    VALUES 
    ('$id','$image_title','$Wishlist','$pix','$page')";

    if (!$db->query($sql)){
        die($db->error);
    }else{
        $msg ="Your form was submitted successfully!";
    }
}
?>

<div class="container-fluid">
    <h4 style = "display: flex; justify-content:center; align-item:center; font-size:45px; font-family: 'Times New Roman', Times, serif;">Long Ankara Gown</h4>
    <div class="row">
        <div class="container">
            <div class="row">
            <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Long Gown </span>>> <span style="color:crimson;"> Gallery Section </span>>>> Images </h6>
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
                    <label for="text">Images Title</label>
                    <input type="text" class="form-control" name="image_title" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="text">Add to Wishlist</label>
                    <input type="text" class="form-control" name="Wishlist" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="text">Page Link</label>
                    <input type="text" class="form-control" name="page_link" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>


                <div class="form-group">
                    <label for="file">picture_ref</label>
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
                    $sql = $db->query("SELECT * FROM long_gown_table" ) or die($db->error);
                    $num = $sql->num_rows;
                       while($row = $sql->fetch_assoc()){
                            $idsl[] = $row ['id'];
                            $pic_title[] = $row ['pic_title'];
                            $Add_to_wishlist[] = $row ['Add_to_wishlist'];
                            $picture_ref[] = $row ['picture_ref'];
                            $page_link[] = $row ['page_link'];
                       }     
                          
                    if(isset($_GET['Update_post'])){
                        $gid = $_GET['Update_post'];
                        $sql = $db->query("SELECT * FROM long_gown_table where id = '$gid'" ) or die($db->error);
                        
                        if($row = $sql->fetch_assoc()){
                            $id_1 = $row['id'];
                            $pic_title1 = $row ['pic_title'];
                            $Add_to_wishlist1 = $row ['Add_to_wishlist'];
                            $picture_ref1 = $row ['picture_ref'];
                            $page_link1 = $row ['page_link'];
                        }
                    }

                    if(isset($_POST['Update_post'])){
                        $id = $_POST['pid'];
                        $image_title2 = $_POST ['image_title'];
                        $Wishlist = $_POST ['Wishlist'];
                        $page1 = $_POST ['page_link'];
                        $pixx = $_FILES["pix"]["name"];
                        $target = "Htmlfolder/".$pix;
                        move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
                    
                        $sql ="UPDATE long_gown_table SET pic_title = '$image_title2',Add_to_wishlist='$Wishlist',picture_ref='$pixx',page_link='$page1'  WHERE id = '$id' ";
                        
                        $result = $db->query($sql) or die($db->error);
                        if($result){
                            $msg1="Update successful";
                            echo "<script> window.location.href='long_gownTable.php?s=1'; </script>";
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
                    <label for="text">Images Title</label>
                    <input type="text" class="form-control" name="image_title" value="<?php if(isset($pic_title1)) echo $pic_title1;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="text">Add to Wishlist</label>
                    <input type="text" class="form-control" name="Wishlist" value="<?php if(isset($Add_to_wishlist1)) echo $Add_to_wishlist1;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="text">Page Link</label>
                    <input type="text" class="form-control" name="page_link" value="<?php if(isset($page_link1)) echo $page_link1;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>
                
                <div class="form-group">
                    <label for="file">Feature Images</label>
                    <input type="file" name="pix" value="<?php if($picture_ref1) echo $picture_ref1;?>" required>
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
                        <th>Add to Wishlist</th>
                        <th>Page Link</th>  
                        <th>Picture Ref</th>    
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
                            <td><?php echo $pic_title[$i] ?></td>
                            <td><?php echo $Add_to_wishlist[$i] ?></td>
                            <td><?php echo $page_link[$i] ?></td>
                            <td><img width='100' height='100' class="img-fluid" src="../pictures/<?php if(isset($picture_ref[$i]))echo $picture_ref[$i]; ?>" ></td>
                            <td> <a href="long_gownTable.php?Update_post=<?php echo $idsl[$i] ?>">
                                    <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                                </a>
                            </td>
                            <td> <a href="long_gownTable.php?delete=<?php echo $idsl[$i] ?>">
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