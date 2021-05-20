<?php
require_once "emeka_db.php";


if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $sql = $db->query("DELETE FROM navtitle2 WHERE id= '$delete_id'") or die($db->error);

    if($sql)header("Location:dashboardNAV.php");
} 
// deleting ends

// insert starts
if(isset($_POST['submit'])){
   $side_id = $_POST['id'];
   $sideNav = $_POST['sideNav'];
   $side_title = $_POST['side_title'];
//    $color = $_POST['Color'];
   
   $sql = "INSERT INTO navtitle2(id,sideNav,side_title) VALUES('','$sideNav','$side_title')";
   if(!$db->query($sql)){
       die($db->error);
   }else{
       $msg = "Form Submitted Successfuly!!!";
   }
}
// insert ends
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
    <h4 class="text-center" id="onyi-head"><b>Nav header</b></h4>
    <div class="row">
        <div class="col-md-3">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                <div class="form-group">
                <!-- category title -->
                    <label for="number"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Side_id</label>
                    <input type="number" class="form-control text-center" id="key" name="id" placeholder="Side_id" required>    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="sideNav"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">SideNav</label>
                    <input type="text" class="form-control text-center" id="key" name="sideNav" placeholder="SideNav" required>    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="side_title"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Side-title</label>
                    <input type="text" class="form-control text-center" id="key" name="side_title" placeholder="Side_title" required>    
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
                            $idss[] = $row ['id'];
                            $SideNav1[] = $row ['sideNav'];
                            $Side_title1[] = $row ['side_title'];
                            // $color1[] = $row ['Color'];
                        } 
                        if(isset($_GET['update'])){
                            $side_Nav_id = $_GET['update'];
                            $sql = $db->query("SELECT * FROM navtitle2 WHERE id='$side_Nav_id'" ) or die($db->error);

                            if($row = $sql->fetch_assoc()){
                                $id_1 = $row['id'];
                                $sideNav2 = $row['sideNav'];
                                $side_title2 = $row['side_title'];
                                // $color2 = $row['Color'];
                            }
                        }
                        if(isset($_POST['update'])){
                            $id = $_POST['pid'];
                            $sideNav2 = $_POST['sideNav'];
                            $side_title2 = $_POST['side_title'];
                            // $color2 = $_POST['Color'];
                            
                        
                            $sql ="UPDATE navtitle2 SET sideNav='$sideNav2', side_title = '$side_title2' WHERE id = '$id' ";
                            
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
                    <label for="number"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Side_id</label>
                    <input type="number" class="form-control text-center" id="key" name="id" value="<?php if(isset($id_1)) echo $id_1;?>" placeholder="Side_id" required>
                    <input type="hidden" name="pid" value="<?php echo $id_1 ?>">    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="sideNav"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">SideNav</label>
                    <input type="text" class="form-control text-center" id="key" name="sideNav" value="<?php if(isset($sideNav2)) echo $sideNav2;?>" placeholder="SideNav" required>    
                </div>

                <div class="form-group">
                <!-- category title -->
                    <label for="side_title" style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Side-title</label>
                    <input type="text" class="form-control text-center" id="key" name="side_title" value="<?php if(isset($side_title2)) echo $side_title2;?>" placeholder="Side_title" required>    
                </div>
            
                <br>
                <input type="submit" class="btn btn-danger" value="update" name="update" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
            </form>
        </div> 
        
        <div class="col-md-6">
            <table class="table table-striped table-hover table-bordered">
                <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
                    <tr>
                        <th>Side_id</th>
                        <th>SideNav</th>
                        <th>Side_title</th>  
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
                            <td><?php echo $SideNav1[$i] ?></td>
                            <td><?php echo $Side_title1[$i] ?></td>
                            <td> <a href="dashboardNAV.php?update=<?php echo $idss[$i] ?>">
                                    <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                                </a>
                            </td>
                            <td> <a href="dashboardNAV.php?delete=<?php echo $idss[$i] ?>">
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
