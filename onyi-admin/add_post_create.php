<?php 
require_once "emeka_db.php";
require_once "header.php";

if(isset($_POST['create-post'])){
    $title = $_POST['title'];
    $Post_Category_id = $_POST['Post_Category_id'];
    $Post_Author = $_POST['Post_Author'];
    $Post_Status = $_POST['Post_Status'];
    $Post_tags = $_POST['Post_tags'];
    $Post_Content = $_POST['Post_Content'];
    $Post_date = date('d-m-y');
    $Post_comment_count = 4;
    $Post_image = $_FILES["Post_image"]["name"];
    $target = "../Htmlfolder/".$Post_image;
    move_uploaded_file($_FILES["Post_image"]["tmp_name"],$target);
    
    $sql = "INSERT INTO Post_table(title,Post_Category_id,Post_Author,Post_Status,Post_tags,Post_Content,date,Comment_count,picture_ref) 
        VALUES 
        ('$title',$Post_Category_id,'$Post_Author','$Post_Status','$Post_tags','$Post_Content',now(),'$Post_comment_count','$Post_image')";

        if (!$db->query($sql)){
            die($db->error);
        }else{
            $msg ="Your form was submitted successfully!";
        }
}
?>
<div class="container-fluid">
    <h4 class="text-center"style="font-family: 'Times New Roman', Times, serif;"><?php if(isset($msg)) echo $msg; ?></h4>
    <form action="" method="post" enctype="multipart/form-data" class="was-validated">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" name="title" required>  
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>  
                </div>

                <div class="form-group">
                    <label for="Post Category">Post Category id</label>
                    <input type="text" class="form-control" name="Post_Category_id" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="author">Post Author</label>
                    <input type="text" class="form-control" name="Post_Author" required> 
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>   
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="status">Post Status</label>
                    <input type="text" class="form-control" name="Post_Status" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="image">Post Image</label>
                    <input type="file" name="Post_image" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="tags">Post Tags</label>
                    <input type="text" class="form-control" name="Post_tags" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

                <div class="form-group">
                    <label for="content">Post Content</label>
                    <textarea class="form-control" name="Post_Content" id="" cols="30" rows="5" required></textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>    
                </div>

            </div>
        </div>
        
        <br>
            <input type="submit" class="btn btn-secondary" value="publish-post" name="create-post" style="font-size:15px;font-family: 'Times New Roman', Times, serif">
    </form>
</div>