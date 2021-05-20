<?php
require_once "emeka_db.php";


// updating data            
$sql = $db->query("SELECT * FROM cat_title" ) or die($db->error);
$num = $sql->num_rows;
while($row = $sql->fetch_assoc()){
    $id[] = $row['id'];
    $ncontent[] = $row['Category_Title'];
    $product[] = $row['Category_Description'];
    $comment[] = $row['Comment'];
    $scategory[] = $row['Category_Type'];
    $srank[] = $row['Rank'];
    $pix[] = $row['Picture_ref'];
}        
if(isset($_GET['did'])){
    $gid = $_GET['did'];
    $sql = $db->query("SELECT * FROM cat_title where id = '$gid'" ) or die($db->error);
    
    if($row = $sql->fetch_assoc()){
        $id_1 = $row['id'];
        $shoe = $row['Category_Title'];
        $shoe1 = $row['Category_Description'];
        $comments = $row['Comment'];
        $shoe2 = $row['Category_Type'];
        $shoe3= $row['Rank'];
        $shoe4= $row['Picture_ref'];
    }
}
if(isset($_POST['submit'])){
    $id = $_POST['pid'];
    $ncontents = $_POST['ncontents'];
    $products = $_POST['products'];
    $comments = $_POST['comments'];
    $scategorys = $_POST['scategorys'];
    $sranks = $_POST['sranks'];
    $pix = $_FILES["pix"]["name"];
    $target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);

    $sql ="UPDATE cat_title SET Category_Title = '$ncontents', Category_Description = '$products',Comment='$comments', 
    Category_Type = '$scategorys',Rank = '$sranks',picture_ref = '$pix' WHERE id = '$id' ";
    
    $result = $db->query($sql) or die($db->error);
    if($result){
        $msg="Update successful";
    }
}
// updating data ends


?>

<div class="container-fluid" style=" width:100%; height:80px;">
<?php require_once "header.php"; ?>
    <h4 style = "display: flex; justify-content:center; align-item:center; font-size:65px; font-family: 'Times New Roman', Times, serif;">Index Admin Update</h4>
        <div class="row">
            <div class="container">
                <div class="row">
                    <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Dashboard </span>>> Index admin Update </h6>
                </div>
            </div>
        </div>

    <form action="" method="post" enctype="multipart/form-data" class="was-validated">
        <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif; color:green;"><?php if(isset($msg)) echo $msg; ?></h4>
        <div class="form-group">
            <!-- category title -->
            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Category Title</label>
            <input type="text" class="form-control" id="name" name="ncontents" value="<?php if(isset($shoe)) echo $shoe;?>" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="Title" required>
            <input type="hidden" name="pid" value="<?php echo $id_1 ?>">
            

            <!-- category discription -->
            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Category Description</label><br>
            <textarea class="form-control" id="name" name="products" value="<?php echo $shoe1; ?>" style="width:100%; font-size:15px;font-family: 'Times New Roman', Times, serif" required></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
            
            <!-- comment -->
            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Comment</label><br>
            <textarea class="form-control" id="name" name="comments" value="<?php echo $comment; ?>" style="width:100%; font-size:15px;font-family: 'Times New Roman', Times, serif" required></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="form-group" >
                    <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Category Type</label>
                    <select class="form-control" name="scategorys" value="<?php echo $shoe2; ?>" style="background-color:gainsboro;font-size:15px;font-family: 'Times New Roman', Times, serif" required >
                        <option>Ankara Agbada</option>
                        <option>Ankara Agbada Long Gowns</option>
                        <option>Ankara Agbada Short Gowns</option>
                        <option>Ankara Long Gowns</option>
                        <option>Ankara Short Gowns</option>
                        <option>Ankara Crop Tops</option>
                        <option>Ankara Flare Short Gowns</option>
                        <option>Ankara Maxi Gowns</option>
                        <option>Senator Wears</option>
                        <option>Stylish Ankara designs</option>
                    </select> 
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Rank</label>
                    <select class="form-control"  name="sranks" value="<?php echo $shoe3; ?>" style="background-color:gainsboro;" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select> 
                </div>
            </div>
            <div class="col-lg-4">
                <label style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Feature Images</label><br>
                    <input type="file" name="pix" value="<?php echo $shoe4; ?>" placeholder="required">     
            </div>
        </div>

        <br><br>
        <input type="submit" class="btn btn-secondary" value="submit" name="submit" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
    </form>   
    <br><br>

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        // deleting data

                        $sql = $db->query("SELECT * FROM cat_title" ) or die($db->error);
                        $num = $sql->num_rows;
                        while($row = $sql->fetch_assoc()){
                            $ids[] = $row['id'];
                            $ncontent[] = $row['Category_Title'];
                            $product[] = $row['Category_Description'];
                            $comment[] = $row['Comment'];
                            $scategory[] = $row['Category_Type'];
                            $srank[] = $row['Rank'];
                            $pic[] = $row['Picture_ref'];
                        }     
                            
                        if(isset($_GET['did'])){
                            $gid = $_GET['did'];
                            $sql = $db->query("DELETE FROM cat_title WHERE id= '$gid'") or die($db->error);
                            if($sql)header("Location:textingadminUpdate.php");
                        }  
                        // deleting ends
                       
                    ?>
                    
                            <!-- table for updating and deleting -->
                    <table class="table table-striped table-hover table-bordered">
                        <thead style="font-family: 'Times New Roman', Times, serif;">
                            <tr class="bg-secondary" style="color:ghostwhite;">
                                <th>id</th>
                                <th>Category Title</th>
                                <th>Category Description</th>
                                <th>Comment</th>
                                <th>Category Type</th>
                                <th>Rank</th>
                                <th>picture_ref</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead> 

                        <!-- Looping Starts -->
                        <?php for($i=0; $i<$num; $i++) {?>
                        <tbody style="font-family: 'Times New Roman', Times, serif;">
                            <tr>
                                <td><?php echo $i+1 ?></td>
                                <td><?php echo $ncontent[$i] ?></td>
                                <td><?php echo $product[$i] ?></td>
                                <td><?php echo $comment[$i] ?></td>
                                <td><?php echo $scategory[$i] ?></td>
                                <td><?php echo $srank[$i] ?></td>
                                <td><?php echo $pic[$i] ?></td>
                                <td> <a href="textingadminUpdate.php?did=<?php echo $id[$i] ?>">
                                        <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                                    </a>
                                </td>
                                <td> <a href="textingadmin.php?did=<?php echo $id[$i] ?>">
                                        <i class="fa fa-trash fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <?php }?>
                        <!-- Looping Ends -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>