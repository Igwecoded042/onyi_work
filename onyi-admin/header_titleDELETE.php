<?php 
require_once "emeka_db.php";
require_once "header.php";
    extract ($_GET, EXTR_OVERWRITE);
    // header delete
    $sql = $db->query("SELECT * FROM header_title") or die($db->error);
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
    //select query using while loop for image_table read in the CRUD

    // deleting starts
    $sql = $db->query("SELECT * FROM header_title") or die($db->error);
    $num = $sql->num_rows;
        while($row = $sql->fetch_assoc()){
            // print_r($row);
            $$idss[] = $row ['id'];
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
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $sql = $db->query("DELETE FROM header_title WHERE id= '$delete_id'") or die($db->error);

        if($sql)header("Location:header_title.php");
    } 
    // deleting ends
?>
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
                <td><?php echo $Sub_headers[$i] ?></td>
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