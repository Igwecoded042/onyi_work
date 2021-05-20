<?php 
require_once "emeka_db.php";
require_once "header.php";

if(isset($_POST['create-post'])){
    $id = $_POST['id'];
    // $pix = $_POST['pix'];
    $Post_Subheader = $_POST['Post_Subheader'];
    $Post_Header = $_POST['Post_Header'];
    // $pix = $_POST['pix'];
    $Sub_header = $_POST['Sub_header'];
    $Header = $_POST['Header'];
    // $pix = $_POST['pix'];
    $Sub_title = $_POST['Sub_title'];
    $Title = $_POST['Title'];
    // $pix = $_POST['pix'];
    $Post_sub_title = $_POST['Post_sub_title'];
    $Post_Title = $_POST['Post_Title'];
    // $pix = $_POST['pix'];
    $Post_Sub_header = $_POST['Post_Sub_header'];
    $Post_Header1 = $_POST['Post_Header1'];
    // $pix = $_POST['pix'];
    $Post_Sub_Title1 = $_POST['Post_Sub_Title1'];
    $Post_Title1 = $_POST['Post_Title1'];
    // $pix = $_POST['pix'];
    $pix = $_FILES["pix"]["name"];
    $target = "../Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
    
    $sql = "INSERT INTO admin_onyi_post(id,Post_Picture,Post_Subheader,Post_Header,Picture_gallery,Sub_header,Header,Post_image,Sub_title,Title,Post_gallery,
        Post_sub_title,Post_Title,Image,Post_Sub_header,Post_Header1,Image1,Post_Sub_Title1,Post_Title1,Post_image2) 
        VALUES 
        ('$id','$pix','$Post_Subheader','$Post_Header','$pix','$Sub_header','$Header','$pix','$Sub_title','$Title','$pix',
        '$Post_sub_title','$Post_Title','$pix','$Post_Sub_header','$Post_Header1','$pix','$Post_Sub_Title1','$Post_Title1',
        '$pix')";

        if (!$db->query($sql)){
            die($db->error);
        }else{
            $msg ="Your form was submitted successfully!";
        }
}
?>
<div class="container-fluid">
    <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif; color:green;"><?php if(isset($msg)) echo $msg; ?></h4>
    <form action="" method="post" enctype="multipart/form-data" class="was-validated">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="id">id</label>
                    <input type="text" class="form-control" name="id" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="pix">Post_Picture</label>
                    <input type="file" name="pix" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Post_Subheader">Post_Subheader</label>
                    <input type="text" class="form-control" name="Post_Subheader" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="Post_Header">Post_Header</label>
                    <input type="text" class="form-control" name="Post_Header" required> 
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>   
                </div>

                <div class="form-group">
                    <label for="pix">Picture_gallery</label>
                    <input type="file" name="pix" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Sub_header">Sub_header</label>
                    <input type="text"class="form-control"  name="Sub_header" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="Header">Header</label>
                    <input type="text" class="form-control" name="Header" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="pix">Post_image</label>
                    <input type="file" name="pix" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Sub_title">Sub_title</label>
                    <input type="text" class="form-control" name="Sub_title" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" name="Title" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                <div class="form-group">
                    <label for="pix">Post_gallery</label>
                    <input type="file" name="pix" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Post_sub_title">Post_sub_title</label>
                    <input type="text" class="form-control" name="Post_sub_title" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Post_Title">Post_Title</label>
                    <input type="text" class="form-control" name="Post_Title" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="col-md-4">        
                <div class="form-group">
                    <label for="pix">Image</label>
                    <input type="file" name="pix" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                <div class="form-group">
                    <label for="Post_Sub_header">Post_Sub_header</label>
                    <input type="text" class="form-control" name="Post_Sub_header" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Post_Header1">Post_Header1</label>
                    <input type="text" class="form-control" name="Post_Header1" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="pix">Image1</label>
                    <input type="file" name="pix" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Post_Sub_Title1">Post_Sub_Title1</label>
                    <input type="text" class="form-control" name="Post_Sub_Title1" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="Post_Title1">Post_Title1</label>
                    <input type="text" class="form-control" name="Post_Title1" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                <div class="form-group">
                    <label for="pix">Post_image2</label>
                    <input type="file" name="pix" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
        </div>
        
        <br>
            <input type="submit" class="btn btn-secondary" value="publish-post" name="create-post" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
    </form>
</div>