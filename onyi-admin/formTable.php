<table class="table table-striped table-hover table-bordered">
    <thead style="font-family: 'Times New Roman', Times, serif;">
        <tr class="bg-secondary" style="color:ghostwhite;">
            <th>id</th>
            <th>Category Title</th>
            <th>Category Description</th>
            <th>Comment</th>
            <th>Category Type</th>
            <th>Rank</th>
            <th>picture_ref</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead> 

    <!-- Looping Starts -->
    <?php for($i=0; $i<$num; $i++) {?>
    <tbody style="font-family: 'Times New Roman', Times, serif;">
        <tr>
            <td><?php echo $i+1 ?></td>
            <td><?php echo $ncontents[$i] ?></td>
            <td><?php echo $products[$i] ?></td>
            <td><?php echo $comments[$i] ?></td>
            <td><?php echo $scategorys[$i] ?></td>
            <td><?php echo $sranks[$i] ?></td>
            <td><?php echo $pixs[$i] ?></td>
            <td> <a href="indexAdmin.php?update=<?php echo $ids[$i] ?>">
                    <i class="fa fa-edit fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                </a>
            </td>
            <td> <a href="indexAdmin.php?did=<?php echo $ids[$i] ?>">
                    <i class="fa fa-trash fa" style="margin-left: auto;color: black; font-size: 15px; margin-top: auto;"></i>
                </a>
            </td>
        </tr>
    </tbody>
    <?php }?>
</table>