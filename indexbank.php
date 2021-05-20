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
<style>
#head_title::selection{
background-color: blue;
}
</style>



    <h5 class="text-center" style="font-size:15px;font-family: 'Times New Roman', Times, serif"><?php echo $Sub_headers; ?></h5>
    <h3 class="text-center" id="head_title"><?php echo $headers; ?></h3>
    
    <div class="gallery_slider_container">
        <?php 
            $sql = $db->query("SELECT * FROM gallery_slider" ) or die($db->error);
            // $num = $sql->num_rows;
               
            //         $idsl = $row ['id'];
            //         $slider_image = $row ['slider_image'];
            //    }       
        
        ?>

        <!-- Gallery Slider -->
        <div class="owl-carousel owl-theme gallery_slider">
            <!-- Gallery Item -->
            <?php    
                while($row = $sql->fetch_assoc()): 
            ?>
            <div class="owl-item gallery_item">
                <a href="galleryCasuals.php"style="width:100%;height:200px;">
                    <img src="pictures/<?php echo $row['slider_image']; ?>"style="width:100%;height:200px;" alt="">
                    <div class="carousel-caption"style="width:100%;">
                        <h3 style="background-color:brown;height:30px; margin-left:-10px; float: left;margin-bottom:-40px; color: ghostwhite;opacity: 0.8; font-size: 20px;font-family: 'Times New Roman', Times, serif; padding: 2px;">
                            Shop Now
                        </h3>
                    </div>
                </a>
            </div>
            <?php  endwhile ?>
            <?php}?>
            <!-- Gallery Item -->
            <!-- <div class="owl-item gallery_item">
                <a href="gallerySenator.php"style="width:100%;height:200px;">
                    <img src="pictures/Native-styles-for-ladies-14.jpg"style="width:100%;height:200px;" alt="">
                    <div class="carousel-caption" style="width:100%;">
                        <h3 style="background-color:brown;height:30px; margin-left:-10px; float: left; margin-bottom:-40px; color: ghostwhite;opacity: 0.8; font-size: 20px;font-family: 'Times New Roman', Times, serif; padding: 2px;">
                            Shop Now
                        </h3>
                    </div>
                </a>
            </div> -->

            <!-- Gallery Item -->
            <!-- <div class="owl-item gallery_item">
                <a href="gallerySlide.php"style="width:100%;height:200px;">
                    <img src="pictures/shortey.jpg"style="width:100%;height:200px;" alt="">
                    <div class="carousel-caption" style="width:100%;">
                        <h3 style="background-color:brown; height:30px; margin-left:-10px; float:left;margin-bottom:-40px; color:ghostwhite;opacity: 0.8; font-size: 20px;font-family: 'Times New Roman', Times, serif; padding: 2px;">
                            Shop Now
                        </h3>
                    </div>
                </a>
            </div> -->
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
                <div class="col-md-4">
                    <a href="longown.php"><img src="pictures/<?php echo $row['picture_ref']; ?>" class="img img-fluid ankara"style="width:100%;" alt="">
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                            Shop Now
                        </section>
                    </a>
                    <br><br>
                    <h3 id="head_title" style="font-family: 'Times New Roman', Times, serif"><?php echo $row['pic_title']; ?></h3>
                    <a href="#" id="wishlist"> 
                        <?php echo $row['Add_to_wishlist']; ?>
                    </a>
                    <!-- <a href="#" style="margin-top:-50px;height:50px; width:50%;float:right;font-size:40px;padding:10px;color:ghostwhite;font-family: 'Times New Roman', Times, serif">
                        <i class="fa fa-shopping-cart fa" style="color:brown;float:right;"></i>
                    </a> -->

                </div>
                <?php  endwhile ?>
                <?php}?>
                <!-- <div class="col-md-4">
                    <a href="shortgowns.php"><img src="pictures/short12.jpg" class="img img-fluid ankara"style="width:100%;" alt="">
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                            Shop Now
                        </section>
                    </a>
                    <br><br>
                    <h3 id="head_title" style="font-family: 'Times New Roman', Times, serif">Stylish Ankara Short Gowns</h3>
                    <a href="#" id="wishlist">
                        Add to WishList
                    </a> -->
                    <!-- <div style="margin-top:-50px;height:50px; width:50%;float:right;font-size:40px;padding:10px;color:ghostwhite;font-family: 'Times New Roman', Times, serif">
                        <i class="fa fa-shopping-cart fa" style="color:brown;float:right;"></i>
                    </div> -->
                <!-- </div>
                <div class="col-md-4">
                    <a href="uniqueStylish.php"><img src="pictures/stylishGowns.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                            Shop Now
                        </section>
                    </a>
                    <br><br>
                    <h3 id="head_title" style="font-family: 'Times New Roman', Times, serif">Unique Stylish Ankara</h3>
                    <a href="#" id="wishlist">
                        Add to WishList
                    </a> -->
                    <!-- <div style="margin-top:-50px;height:50px; width:50%;float:right;font-size:40px;padding:10px;color:ghostwhite;font-family: 'Times New Roman', Times, serif">
                        <i class="fa fa-shopping-cart fa" style="color:brown;float:right;"></i>
                    </div> -->
                    
                    
                <!-- </div> -->
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
    <div class="row">
        <div class="col-md-3">
            <a href="agbada.php"><img src="pictures/green2.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            </a>
        </div>
        <div class="col-md-3">
            <a href="agbada1.php"><img src="pictures/green4.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            </a>
        </div>
        <div class="col-md-3">
            <a href="agbada2.php"><img src="pictures/green3.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            </a>
        </div>
        <div class="col-md-3">
            <a href="agbada3.php"><img src="pictures/green1.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            </a>
        </div>
        <!-- end of first row -->
    </div>
    <br>
    <!-- start of second row -->
    <div class="row">
        <div class="col-md-3">
            <a href="agbada4.php"><img src="pictures/green7.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            </a>
        </div>
        <div class="col-md-3">
            <a href="agbada5.php"><img src="pictures/green8.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            </a>
        </div>
        <div class="col-md-3">
            <a href="agbada6.php"><img src="pictures/green10.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            </a>
        </div>
        <div class="col-md-3">
            <a href="agbada7.php"><img src="pictures/green11.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            </a>
        </div>  
    </div>
    <!-- end of second row -->

    <!-- text heading -->
    <br><br>
    <h5 class="text-center" style="font-size:15px;font-family: 'Times New Roman', Times, serif"><?php echo $Sub_headers3; ?></h5>
    <h5 class="text-center" id="head_title"><?php echo $headers3; ?></h5>

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="gown.php"><img src="pictures/green16.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                        Shop Now
                    </section>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="gown1.php"><img src="pictures/green15.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                        Shop Now
                    </section>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="gown2.php"><img src="pictures/green13.jpg"class="img img-fluid ankara"style="width:100%;" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                        Shop Now
                    </section>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="gown3.php"><img src="pictures/green12.jpg"class="img img-fluid ankara" style="width:100%;" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                        Shop Now
                    </section>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="gown4.php"><img src="pictures/short81.jpg"class="img img-fluid ankara" style="width:100%;" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                        Shop Now
                    </section>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="gown5.php"><img src="pictures/agbada24.jpeg"class="img img-fluid ankara" style="width:100%;" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                        Shop Now
                    </section>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <h5 class="text-center" style="font-size:15px;font-family: 'Times New Roman', Times, serif"><?php echo $Sub_headers4; ?></h5>
    <h5 class="text-center" id="head_title"><?php echo $headers4?></h5>

    <div class="row">
        <div class="col-md-6">
            <a href="stylish.php"><img src="pictures/green23.jpg"class="img img-fluid ankara"style="width:100%;" alt=""></a>
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
        </div>
        <div class="col-md-3">
            <a href="stylish1.php"><img src="pictures/green24.jpg"class="img img-fluid ankara"style="width:100%;" alt=""></a>
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            <br>
            <a href="stylish2.php"><img src="pictures/green26.jpg"class="img img-fluid ankara"style="width:100%;" alt=""></a>
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
        </div>
        <div class="col-md-3">
            <a href="stylish3.php"><img src="pictures/green27.jpg"class="img img-fluid ankara"style="width:100%;" alt=""></a>
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
            <br>
            <a href="stylish4.php"><img src="pictures/green33.jpg"class="img img-fluid ankara"style="width:100%;" alt=""></a>
            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                Shop Now
            </section>
        </div>
    </div>
    <br><br>
        <!-- *********ANKARA SENATORS************** -->
    <h5 class="text-center" style="font-size:15px;font-family: 'Times New Roman', Times, serif"><?php echo $Sub_headers4 ?></h5>
    <h5 class="text-center" id="head_title"><?php echo $headers4?></h5>
    
    <div class="gallery_slider_container">

        <!-- Gallery Slider -->
        <div class="owl-carousel owl-theme gallery_slider">
            
            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a href="senator.php"style="width:100%;height:200px;">
                    <img src="pictures/senator.jpg"style="width:100%;height:200px;" alt="">
                    <div class="carousel-caption"style="width:100%;">
                        <h3 style="background-color:brown;height:30px; margin-left:-10px; float: left;margin-bottom:-40px; color: ghostwhite;opacity: 0.8; font-size: 20px;font-family: 'Times New Roman', Times, serif; padding: 2px;">
                            Shop Now
                        </h3>
                    </div>
                </a>
            </div>

            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a href="senator2.php"style="width:100%;height:200px;">
                    <img src="pictures/senator2.jpg"style="width:100%;height:200px;" alt="">
                    <div class="carousel-caption"style="width:100%;">
                        <h3 style="background-color:brown;height:30px; margin-left:-10px; float: left;margin-bottom:-40px; color: ghostwhite;opacity: 0.8; font-size: 20px;font-family: 'Times New Roman', Times, serif; padding: 2px;">
                            Shop Now
                        </h3>
                    </div>
                </a>
            </div>

            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a href="senator3.php"style="width:100%;height:200px;">
                    <img src="pictures/senator4.jpg"style="width:100%;height:200px;" alt="">
                    <div class="carousel-caption"style="width:100%;">
                        <h3 style="background-color:brown;height:30px; margin-left:-10px; float: left;margin-bottom:-40px; color: ghostwhite;opacity: 0.8; font-size: 20px;font-family: 'Times New Roman', Times, serif; padding: 2px;">
                            Shop Now
                        </h3>
                    </div>
                </a>
            </div>

            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a href="senator4.php"style="width:100%;height:200px;">
                    <img src="pictures/senator6.jpg"style="width:100%;height:200px;" alt="">
                    <div class="carousel-caption"style="width:100%;">
                        <h3 style="background-color:brown;height:30px; margin-left:-10px; float: left;margin-bottom:-40px; color: ghostwhite;opacity: 0.8; font-size: 20px;font-family: 'Times New Roman', Times, serif; padding: 2px;">
                            Shop Now
                        </h3>
                    </div>
                </a>
            </div>
            <!-- Gallery Item -->
            <div class="owl-item gallery_item">
                <a href="senator5.php"style="width:100%;height:200px;">
                    <img src="pictures/senator8.jpg"style="width:100%;height:200px;" alt="">
                    <div class="carousel-caption"style="width:100%;">
                        <h3 style="background-color:brown;height:30px; margin-left:-10px; float: left;margin-bottom:-40px; color: ghostwhite;opacity: 0.8; font-size: 20px;font-family: 'Times New Roman', Times, serif; padding: 2px;">
                            Shop Now
                        </h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br><br>

    <!-- </div> -->
        
    <!-- text heading -->
    <!-- <a href="#"><h5 class="text-center" id="text_caption" style="text-decoration-line: none;font-size:40px;font-family: 'Times New Roman', Times, serif"><b><span style="color:brown;font-family: 'Times New Roman', Times, serif">COPAT</span><span style="color:darkgoldenrod;font-family: 'Times New Roman', Times, serif"> WEARS</span></b></h5></a> -->
    <?php require_once "footer.php"; ?>
</div>
