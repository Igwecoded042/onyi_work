<?php 
require_once "emeka_db.php";
require_once "header.php";

$sql = $db->query("SELECT * FROM header_title ") or die($db->error);
$num = $sql->num_rows;
    while($row = $sql->fetch_assoc()){
        // print_r($row);
        $idss = $row ['id'];
        $Sub_headers = $row ['Sub_header'];
        $headers = $row ['header'];
        $Sub_headers1 = $row ['Sub_header1'];
        $headers1 = $row ['header1'];
        $Sub_headers2 = $row ['Sub_header2'];
        $headers2 = $row ['header2'];
        $Sub_headers3 = $row ['Sub_header3'];
        $headers3 = $row ['header3'];
        $Sub_headers4 = $row ['Sub_header4'];
        $headers4 = $row ['header4'];
        $Sub_headers5 = $row ['Sub_header5'];
        $headers5 = $row ['header5'];
    } 
?>
<div class="container-fluid">
    <?php require_once "sideColumn.php";?>
    <br><br>
    <!-- caption header -->
    



    <h5 class="text-center" style="font-size:15px;font-family: 'Times New Roman', Times, serif"><?php echo $Sub_headers; ?></h5>
    <h3 class="text-center" id="head_title"><?php echo $headers; ?></h3>
    
    <div class="gallery_slider_container">
        <?php 
            $sql = $db->query("SELECT * FROM gallery_slider" ) or die($db->error);
        ?>

        <!-- Gallery Slider -->
        <div class="owl-carousel owl-theme gallery_slider">
            <!-- Gallery Item -->
            <?php    
                while($row = $sql->fetch_assoc()): 
            ?>
            <div class="owl-item gallery_item">
                <a href="<?php echo $row['gallery_link']; ?>"style="width:100%;height:200px;">
                    <img src="pictures/<?php echo $row['slider_image']; ?>"style="width:100%;height:200px;overflow: hidden;" alt="">
                    <div class="carousel-caption"style="width:100%;">
                        <h3 style="background-color:brown;height:30px; margin-left:-10px; float: left;margin-bottom:-40px; color: ghostwhite;opacity: 0.8; font-size: 20px;font-family: 'Times New Roman', Times, serif; padding: 2px;">
                            Shop Now
                        </h3>
                    </div>
                </a>
            </div>
            <?php  endwhile ?>
            <?php}?>
        </div>
        
    </div>
    <br><br>
    <!-- heading Text -->
    <h5 class="text-center" style="font-size:15px;font-family: 'Times New Roman', Times, serif"><?php echo $Sub_headers1; ?></h5>
    <h5 class="text-center" id="head_title"><?php echo $headers1; ?></h5>
        <!-- end of heading text -->

            <!-- image column -->
    <div class="row">
        <div class="container">
            <?php $sql = $db->query("SELECT * FROM long_gown_table") or die ($db->error); ?>
            <div class="row">
                <?php    
                    while($row = $sql->fetch_assoc()): 
                ?>
                <div class="col-md-4 mb-4">
                    <a href="<?php echo $row['page_link']; ?>"><img src="pictures/<?php echo $row['picture_ref']; ?>" class="img img-fluid ankara photo"style="width:100%;" alt="">
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                            Shop Now
                        </section>
                    </a>
                    <br><br>
                    <h3 id="head_title" style="font-family: 'Times New Roman', Times, serif"><?php echo $row['pic_title']; ?></h3>
                    <a href="#" id="wishlist"> 
                        <?php echo $row['Add_to_wishlist']; ?>
                    </a>
                </div>
                <?php  endwhile ?>
                <?php}?>
            </div>    
        </div>  
    </div>
        <!-- image column ends -->

        <!-- text heading -->
    <br><br>
    <h5 class="text-center" style="font-size:15px;font-family: 'Times New Roman', Times, serif"><?php echo $Sub_headers2;?></h5>
    <h5 class="text-center" id="head_title"><?php echo $headers2; ?></h5>

    <!-- column for agbada images -->
    <!-- start of first row -->
    <br>
    
    <?php $sql = $db->query("SELECT * FROM agbada_table") or die ($db->error); ?>
    <div class="row">
        <?php while($row = $sql->fetch_assoc()):?>
        <div class="col-md-3 mb-5">
            <a href="<?php echo $row['lagbadalink']; ?>"><img src="pictures/<?php echo $row['agbada_photo']; ?>"class="img img-fluid ankara photo1" alt="">
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            </a>
        </div>
        <?php  endwhile ?>
        <?php}?>
        
    </div>
    <br>
    <!-- start of second row -->
    <!-- //// -->
    <!-- end of second row -->

    <!-- text heading -->
    <br><br>
    <h5 class="text-center" style="font-size:15px;font-family: 'Times New Roman', Times, serif"><?php echo $Sub_headers3; ?></h5>
    <h5 class="text-center" id="head_title"><?php echo $headers3; ?></h5>

    <div class="row">
        <div class="container">
            <?php $sql = $db->query("SELECT * FROM agbada_gown") or die ($db->error); ?>
            <div class="row">
                <?php while($row = $sql->fetch_assoc()): ?>
                <div class="col-md-4 mb-5">
                    <a href="<?php echo $row['agbada_link']; ?>"><img src="pictures/<?php echo $row['agbada_image']; ?>"class="img img-fluid ankara photo2" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                        Shop Now
                    </section>
                    </a>
                </div>
                <?php  endwhile ?>
                <?php}?>
            </div>
        </div>
    </div>
    <!-- <br><br> -->
    <br><br>
        <!-- *********ANKARA SENATORS************** -->
    <h5 class="text-center" style="font-size:15px;font-family: 'Times New Roman', Times, serif"><?php echo $Sub_headers5 ?></h5>
    <h5 class="text-center" id="head_title"><?php echo $headers5?></h5>
    
    <div class="gallery_slider_container">
        <?php 
            $sql = $db->query("SELECT * FROM gallery_slider2" ) or die($db->error);
        ?>
        <!-- Gallery Slider -->
        <div class="owl-carousel owl-theme gallery_slider">
            
            <?php    
                while($row = $sql->fetch_assoc()): 
            ?>
            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a href="<?php echo $row['page_link']; ?>"style="width:100%;height:200px;">
                    <img src="pictures/<?php echo $row['g_image']; ?>"style="width:100%;height:200px;overflow:hidden;" alt="">
                    <div class="carousel-caption"style="width:100%;">
                        <h3 style="background-color:brown;height:30px; margin-left:-10px; float: left;margin-bottom:-40px; color: ghostwhite;opacity: 0.8; font-size: 20px;font-family: 'Times New Roman', Times, serif; padding: 2px;">
                            Shop Now
                        </h3>
                    </div>
                </a>
            </div>
            <?php  endwhile ?>
            <?php}?>
        </div>
    </div>
    <br><br>

    <!-- </div> -->
        
    <!-- text heading -->
    <!-- <a href="#"><h5 class="text-center" id="text_caption" style="text-decoration-line: none;font-size:40px;font-family: 'Times New Roman', Times, serif"><b><span style="color:brown;font-family: 'Times New Roman', Times, serif">COPAT</span><span style="color:darkgoldenrod;font-family: 'Times New Roman', Times, serif"> WEARS</span></b></h5></a> -->
    <?php require_once "footer.php"; ?>
</div>
