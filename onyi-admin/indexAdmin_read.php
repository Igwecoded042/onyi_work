<?php 
require_once "emeka_db.php";
require_once "header.php";


?>
<br>
<div class="container-fluid">
    <h4 class="text-center content" style = "font-size:45px; font-family: 'Times New Roman', Times, serif;">Index Admin | Read</h4>
    <br>
    <div class="row">
        <div class="container">
            <div class="row">
                <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Dashboard </span>>> Index Admin >> Read </h6>
            </div>
            <br>
        </div>
    </div>
    <table class="table table-striped table-hover table-bordered">
        <thead style="font-size:17.5px;font-family: 'Times New Roman', Times, serif;">
            <tr>
                <th>id</th>
                <th>Category Title</th>
                <th>Category Description</th>
                <th>Comment</th>
                <th>Category Type</th>
                <th>Rank</th>
                <th>Picture Ref</th>
            </tr>
        </thead>
        
        <tbody style="font-family: 'Times New Roman', Times, serif;">
        <!-- loop starts -->
        <?php 
            for($i=0; $i<$num; $i++){?>
                <tr>
                    <td><?php echo $i+1 ?></td>
                    <td><?php echo $ncontent[$i] ?></td>
                    <td><?php echo $product[$i] ?></td>
                    <td><?php echo $comment[$i] ?></td>
                    <td><?php echo $scategory[$i] ?></td>
                    <td><?php echo $srank[$i] ?></td>
                    <td><?php echo $pix[$i] ?></td>
                </tr>
        <?php }?>
        <!-- loop ends -->
        </tbody>
    </table>
</div>