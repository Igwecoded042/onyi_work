<?php 
ob_start();
require_once "emeka_db.php";
require_once "header.php";
extract($_POST, EXTR_OVERWRITE);
if(isset($_POST['submit'])){
    $pix = $_FILES["pix"]["name"];
    $target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
}
?>
<div class="container-fluid">
    <h4 class = "text-center" style="font-size:65px; font-family: 'Times New Roman', Times, serif;">Admin Posts</h4>
    <div class="row">
        <div class="container">
            <div class="row">
                <h6 style="font-family: 'Times New Roman', Times, serif;">
                <span style="color:blue">&nbsp; &nbsp; &nbsp; Admin </span>>> Posts </h6>
            </div>
        </div>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <thead style="font-family: 'Times New Roman', Times, serif;">
            <tr>
                <th>id</th>
                <th>Post_Picture</th>
                <th>Post_Subheader</th>
                <th>Post_Header</th>
                <th>Picture_gallery</th>
                <th>Sub_header</th>
                <th>Header</th>
                <th>Post_image</th>
                <th>Sub_title</th>
                <th>Title</th>
                <th>Post_gallery</th>
                <th>Post_sub_title</th>
                <th>Post_Title</th>
                <th>Image</th>
                <th>Post_Sub_header</th>
                <th>Post_Header1</th>
                <th>Image1</th>
                <th>Post_Sub_Title1</th>
                <th>Post_Title1</th>
                <th>Post_image2</th>
            </tr>
        </thead>
        <tbody style="font-size:13px;font-family: 'Times New Roman', Times, serif;">
        <?php 
        // fetching data from data base
            $sql = $db->query("SELECT * FROM admin_onyi_post" ) or die($db->error);
            $num = $sql->num_rows;
                while($row = $sql->fetch_assoc()){
                $id[] = $row ['id'];
                $Post_Picture[] = $row ['Post_Picture'];
                $Post_Subheader[] = $row ['Post_Subheader'];
                $Post_Header[] = $row ['Post_Header'];
                $pix[] = $row ['Picture_gallery'];
                $Sub_header[] = $row ['Sub_header'];
                $Header[] = $row ['Header'];
                $Post_image[] = $row ['Post_image'];
                $Sub_title[] = $row ['Sub_title'];
                $Title[] = $row ['Title'];
                $Post_gallery[] = $row ['Post_gallery'];
                $Post_sub_title[] = $row ['Post_sub_title'];
                $Post_Title[] = $row ['Post_Title'];
                $Image[] = $row ['Image'];
                $Post_Sub_header[] = $row ['Post_Sub_header'];
                $Post_Header1[] = $row ['Post_Header1'];
                $Image1[] = $row ['Image1'];
                $Post_Sub_Title1[] = $row ['Post_Sub_Title1'];
                $Post_Title1[] = $row ['Post_Title1'];
                $Post_image2[] = $row ['Post_image2'];
            } 
                   
        ?>
            <tr>
            <?php for($i=0; $i<$num; $i++){?>

                <td> <?php echo $i+1; ?> </td>
                <td><img src="../Htmlfolder/<?php if(isset($Post_Picture[$i]))echo $Post_Picture[$i]; ?>" class="img img-fluid"></td>
                <td> <?php echo $Post_Subheader[$i]; ?></td>
                <td> <?php echo $Post_Header[$i]; ?></td>
                <td><img src="" alt=""></td>
                <td> <?php echo $Sub_header[$i]; ?></td>
                <td> <?php echo $Header[$i]; ?></td>
                <td><img src="../Htmlfolder/<?php if(isset($pix[$i]))echo $pix[$i]; ?>" class="img img-fluid"></td>
                <td> <?php echo $Sub_title[$i]; ?></td>
                <td> <?php echo $Title[$i]; ?></td>
                <td><img src="" alt=""></td>
                <td> <?php echo $Post_sub_title[$i]; ?> </td>
                <td> <?php echo $Post_Title[$i]; ?></td>
                <td><img src="" alt=""></td>
                <td> <?php echo $Post_Sub_header[$i]; ?></td>
                <td> <?php echo $Post_Header1[$i]; ?></td>
                <td><img src="" alt=""></td>
                <td> <?php echo $Post_Sub_Title1[$i]; ?></td>
                <td> <?php echo $Post_Title1[$i];?></td>
                <td><img src="" alt=""></td>
            </tr>
            <?php }?>
            <!-- fetching data from data base ends -->
        </tbody>
    </table>
</div>