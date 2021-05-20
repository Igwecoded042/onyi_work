<?php 
require_once "emeka_db.php";
require_once "header.php";
    extract ($_GET, EXTR_OVERWRITE);
    // header delete
    $sql = $db->query("SELECT * FROM long_gown_table") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $idsl[] = $row ['id'];
            $pic_title[] = $row ['pic_title'];
            $Add_to_wishlist[] = $row ['Add_to_wishlist'];
            $picture_ref[] = $row ['picture_ref'];
            $page_link[] = $row ['page_link'];

    } 
    //select query using while loop for image_table read in the CRUD

    // deleting starts
    $sql = $db->query("SELECT * FROM long_gown_table") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $idsl[] = $row ['id'];
            $pic_title[] = $row ['pic_title'];
            $Add_to_wishlist[] = $row ['Add_to_wishlist'];
            $picture_ref[] = $row ['picture_ref'];
            $page_link[] = $row ['page_link'];
        
    } 
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $sql = $db->query("DELETE FROM long_gown_table WHERE id= '$delete_id'") or die($db->error);

        if($sql)header("Location:long_Delete.php");
    } 
    // deleting ends
?>
<table class="table table-striped table-hover table-bordered">
    <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
        <tr>
        <th>id</th>
        <th>Image Title</th>
        <th>Add to Wishlist</th> 
        <th>Page Link</th> 
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
                <td><?php echo $pic_title[$i] ?></td>
                <td><?php echo $Add_to_wishlist[$i] ?></td>
                <td><?php echo $page_link[$i] ?></td>
                <td><img width='100' height='100' class="img-fluid" src="../pictures/<?php if(isset($picture_ref[$i]))echo $picture_ref[$i]; ?>" ></td>
                <td> <a href="long_gownTable.php?Update_post=<?php echo $idsl[$i] ?>">
                        <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                    </a>
                </td>
                <td> <a href="long_Delete.php?delete=<?php echo $idsl[$i] ?>">
                        <i class="fa fa-trash fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                    </a>
                </td>
            </tr>
    <?php }?>
    <!-- loop ends -->
    </tbody>
</table>