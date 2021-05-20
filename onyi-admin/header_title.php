<?php 
ob_start();
require_once "emeka_db.php";
require_once "header.php";

if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $sql = $db->query("DELETE FROM header_title WHERE id= '$delete_id'") or die($db->error);

    if($sql)header("Location:header_title.php");
} 

if(isset($_POST['create-post'])){
    $id = $_POST['id'];
    // $pix = $_POST['pix'];
    $Sub_header = $_POST['Sub_header'];
    $header = $_POST['header'];
    // $pix = $_POST['pix'];
    $Sub_header1 = $_POST['Sub_header1'];
    $header1 = $_POST['header1'];
    // $pix = $_POST['pix'];
    $Sub_header2 = $_POST['Sub_header2'];
    $header2 = $_POST['header2'];
    // $pix = $_POST['pix'];
    $Sub_header3 = $_POST['Sub_header3'];
    $header3 = $_POST['header3'];
    // $pix = $_POST['pix'];
    $Sub_header4 = $_POST['Sub_header4'];
    $header4 = $_POST['header4'];
    // $pix = $_POST['pix'];
    $Sub_header5 = $_POST['Sub_header5'];
    $header5 = $_POST['header5'];

    $sql = "INSERT INTO header_title(id,Sub_header,header,Sub_header1,header1,Sub_header2,header2,Sub_header3,header3,
    Sub_header4,header4,Sub_header5,header5) 
    VALUES 
    ('$id','$Sub_header','$header','$Sub_header1','$header1','$Sub_header2','$header2','$Sub_header3','$header3',
    '$Sub_header4','$header4','$Sub_header5','$header5')";

    if (!$db->query($sql)){
        die($db->error);
    }else{
        $msg ="Your form was submitted successfully!";
    }
}

?>

