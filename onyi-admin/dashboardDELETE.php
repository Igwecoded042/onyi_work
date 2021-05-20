<?php 
require_once "emeka_db.php";
require_once "header.php";
    extract ($_GET, EXTR_OVERWRITE);

    $sql = $db->query("SELECT * FROM mynav") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $Nav_Header_id[] = $row ['id'];
            $Nav_Title[] = $row ['navtitle'];
            $Nav_Link[] = $row ['navlink'];
        
    } 
    //select query using while loop for image_table read in the CRUD

    // deleting starts
    $sql = $db->query("SELECT * FROM mynav") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $Nav_Header_id[] = $row ['id'];
            $Nav_Title[] = $row ['navtitle'];
            $Nav_Link[] = $row ['navlink'];
        
    } 
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $sql = $db->query("DELETE FROM mynav WHERE id= '$delete_id'") or die($db->error);

        if($sql)header("Location:dashboardNAV.php");
    } 
    // deleting ends
?>
<table class="table table-striped table-hover table-bordered">
    <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
        <tr>
            <th>Nav_Header_id</th>
            <th>Nav_Title</th>
            <th>Nav_Link</th>  
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
                <td><?php echo $Nav_Title[$i] ?></td>
                <td><?php echo $Nav_Link[$i] ?></td>
                <td> <a href="dashboard.php?update=<?php echo $Nav_Header_id[$i] ?>">
                        <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                    </a>
                </td>
                <td> <a href="dashboardDELETE.php?delete=<?php echo $Nav_Header_id[$i] ?>">
                        <i class="fa fa-trash fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                    </a>
                </td>
            </tr>
    <?php }?>
    <!-- loop ends -->
    </tbody>
</table>