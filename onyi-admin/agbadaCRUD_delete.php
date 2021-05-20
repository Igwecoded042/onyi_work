<?php 
require_once "emeka_db.php";
require_once "header.php";
    extract ($_GET, EXTR_OVERWRITE);

    $sql = $db->query("SELECT * FROM agbada_table") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $idsl[] = $row ['id'];
            $agbada_photo[] = $row ['agbada_photo'];
            $lagbadalink[] = $row['lagbadalink'];

        
    } 
    //select query using while loop for image_table read in the CRUD

    // deleting starts
    $sql = $db->query("SELECT * FROM agbada_table") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $idsl[] = $row ['id'];
            $agbada_photo[] = $row ['agbada_photo'];
            $lagbadalink[] = $row['lagbadalink'];

        
    } 
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $sql = $db->query("DELETE FROM agbada_table WHERE id= '$delete_id'") or die($db->error);

        if($sql)header("Location:agbadaCRUD_delete.php");
    } 
    // deleting ends
?>
<table class="table table-striped table-hover table-bordered">
    <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
        <tr>
            <th>id</th>
            <th>Page Link</th>
            <th>Agbada Photo</th>  
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
                <td><?php echo $lagbadalink[$i] ?></td>
                <td><img width='100' height='100' class="img-fluid" src="../pictures/<?php if(isset($agbada_photo[$i]))echo $agbada_photo[$i]; ?>" ></td>
                <td> <a href="agbadaCRUD_delete.php?Update_post=<?php echo $idsl[$i] ?>">
                        <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                    </a>
                </td>
                <td> <a href="agbadaCRUD_delete.php?delete=<?php echo $idsl[$i] ?>">
                        <i class="fa fa-trash fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                    </a>
                </td>
            </tr>
    <?php }?>
    <!-- loop ends -->
    </tbody>
</table>