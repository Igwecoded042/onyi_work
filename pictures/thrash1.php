<?php
require_once "emeka_db.php";
if(isset($_POST['submit'])){
   $sideNav_id = $_POST['sideNav_id'];
   $sideNav = $_POST['sideNav'];
   $side_title = $_POST['side_title'];
   
   $sql = "INSERT INTO navtitle2(id,sideNav,side_title) VALUES('','$sideNav','$side_title')";
   if(!$db->query($sql)){
       die($db->error);
   }else{
       $msg = "Form Submitted Successfuly!!!";
   }
}
?>
<?php require_once "header.php"; ?>
<div class="container-fluid" style=" width:100%; height:80px;">
    <h4 style = "display: flex; justify-content:center; align-item:center; font-size:65px; font-family: 'Times New Roman', Times, serif;">Dashboard</h4>
    <div class="row">
        <div class="container">
            <div class="row">
                <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Dashboard </span>>> <span style="color:crimson;"> Nav header </span>>>> Nav Header Dropdown </h6>
            </div>
        </div>
    </div>
    <br><br>
    <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif; color:green;"><?php if(isset($msg)) echo $msg; ?></h4>
    <h4 class="text-center" id="onyi-head"><b>Nav header Dropdown</b></h4>
    <div class="row">
        <div class="col-md-3">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                <div class="form-group">
                <!-- category title -->
                    <label for="number"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">SideNav_id</label>
                    <input type="number" class="form-control text-center" id="key" name="sideNav_id" placeholder="sideNav_id" required>    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="sideNav"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">SideNav</label>
                    <input type="text" class="form-control text-center" id="key" name="sideNav" placeholder="sideNav" required>    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="side_title"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Side_title</label>
                    <input type="text" class="form-control text-center" id="key" name="side_title" placeholder="Nav_Link" required>    
                </div>
            
                <br>
                <input type="submit" class="btn btn-danger" value="submit" name="submit" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
            </form>
        </div>
        <div class="col-md-3">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                <!-- updating form -->
                <?php 

                if(isset($_GET['s'])){
                    echo "Update Succesfull";
                }
                    extract ($_GET, EXTR_OVERWRITE);

                    $sql = $db->query("SELECT * FROM navtitle2 ") or die($db->error);
                    $num = $sql->num_rows;
                        while($row = $sql->fetch_assoc()){
                            // print_r($row);
                            $SideNav_ids[] = $row ['id'];
                            $SideNav1[] = $row ['sideNav'];
                            $Side_title1[] = $row ['side_title'];
                        } 
                        if(isset($_GET['update'])){
                            $sideNav_id = $_GET['update'];
                            $sql = $db->query("SELECT * FROM navtitle2 WHERE id='$sideNav_id'") or die($db->error);

                            if($row = $sql->fetch_assoc()){
                                $id_1 = $row['id'];
                                $sideNav2 = $row['sideNav'];
                                $side_title2 = $row['side_title'];
                            }
                        }
                        if(isset($_POST['update'])){
                            $id = $_POST['pid'];
                            $sideNav3 = $_POST['sideNav'];
                            $side_title3 = $_POST['side_title'];
                            
                        
                            $sql ="UPDATE navtitle2 SET sideNav='$sideNav3', side_title = '$side_title3' WHERE id = '$id' ";
                            
                            $result = $db->query($sql) or die($db->error);
                            if($result){
                                $msg1="Update successful";
                                echo "<script> window.location.href='dashboardNAV.php?s=1'; </script>";
                                echo $msg1;
                            }
                        }
                
                ?>
                <div class="form-group">
                <!-- category title -->
                    <label for="number"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">SideNav_id</label>
                    <input type="number" class="form-control text-center" id="key" name="sideNav_id" value="<?php if(isset($id_1)) echo $id_1;?>" placeholder="SideNav_id" required>
                    <input type="hidden" name="pid" value="<?php echo $id_1 ?>">    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="sideNav"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">SideNav</label>
                    <input type="text" class="form-control text-center" id="key" name="sideNav" value="<?php if(isset($sideNav2)) echo $sideNav2;?>" placeholder="SideNav" required>    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="side_title" style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Side_title</label>
                    <input type="text" class="form-control text-center" id="key" name="Side_title" value="<?php if(isset($side_title2)) echo $side_title2;?>" placeholder="Side_title" required>    
                </div>
            
                <br>
                <input type="submit" class="btn btn-danger" value="update" name="update" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
            </form>
        </div> 
        
        <div class="col-md-6">
            <table class="table table-striped table-hover table-bordered">
                <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
                    <tr>
                        <th>SideNav_id</th>
                        <th>SideNav</th>
                        <th>Side_title</th>  
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
                            <td><?php echo $SideNav1[$i] ?></td>
                            <td><?php echo $Side_title1[$i] ?></td>
                            <td> <a href="dashboardNAV.php?update=<?php echo $SideNav_ids[$i] ?>">
                                    <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                                </a>
                            </td>
                            <td> <a href="dashboardNAV.php?delete=<?php echo $SideNav_ids[$i] ?>">
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
            
            <!-- stylish ankara and multiple ankara page -->

            <h5 class="text-center" style="font-size:15px;font-family: 'Times New Roman', Times, serif"><?php echo $Sub_headers4; ?></h5>
    <h5 class="text-center" id="head_title"><?php echo $headers4?></h5>

    <?php $sql = $db->query("SELECT * FROM stylish_table") or die ($db->error);?>
    <section class="big">
        <div class="row">
            <?php while($row = $sql->fetch_assoc()): ?>
            <div class="col-md-12 mb-5">
                <a href="<?php echo $row['content_link']; ?>"><img src="pictures/<?php echo $row['stylish_meme']; ?>"class="img img-fluid ankara"style="width:100%;" alt=""></a>
                <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                    Shop Now
                </section>
            </div>
            <?php endwhile ?>
            <?php}?>
        </div>
    </section>
    <div class="bigg">
        <?php $sql = $db->query("SELECT * FROM multiple_ankara") or die ($db->error);?>
        <div class="row">
            <?php while($row = $sql->fetch_assoc()): ?>
            <div class="col-md-6 mb-4">
                <a href="<?php echo $row['photo_link']; ?>"><img src="pictures/<?php echo $row['photos']; ?>"class="img img-fluid ankara"style="width:100%;" alt=""></a>
                <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                    Shop Now
                </section>
                <br>
                <!-- <a href="stylish2.php"><img src="pictures/green26.jpg"class="img img-fluid ankara"style="width:100%;" alt=""></a>
                <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                    Shop Now
                </section> -->
            </div>
            <?php endwhile ?>
            <?php}?>
            <!-- <div class="col-md-3">
                <a href="stylish3.php"><img src="pictures/green27.jpg"class="img img-fluid ankara"style="width:100%;" alt=""></a>
                <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                    Shop Now
                </section>
                <br>
                <a href="stylish4.php"><img src="pictures/green33.jpg"class="img img-fluid ankara"style="width:100%;" alt=""></a>
                <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                    Shop Now
                </section>
            </div> -->
        </div>
    </div>
    
</div>
    


<span data-add-to-cart-text="">
              
              Add to Cart
            
          </span>
      


    
            
            
            
             
            
            
    






    



            <!-- <div class="container-fluid" style ="background-color: red; height:100px;">
                <div >
                    <h4 style = "font-size:35px;">DASHBOARD</h4>
                </div>
                
            </div> -->
