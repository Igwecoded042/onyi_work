<?php require_once "header.php";?>
<div class="container-fluid"> 
    <div class="pix1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="pictures/short81.jpg" class="img img-fluid ankara"id="pix2" alt="">
                    <section class="text-center"style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:50px;">
                        Shop Now
                    </section>
                    <br><br>
                    
                </div>
              
                <div class="col-lg-6">
                    <h4 id="head_title2"><b>STYLISH ANKARA SHORT GOWNS</b></h4>
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
                    <!-- quantity -->
                    <?php require_once "quantity.php"; ?>
                    <br><br>
                    <!-- size -->
                    <?php require_once "activeClass.php";?>
                    <a href="#"><div id="cart1" class="text-center">ADD TO CART</div></a>
                    <br><br>
                    
                </div>
            </div>
                            <!-- smaller images -->
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="pictures/short36.jpg" id="img2" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/short23.jpg" id="img3" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/short50.png"  id="img4" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/small.jpg"  id="img5" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                    </div>
                    <!-- ************second row********** -->
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="pictures/short77.jpg" id="img6" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/short81.jpg" id="img7" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/sleek.jpg"  id="img8" class="img img-fluid ankara" alt="" >
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/short70.jpg"  id="img9" class="img img-fluid ankara"  alt="" >
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                    </div>
                     <!-- ************second row end ********** -->
                    
                     <!-- script for image selector -->
                     <?php require_once "queryImageSelector2.php"; ?>
                <!-- End script for image selector -->
                
            <!-- ****************** -->
            <!-- reviews -->
            <!-- ****************** -->
            <br><br>
            <?php require_once "reviews.php"; ?>

            <br><br>
            <?php require_once "footer.php"; ?>
        </div>
    </div> 
    <?php require_once "footer.php"; ?>
</div>