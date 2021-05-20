<?php require_once "header.php";?>
<div class="container-fluid">
    <div class="pix1">
        <div class="container">
            <div class="row">
                <!-- bigger image -->
                <div class="col-md-6">
                    <img src="pictures/casuals6.jpg" class="img img-fluid ankara" id="pix2" alt="">
                        <section class="text-center"style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                            Shop Now
                        </section>
                    <!-- smaller images -->
                    <br><br>
                    <div class="row">
                        <div class="col-sm-3">
                            <a href=""><img src="pictures/casuals1.jpg" class="img img-fluid ankara" id="img2" alt="" ></a>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/casuals2.jpg" id="img3" class="img img-fluid ankara" alt="">
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/senator12.jpg"  id="img4" class="img img-fluid ankara" alt="" >
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/casuals6.jpg" class="img img-fluid ankara" id="img5" alt="" >
                        </div>
                    </div>
                </div> 
                    <!-- script for image selector -->
                  <?php require_once "queryImageSelector.php"; ?>

                    <!-- header title -->
                <div class="col-md-6">
                    <h4 id="head_title2"><b>ANKARA CASUALS</b></h4>
                    <p id="head_title3"><b>N25,000.00</b></p>
                    <!-- font awesome -->
                    <?php require_once "font.php"; ?>

                    <div class="form-group form-check" style="margin-left:-18px; margin-top:25px;">
                        <label class="form-check-label" style="font-family: 'Times New Roman', Times, serif;">
                            <input class="form-check-input" type="checkbox">In Stock
                        </label>
                    </div>
                    <p>Ankara is a perfect material for just anything,Long gown styles and blouses,dresses and even the modern 
                        ankara styles that we see on social media, like instagram, facebook etc on a daily bases are made out of this 
                        sunny and bright fabric 
                    </p>
                    
                    <?php require_once "quantity.php"; ?>
                    
                    <br><br>
                    <!-- size -->
                    <?php require_once "activeClass.php";?>

                   <a href="#"><div id="cart1" class="text-center">ADD TO CART</div></a>   
               
                </div>
            </div> 
                    <!-- ****************** -->
                    <!-- reviews -->
                    <!-- ****************** -->
            <br><br>
            <?php require_once "reviews.php"; ?>
        </div>
    </div>
    <?php require_once "footer.php"; ?>
</div>