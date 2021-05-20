<?php
require_once "emeka_db.php"; 

$sql = $db->query("SELECT * FROM image_table" ) or die($db->error);
$num = $sql->num_rows;

   


?>

<div class="pix">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <?php 
                while($row = $sql->fetch_assoc()){
                $id = $row['id'];
                $text = $row['text']; 
                $image = $row['Picture_ref'];
                $active = $row['active']; 
                $color = $row['Color']; 
            ?>
            <div class="carousel-item  <?php echo $active;?> ">
                <img src="pictures/<?php echo $image;?>" style="width:100%;min-height: 290px;"alt="">
                <div class="top-left" <?php echo $color; ?>> <?php echo $text; ?>  </div>
            </div>
           
            <?php }?>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>