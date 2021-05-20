<?php 
require_once "emeka_db.php";
require_once "header.php";
    extract ($_GET, EXTR_OVERWRITE);

    $sql = $db->query("SELECT * FROM navtitle2") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $sideNav_ids[] = $row ['id'];
            $sideNav[] = $row ['sideNav'];
            $side_title[] = $row ['side_title'];
        
    } 
    //select query using while loop for image_table read in the CRUD

    // deleting starts
    $sql = $db->query("SELECT * FROM navtitle2") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $sideNav_id[] = $row ['id'];
            $sideNav[] = $row ['sideNav'];
            $side_title[] = $row ['side_title'];
        
    } 
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $sql = $db->query("DELETE FROM navtitle2 WHERE id= '$delete_id'") or die($db->error);

        if($sql)header("Location:dashDELETE.php");
    } 
    // deleting ends
?>
<table class="table table-striped table-hover table-bordered">
    <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
        <tr>
            <th>SideNav_id</th>
            <th>SideNav</th>
            <th>side_title</th>  
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
                <td><?php echo $sideNav[$i] ?></td>
                <td><?php echo $side_title[$i] ?></td>
                <td> <a href="dashboardNAV.php?update=<?php echo $sideNav_ids[$i] ?>">
                        <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                    </a>
                </td>
                <td> <a href="dashDELETE.php?delete=<?php echo $sideNav_ids[$i] ?>">
                        <i class="fa fa-trash fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                    </a>
                </td>
            </tr>
    <?php }?>
    <!-- loop ends -->
    </tbody>
</table>