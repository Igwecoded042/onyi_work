<?php 
require_once "emeka_db.php";
require_once "header.php";
    extract ($_GET, EXTR_OVERWRITE);

    $sql = $db->query("SELECT * FROM image_table") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $ids[] = $row ['id'];
            $pixs[] = $row ['Picture_ref'];
            $akon[] = $row ['text'];
            $amos[] = $row ['active'];
            $armstrong[] = $row ['Color'];
        
    } 
    //select query using while loop for image_table read in the CRUD

    // deleting starts
    $sql = $db->query("SELECT * FROM image_table") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $ids[] = $row ['id'];
            $pixs[] = $row ['Picture_ref'];
            $akon[] = $row ['text'];
            $amos[] = $row ['active'];
            $armstrong[] = $row ['Color'];
        
    } 
    if(isset($_GET['did'])){
        $gid = $_GET['did'];
        $sql = $db->query("DELETE FROM image_table WHERE id= '$gid'") or die($db->error);
        if($sql){
            echo "<script> window.location = 'imageCRUD.php' </script>";
        }
    } 
    // deleting ends
?>
<table class="table table-striped table-hover table-bordered">
    <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
        <tr>
            <th>id</th>
            <th>Image Title</th>
            <th>Active</th>
            <th>Color</th>
            <th>Picture Ref</th>  
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
                <td><?php echo $akon[$i]; ?></td>
                <td><?php echo $akon1[$i] ;?></td>
                <td><?php echo $armstrong[$i] ;?></td>
                <td><img width='100' height='100' class="img-fluid" src="../pictures/<?php if(isset($pixs[$i]))echo $pixs[$i]; ?>" ></td>
                <td> <a href="imageCRUD.php?update=<?php echo $ids[$i] ;?>">
                        <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                    </a>
                </td>
                <td> <a href="imageCRUD.php?did=<?php echo $ids[$i] ;?>">
                        <i class="fa fa-trash fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                    </a>
                </td>
            </tr>
    <?php }?>
    <!-- loop ends -->
    </tbody>
</table>