<?php require_once "header.php";?> 
<div class="container-fluid">
    <div class="pix1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="pictures/green15.jpg" class="img img-fluid ankara"id="pix2" alt="">
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
                            <img src="pictures/short17.jpg" id="img2" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/short9.jpg" id="img3" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/short2.jpg"  id="img4" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/green15.jpg"  id="img5" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                    </div>
                    <br><br>
                    <!-- ************second row********** -->
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="pictures/short20.jpg" id="img6" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/short19.jpg" id="img7" class="img img-fluid ankara" alt="">
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/short15.jpg"  id="img8" class="img img-fluid ankara" alt="" >
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                        <div class="col-sm-3">
                            <img src="pictures/short18.jpg"  id="img9" class="img img-fluid ankara" alt="" >
                            <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:30px;">
                                Shop Now
                            </section>
                        </div>
                    </div>
                     <!-- ************second row end ********** -->
                    
                     <!-- script for image selector -->
                <script>
                let mainImg = document.querySelector('#pix2');
                let sImg2 = document.querySelector('#img2');
                let sImg3 = document.querySelector('#img3');
                let sImg4 = document.querySelector('#img4'); 
                let sImg5 = document.querySelector('#img5');  
                let sImg6 = document.querySelector('#img6');  
                let sImg7 = document.querySelector('#img7');  
                let sImg8 = document.querySelector('#img8');  
                let sImg9 = document.querySelector('#img9');  
                // let sImg10 = document.querySelector('#img10');  
                // let sImg11 = document.querySelector('#img11');  
                // let sImg12 = document.querySelector('#img12');  
                // let sImg13 = document.querySelector('#img13');  
                    console.log(mainImg);
                sImg2.addEventListener('click',function(e){
                    e.preventDefault();
                let big = mainImg.getAttribute('src');
                    let sm = sImg2.getAttribute('src');      
                    mainImg.setAttribute('src',sm);
                })
                sImg3.addEventListener('click',function(e){
                    e.preventDefault();
                let big =    mainImg.getAttribute('src');
                    let sm1 =   sImg3.getAttribute('src');      
                    mainImg.setAttribute('src',sm1);
                })
                sImg4.addEventListener('click',function(e){
                    e.preventDefault();
                let big =    mainImg.getAttribute('src');
                    let sm2 =   sImg4.getAttribute('src');      
                    mainImg.setAttribute('src',sm2);
                })
                sImg5.addEventListener('click',function(e){
                    e.preventDefault();
                let big =    mainImg.getAttribute('src');
                    let sm3 =   sImg5.getAttribute('src');      
                    mainImg.setAttribute('src',sm3);
                })
                sImg6.addEventListener('click',function(e){
                    e.preventDefault();
                let big =    mainImg.getAttribute('src');
                    let sm4 =   sImg6.getAttribute('src');      
                    mainImg.setAttribute('src',sm4);
                })
                sImg7.addEventListener('click',function(e){
                    e.preventDefault();
                let big =    mainImg.getAttribute('src');
                    let sm5 =   sImg7.getAttribute('src');      
                    mainImg.setAttribute('src',sm5);
                })
                sImg8.addEventListener('click',function(e){
                    e.preventDefault();
                let big =    mainImg.getAttribute('src');
                    let sm6 =   sImg8.getAttribute('src');      
                    mainImg.setAttribute('src',sm6);
                })
                sImg9.addEventListener('click',function(e){
                    e.preventDefault();
                let big =    mainImg.getAttribute('src');
                    let sm7 =   sImg9.getAttribute('src');      
                    mainImg.setAttribute('src',sm7);
                })
                // sImg10.addEventListener('click',function(e){
                //     e.preventDefault();
                // let big =    mainImg.getAttribute('src');
                //     let sm8 =   sImg10.getAttribute('src');      
                //     mainImg.setAttribute('src',sm8);
                // })
                // sImg11.addEventListener('click',function(e){
                //     e.preventDefault();
                // let big =    mainImg.getAttribute('src');
                //     let sm9 =   sImg11.getAttribute('src');      
                //     mainImg.setAttribute('src',sm9);
                // })
                // sImg12.addEventListener('click',function(e){
                //     e.preventDefault();
                // let big =    mainImg.getAttribute('src');
                //     let sm10 =   sImg12.getAttribute('src');      
                //     mainImg.setAttribute('src',sm10);
                // })
                // sImg13.addEventListener('click',function(e){
                //     e.preventDefault();
                // let big =    mainImg.getAttribute('src');
                //     let sm11 =   sImg13.getAttribute('src');      
                //     mainImg.setAttribute('src',sm11);
                // })

                </script>
                <!-- End script for image selector -->
                
            <!-- ****************** -->
            <!-- reviews -->
            <!-- ****************** -->
            <br><br>
            <h3 style="font-family: 'Times New Roman', Times, serif;">REVIEWS</h3>

            <br><br>
            <h3 style="font-family: 'Times New Roman', Times, serif;">LEAVE A REVIEW</h3>
            <br>
            <form action="" method="post" enctype="multipart/form-data"class="was-validated">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="Name"required> 
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="E-mail"required>
                    </div>
                    <div class="col-md-4">
                            <input type="text" class="form-control" style="font-size:15px;font-family: 'Times New Roman', Times, serif" placeholder="Subject"required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <textarea class="form-control"style="width:100%;height:200px;font-size:15px;overflow: hidden; font-family: 'Times New Roman', Times, serif"placeholder="Message" required></textarea>
                        <input type="submit" class="btn btn-secondary" value="LEAVE A REVIEW" name="LEAVE A REVIEW" id="cart2" style="font-size:15px;font-family: 'Times New Roman', Times, serif"> 
                    </div>
                </div>
            </form>
        </div>
    </div> 
    <?php require_once "footer.php"; ?>
</div>