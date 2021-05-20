<?php 
require_once "emeka_db.php";
require_once "header.php";

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $sql = $db->query("DELETE FROM shopping_cart_tutorial WHERE id= '$delete_id'") or die($db->error);

    if($sql)header("Location:shopify.php");
} 
if(isset($_POST['Add_to_cart'])){
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $price= $_POST['price'];
    $pix = $_FILES["pix"]["name"];
    $target = "pictures/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);

    $sql = "INSERT INTO shopping_cart_tutorial(id,name,price,image) 
    VALUES 
    ('$id','$product_name','$price','$pix')";

    if (!$db->query($sql)){
        die($db->error);
    }else{
        $msg ="Your form was submitted successfully!";
    }

}
?>
<br><br><br><br><br>
<h4 class="text-center"style="font-family: 'Times New Roman', Times, serif; color:green;"><?php if(isset($msg)) echo $msg; ?></h4>
<div class="container mb-5" style="margin-top:300px;">
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
                    <label for="text">Product Name</label>
                    <input type="text" class="form-control" name="product_name" required>
                    <!-- <input type="hidden" class="form-control" name="hidden-name" value=""> -->
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="text">Price</label>
                    <input type="text" class="form-control" name="price" required>
                    <!-- <input type="hidden" name="hidden-price" class="form-control" value=""> -->
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="text">Quantity</label>
                    <input type="text" name="quantity" class="form-control" value="1">
                    
                    
                    <!-- <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div> -->
                </div>
                <div class="form-group">
                    <label for="file">Feature Images</label>
                    <input type="file" name="pix" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>
                <input type="submit" class="btn btn-secondary" value="Add_to_cart" name="Add_to_cart" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
            </form>
        </div>

        <div class="col-md-3">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                <?php 
                        if(isset($_GET['s'])){
                            echo "Update Succesfull";
                        }
                        $sql = $db->query("SELECT * FROM shopping_cart_tutorial" ) or die($db->error);
                        $num = $sql->num_rows;
                        while($row = $sql->fetch_assoc()){
                                $idsl[] = $row ['id'];
                                $name[] = $row ['name'];
                                $image[] = $row ['image'];
                                $price0[] = $row ['price'];
                        }     
                            
                        if(isset($_GET['Update_post'])){
                            $gid = $_GET['Update_post'];
                            $sql = $db->query("SELECT * FROM shopping_cart_tutorial where id = '$gid'" ) or die($db->error);
                            
                            if($row = $sql->fetch_assoc()){
                                $id_1 = $row['id'];
                                $name1= $row['name'];
                                $pix1= $row['image'];
                                $price1 = $row ['price'];
                            }
                        }

                        if(isset($_POST['Update_post'])){
                            $id = $_POST['pid'];
                            $product_name2 = $_POST['product_name'];
                            $hidden_name = $_POST['hidden_name'];
                            $hidden_price = $_POST['hidden_price'];
                            $price2 = $_POST['price'];
                            $quantity = $_POST['quantity'];
                            $pixx = $_FILES["pix"]["name"];
                            $target = "pictures/".$pix;
                            move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
                            
                            $sql ="UPDATE shopping_cart_tutorial SET name = '$product_name2',price='$price2',image = '$pixx' WHERE id = '$id' ";
                            
                            $result = $db->query($sql) or die($db->error);
                            if($result){
                                $msg1="Update successful";
                                echo "<script> window.location.href='shopify.php?s=1'; </script>";
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
                    <label for="text">Product Name</label>
                    <input type="text" class="form-control" name="product_name" value="<?php if(isset($name1)) echo $name1;?>" required>
                    <input type="hidden" class="form-control" name="hidden_name"value="<?php echo $hidden_name; ?>">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="text">Price</label>
                    <input type="text" class="form-control" name="price" value="<?php if(isset($price1)) echo $price1;?>"required>
                    <input type="hidden" class="form-control" name="hidden_price" value="<?php echo $hidden_price; ?>">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="text">Quantity</label>
                    <input type="text" name="quantity" class="form-control" value="1">
                    
                    
                    <!-- <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div> -->
                </div>
                <div class="form-group">
                    <label for="file">Feature Images</label>
                    <input type="file" name="pix" value="<?php if($pix1) echo $pix1;?>"required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>
                <input type="submit" class="btn btn-secondary" value="Add_to_cart" name="Add_to_cart" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
            </form>
        </div>

        <div class="col-md-6">
            <table class="table table-striped table-hover table-bordered">
                <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
                    <tr>
                        <th>id</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>image</th>
                        <th>Update</th>  
                        <th>Trash</th>  
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>  
                    </tr>
                </thead>
    
                <tbody style="font-family: 'Times New Roman', Times, serif;">
                <!-- loop starts -->
                <?php 
                    for($i=0; $i<$num; $i++){?>
                        <tr>
                            <td><?php echo $i+1 ?></td>
                            <td><?php echo $name[$i] ?></td>
                            <td><?php echo $price0[$i] ?></td>
                            <td><img width='100' height='100' class="img-fluid" src="./pictures/<?php if(isset($image[$i]))echo $image[$i]; ?>" ></td>
                            <td> <a href="shopify.php?Update_post=<?php echo $idsl[$i] ?>">
                                    <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                                </a>
                            </td>
                            <td> <a href="shopify.php?delete=<?php echo $idsl[$i] ?>">
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