<div class="container-fluid">
    <h4 style = "display: flex; justify-content:center; align-item:center; font-size:50px; font-family: 'Times New Roman', Times, serif;">Page Header</h4>
    <div class="row">
        <div class="container">
            <div class="row">
            <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Page Header </span>>> <span style="color:crimson;"> Sub Header </span>>>> Header Title </h6>
            </div>
        </div>
    </div>
    <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif; color:green;"><?php if(isset($msg)) echo $msg; ?></h4>
    <form action="" method="post" enctype="multipart/form-data" class="was-validated">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="number">id</label>
                    <input type="number" class="form-control" name="id" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Sub_header">Sub_header</label>
                    <input type="text" class="form-control" name="Sub_header" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="header">Header</label>
                    <input type="text" class="form-control" name="header" required> 
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>   
                </div>

                <div class="form-group">
                    <label for="Sub_header1">Sub_header1</label>
                    <input type="text"class="form-control"  name="Sub_header1" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="header1">Header1</label>
                    <input type="text" class="form-control" name="header1" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="Sub_header2">Sub_header2</label>
                    <input type="text" class="form-control" name="Sub_header2" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="header2">Header2</label>
                    <input type="text" class="form-control" name="header2" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Sub_header3">Sub_header3</label>
                    <input type="text" class="form-control" name="Sub_header3" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="header3">Header3</label>
                    <input type="text" class="form-control" name="header3" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="col-md-4">        
                <div class="form-group">
                    <label for="Sub_header4">Sub_header4</label>
                    <input type="text" class="form-control" name="Sub_header4" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="header4">Header4</label>
                    <input type="text" class="form-control" name="header4" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Sub_header5">Sub_header5</label>
                    <input type="text" class="form-control" name="Sub_header5" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="header5">Header5</label>
                    <input type="text" class="form-control" name="header5" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
        </div>
        
        <br>
        <input type="submit" class="btn btn-secondary" value="publish-post" name="create-post" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
    </form>
    <br><br>

    <h4 style = "display: flex; justify-content:center; align-item:center; font-size:50px; font-family: 'Times New Roman', Times, serif;">Header Update</h4>
    <div class="row">
        <div class="container">
            <div class="row">
            <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Page Header </span>>> <span style="color:crimson;"> Sub Header </span>>>> Header Title </h6>
            </div>
        </div>
    </div>
    <form action="" method="post" enctype="multipart/form-data" class="was-validated">
        <?php 
            // header update
            if(isset($_GET['s'])){
                echo "Update Succesfull";
            }
            extract ($_GET, EXTR_OVERWRITE);

            $sql = $db->query("SELECT * FROM header_title ") or die($db->error);
            $num = $sql->num_rows;
                while($row = $sql->fetch_assoc()){
                    // print_r($row);
                    $idss[] = $row ['id'];
                    $Sub_headers[] = $row ['Sub_header'];
                    $headers[] = $row ['header'];
                    $Sub_headers1[] = $row ['Sub_header1'];
                    $headers1[] = $row ['header1'];
                    $Sub_headers2[] = $row ['Sub_header2'];
                    $headers2[] = $row ['header2'];
                    $Sub_headers3[] = $row ['Sub_header3'];
                    $headers3[] = $row ['header3'];
                    $Sub_headers4[] = $row ['Sub_header4'];
                    $headers4[] = $row ['header4'];
                    $Sub_headers5[] = $row ['Sub_header5'];
                    $headers5[] = $row ['header5'];
                } 
                if(isset($_GET['update'])){
                    $header_id = $_GET['update'];
                    $sql = $db->query("SELECT * FROM header_title WHERE id='$header_id'" ) or die($db->error);

                    if($row = $sql->fetch_assoc()){
                        $id_1 = $row['id'];
                        $Sub_titles = $row ['Sub_header'];
                        $titles = $row ['header'];
                        $Sub_titles1 = $row ['Sub_header1'];
                        $titles1 = $row ['header1'];
                        $Sub_titles2 = $row ['Sub_header2'];
                        $titles2 = $row ['header2'];
                        $Sub_titles3 = $row ['Sub_header3'];
                        $titles3 = $row ['header3'];
                        $Sub_titles4 = $row ['Sub_header4'];
                        $titles4 = $row ['header4'];
                        $Sub_titles5 = $row ['Sub_header5'];
                        $titles5 = $row ['header5'];
                    }
                }
                if(isset($_POST['update'])){
                    $id = $_POST['pid'];
                    $Sub_title = $_POST ['Sub_header'];
                    $title = $_POST ['header'];
                    $Sub_title1 = $_POST ['Sub_header1'];
                    $title1 = $_POST ['header1'];
                    $Sub_title2 = $_POST ['Sub_header2'];
                    $title2 = $_POST ['header2'];
                    $Sub_title3 = $_POST ['Sub_header3'];
                    $title3 = $_POST ['header3'];
                    $Sub_title4 = $_POST ['Sub_header4'];
                    $title4 = $_POST ['header4'];
                    $Sub_title5 = $_POST ['Sub_header5'];
                    $title5 = $_POST ['header5'];
                    
                
                    $sql ="UPDATE header_title SET Sub_header='$Sub_title', header = '$title',Sub_header1='$Sub_title1',header1='$title1', 
                    Sub_header2='$Sub_title2',header2='$title2',Sub_header3='$Sub_title3',header3='$title3',Sub_header4='$Sub_title4',header4='$title4',
                    Sub_header5='$Sub_title5',header5='$title5' WHERE id = '$id' ";
                    
                    $result = $db->query($sql) or die($db->error);
                    if($result){
                        $msg1="Update successful";
                        echo "<script> window.location.href='header_title.php?s=1'; </script>";
                        echo $msg1;
                    }
                }

        ?>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="number">id</label>
                    <input type="number" class="form-control text-center" name="id" value="<?php if(isset($id_1)) echo $id_1;?>" required>
                    <input type="hidden" name="pid" value="<?php echo $id_1 ?>">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Sub_header">Sub_header</label>
                    <input type="text" class="form-control" name="Sub_header" value="<?php if(isset($Sub_titles)) echo $Sub_titles;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="header">Header</label>
                    <input type="text" class="form-control" name="header" value="<?php if(isset($titles)) echo $titles;?>" required> 
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>   
                </div>

                <div class="form-group">
                    <label for="Sub_header1">Sub_header1</label>
                    <input type="text"class="form-control"  name="Sub_header1" value="<?php if(isset($Sub_titles1)) echo $Sub_titles1;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="header1">Header1</label>
                    <input type="text" class="form-control" name="header1" value="<?php if(isset($titles1)) echo $titles1;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="Sub_header2">Sub_header2</label>
                    <input type="text" class="form-control" name="Sub_header2" value="<?php if(isset($Sub_titles2)) echo $Sub_titles2;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="header2">Header2</label>
                    <input type="text" class="form-control" name="header2" value="<?php if(isset($titles2)) echo $titles2;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Sub_header3">Sub_header3</label>
                    <input type="text" class="form-control" name="Sub_header3" value="<?php if(isset($Sub_titles3)) echo $Sub_titles3;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="header3">Header3</label>
                    <input type="text" class="form-control" name="header3" value="<?php if(isset($titles3)) echo $titles3;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="col-md-4">        
                <div class="form-group">
                    <label for="Sub_header4">Sub_header4</label>
                    <input type="text" class="form-control" name="Sub_header4" value="<?php if(isset($Sub_titles4)) echo $Sub_titles4;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="header4">Header4</label>
                    <input type="text" class="form-control" name="header4" value="<?php if(isset($titles4)) echo $titles4;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Sub_header5">Sub_header5</label>
                    <input type="text" class="form-control" name="Sub_header5" value="<?php if(isset($Sub_titles5)) echo $Sub_titles5;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="header5">Header5</label>
                    <input type="text" class="form-control" name="header5" value="<?php if(isset($titles5)) echo $titles5;?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
        </div>
        
        <br>
        <input type="submit" class="btn btn-secondary" value="update-post" name="update" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
    </form>

    <div class="col-lg-12">
        <table class="table table-striped table-hover table-bordered">
            <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
                <tr>
                    <th>id</th>
                    <th>Sub_title</th>
                    <th>Title</th>  
                    <th>Sub_title1</th>
                    <th>Title1</th>  
                    <th>Sub_title2</th>  
                    <th>Title2</th>  
                    <th>Sub_title3</th>  
                    <th>Title3</th>  
                    <th>Sub_title4</th>  
                    <th>Title4</th>  
                    <th>Sub_title5</th>  
                    <th>Title5</th>  
                    <th>Trash</th>  
                    <th>Delete</th>  
                </tr>
            </thead>

            <tbody style="font-family: 'Times New Roman', Times, serif;">
            <!-- loop starts -->
            <?php 
                for($i=0; $i<$num; $i++){?>
                    <tr>
                        <td><?php echo $i+1 ?></td>
                        <td><?php echo $Sub_headers[$i] ?></td>
                        <td><?php echo $headers[$i] ?></td>
                        <td><?php echo $Sub_headers1[$i] ?></td>
                        <td><?php echo $headers1[$i] ?></td>
                        <td><?php echo $Sub_headers2[$i] ?></td>
                        <td><?php echo $headers2[$i] ?></td>
                        <td><?php echo $Sub_headers3[$i] ?></td>
                        <td><?php echo $headers3[$i] ?></td>
                        <td><?php echo $Sub_headers4[$i] ?></td>
                        <td><?php echo $headers4[$i] ?></td>
                        <td><?php echo $Sub_headers5[$i] ?></td>
                        <td><?php echo $headers5[$i] ?></td>
                        <td> <a href="header_title.php?update=<?php echo $idss[$i] ?>">
                                <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                            </a>
                        </td>
                        <td> <a href="header_title.php?delete=<?php echo $idss[$i] ?>">
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