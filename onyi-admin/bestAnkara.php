<?php 
ob_start();
require_once "emeka_db.php";
require_once "header.php";

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $sql = $db->query("DELETE FROM best_ankara_designs WHERE id= '$delete_id'") or die($db->error);

    if($sql)header("Location:bestAnkara.php");
} 

if(isset($_POST['create-post'])){
    $id = $_POST['id'];
    $pix = $_FILES["pix"]["name"];
    $target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);

    $sql = "INSERT INTO best_ankara_designs(id,best_ankara) 
    VALUES 
    ('$id','$pix')";

    if (!$db->query($sql)){
        die($db->error);
    }else{
        $msg ="Your form was submitted successfully!";
    }
}
?>

<div class="container-fluid">
    <h4 style = "display: flex; justify-content:center; align-item:center; font-size:45px; font-family: 'Times New Roman', Times, serif;">Best Ankara Designs </h4>
    <div class="row">
        <div class="container">
            <div class="row">
            <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Best Ankara Designs </span>>> <span style="color:crimson;"> Image Slider </span>>>> Best Ankara images </h6>
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
                    $sql = $db->query("SELECT * FROM best_ankara_designs" ) or die($db->error);
                    $num = $sql->num_rows;
                       while($row = $sql->fetch_assoc()){
                            $idsl[] = $row ['id'];
                            $slider_image[] = $row ['best_ankara'];
                       }     
                          
                    if(isset($_GET['Update_post'])){
                        $gid = $_GET['Update_post'];
                        $sql = $db->query("SELECT * FROM best_ankara_designs where id = '$gid'" ) or die($db->error);
                        
                        if($row = $sql->fetch_assoc()){
                            $id_1 = $row['id'];
                            $pix1= $row['best_ankara'];
                        }
                    }

                    if(isset($_POST['Update_post'])){
                        $id = $row['id'];
                        $pixx = $_FILES["pix"]["name"];
                        $target = "Htmlfolder/".$pix;
                        move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
                    
                        $sql ="UPDATE best_ankara_designs SET best_ankara = '$pixx' WHERE id = '$id' ";
                        
                        $result = $db->query($sql) or die($db->error);
                        if($result){
                            $msg1="Update successful";
                            echo "<script> window.location.href='bestAnkara.php?s=1'; </script>";
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
                        <th>Title</th>
                        <th>Slider_image</th>  
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
                            <td><?php echo $slider_image[$i] ?></td>
                            <td><img width='100' height='100' class="img-fluid" src="../pictures/<?php if(isset($slider_image[$i]))echo $slider_image[$i]; ?>" ></td>
                            <td> <a href="bestAnkara.php?Update_post=<?php echo $idsl[$i] ?>">
                                    <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                                </a>
                            </td>
                            <td> <a href="bestAnkara.php?delete=<?php echo $idsl[$i] ?>">
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