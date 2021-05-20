<?php
require_once "emeka_db.php";
if(isset($_POST['submit'])){
   $Nav_Header_id = $_POST['Nav_Header_id'];
   $Nav_Title = $_POST['Nav_Title'];
   $Nav_Link = $_POST['Nav_Link'];
//    $color = $_POST['Color'];
   
   $sql = "INSERT INTO mynav(id,navtitle,navlink) VALUES('','$Nav_Title','$Nav_Link')";
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
                <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Dashboard </span>>> Nav header </h6>
            </div>
        </div>
    </div>
    <br><br>
    <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif; color:green;"><?php if(isset($msg)) echo $msg; ?></h4>
    <h4 class="text-center" id="onyi-head"><b>Nav header</b></h4>
    <div class="row">
        <div class="col-md-3">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                <div class="form-group">
                <!-- category title -->
                    <label for="number"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Nav-Header-id</label>
                    <input type="number" class="form-control text-center" id="key" name="Nav_Header_id" placeholder="Nav-Header-id" required>    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="Nav_Title"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Nav-Title</label>
                    <input type="text" class="form-control text-center" id="key" name="Nav_Title" placeholder="Nav_Title" required>    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="Nav_Link"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Nav-Link</label>
                    <input type="text" class="form-control text-center" id="key" name="Nav_Link" placeholder="Nav_Link" required>    
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

                    $sql = $db->query("SELECT * FROM mynav ") or die($db->error);
                    $num = $sql->num_rows;
                        while($row = $sql->fetch_assoc()){
                            // print_r($row);
                            $Nav_Header_ids[] = $row ['id'];
                            $Nav_Title1[] = $row ['navtitle'];
                            $Nav_Link1[] = $row ['navlink'];
                            // $color1[] = $row ['Color'];
                        } 
                        if(isset($_GET['update'])){
                            $nav_id = $_GET['update'];
                            $sql = $db->query("SELECT * FROM mynav WHERE id='$nav_id'" ) or die($db->error);

                            if($row = $sql->fetch_assoc()){
                                $id_1 = $row['id'];
                                $Nav_Title2 = $row['navtitle'];
                                $Nav_Link2 = $row['navlink'];
                                // $color2 = $row['Color'];
                            }
                        }
                        if(isset($_POST['update'])){
                            $id = $_POST['pid'];
                            $Nav_Title2 = $_POST['Nav_Title'];
                            $Nav_Link2 = $_POST['Nav_Link'];
                            // $color2 = $_POST['Color'];
                            
                        
                            $sql ="UPDATE mynav SET navtitle='$Nav_Title2', navlink = '$Nav_Link2' WHERE id = '$id' ";
                            
                            $result = $db->query($sql) or die($db->error);
                            if($result){
                                $msg1="Update successful";
                                echo "<script> window.location.href='dashboard.php?s=1'; </script>";
                                echo $msg1;
                             }
                        }
                
                ?>
                <div class="form-group">
                <!-- category title -->
                    <label for="number"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Nav-Header-id</label>
                    <input type="number" class="form-control text-center" id="key" name="Nav-Header-id" value="<?php if(isset($id_1)) echo $id_1;?>" placeholder="Nav-Header-id" required>
                    <input type="hidden" name="pid" value="<?php echo $id_1 ?>">    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="Nav_Title"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Nav-Title</label>
                    <input type="text" class="form-control text-center" id="key" name="Nav_Title" value="<?php if(isset($Nav_Title2)) echo $Nav_Title2;?>" placeholder="Nav-Title" required>    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="Nav-Link" style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Nav-Link</label>
                    <input type="text" class="form-control text-center" id="key" name="Nav_Link" value="<?php if(isset($Nav_Link2)) echo $Nav_Link2;?>" placeholder="Nav-Link" required>    
                </div>
            
                <br>
                <input type="submit" class="btn btn-danger" value="update" name="update" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
            </form>
        </div> 
        
        <div class="col-md-6">
            <table class="table table-striped table-hover table-bordered">
                <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
                    <tr>
                        <th>Nav_Header_id</th>
                        <th>Nav_Title</th>
                        <th>Nav_Link</th>  
                        <!-- <th>Color</th>   -->
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
                            <td><?php echo $Nav_Title1[$i] ?></td>
                            <td><?php echo $Nav_Link1[$i] ?></td>
                            <td> <a href="dashboard.php?update=<?php echo $Nav_Header_ids[$i] ?>">
                                    <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                                </a>
                            </td>
                            <td> <a href="dashboardDELETE.php?delete=<?php echo $Nav_Header_ids[$i] ?>">
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
    


    
            
            
            
             
            
            
    






    



            <!-- <div class="container-fluid" style ="background-color: red; height:100px;">
                <div >
                    <h4 style = "font-size:35px;">DASHBOARD</h4>
                </div>
                
            </div> -->
