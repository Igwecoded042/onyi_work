<?php 
require_once "emeka_db.php";
require_once "header.php";
?>
<div class="container-fluid">
    <?php require_once "sideColumn.php";?>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- categories -->
                    <table class="table table-striped table-hover table-bordered">
                        <thead id="cart3">
                            <tr>
                                <th style="font-family: 'Times New Roman', Times, serif;">Categories</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Ankara Agbada</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Ankara Agbada Long Gowns</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Ankara Agbada Short Gowns</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Ankara Long Gowns</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Ankara Short Gowns</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Ankara Crop Tops</a></td>
                            </tr>  
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Ankara Flare Short Gowns</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Ankara Maxi Designs</a></td>
                            </tr> 
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Senator Wears</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Stylish Ankara Designs</a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <!-- size -->
                    <table class="table table-striped table-hover table-bordered">
                        <thead id="cart3">
                            <tr>
                                <th style="font-family: 'Times New Roman', Times, serif;">Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Small S</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Medium M </a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Large L </a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Extra Large XL </a></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end of size -->
                    <!-- Best Seller -->
                    <table class="table table-striped table-hover table-bordered">
                        <thead id="cart3">
                            <tr>
                                <th style="font-family: 'Times New Roman', Times, serif;">Best Sellers</th>
                            </tr>
                        </thead>
                        <tr>
                            <td><a href="#"><img src="pictures/agbada13.jpg" style="height:80px;width:80px;" alt=""></a>
                                <p style="font-family: 'Times New Roman', Times, serif;margin-left:100px;margin-top:-80px;color:black;font-size:17px;">Ankara Crop Tops</p>
                                <h6 style="font-family: 'Times New Roman', Times, serif;margin-left:100px;margin-top:20px;color:black;font-size:17px;"><b>N15,000,00</b></h6>
                                <a href="#"><div class="text-center" style="height:20px;width:20px;background-color:grey;float: right;margin-top:-30px;color:ghostwhite;font-size:10px;"><b>+</b></div></a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="pictures/agba49.jpg" style="height:80px;width:80px;" alt=""></a>
                                <p style="font-family: 'Times New Roman', Times, serif;margin-left:100px;margin-top:-80px;color:black;font-size:17px;">Ankara Agbada</p>
                                <h6 style="font-family: 'Times New Roman', Times, serif;margin-left:100px;margin-top:20px;color:black;font-size:17px;"><b>N25,000,00</b></h6>
                                <a href="#"><div class="text-center" style="height:20px;width:20px;background-color:grey;float: right;margin-top:-30px;color:ghostwhite;font-size:10px;"><b>+</b></div></a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="pictures/flare short gown.png" style="height:80px;width:80px;" alt=""></a>
                                <p style="font-family: 'Times New Roman', Times, serif;margin-left:100px;margin-top:-80px;color:black;font-size:17px;">Ankara Flare Short Gowns</p>
                                <h6 style="font-family: 'Times New Roman', Times, serif;margin-left:100px;margin-top:20px;color:black;font-size:17px;"><b>N10,000,00</b></h6>
                                <a href="#"><div class="text-center" style="height:20px;width:20px;background-color:grey;float: right;margin-top:-30px;color:ghostwhite;font-size:10px;"><b>+</b></div></a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="pictures/sen43.jpg" style="height:80px;width:80px;" alt=""></a>
                                <p style="font-family: 'Times New Roman', Times, serif;margin-left:100px;margin-top:-80px;color:black;font-size:17px;">Senator Wears</p>
                                <h6 style="font-family: 'Times New Roman', Times, serif;margin-left:100px;margin-top:20px;color:black;font-size:17px;"><b>N20,000,00</b></h6>
                                <a href="#"><div class="text-center" style="height:20px;width:20px;background-color:grey;float: right;margin-top:-30px;color:ghostwhite;font-size:10px;"><b>+</b></div></a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6">
                    <!-- Colors -->
                    <table class="table table-striped table-hover table-bordered">
                        <thead id="cart3">
                            <tr>
                                <th style="font-family: 'Times New Roman', Times, serif;">Colors</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Blue</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Black</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Brown</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Orange</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Red</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-striped table-hover table-bordered">
                        <thead id="cart3">
                            <tr>
                                <th style="font-family: 'Times New Roman', Times, serif;">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Ranges</a></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- fonts -->
                    <table class="table table-striped table-hover table-bordered">
                        <thead id="cart3">
                            <tr>
                                <th style="font-family: 'Times New Roman', Times, serif;">Values</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#"> <i class="fa fa-bank fa" style="margin-left: auto;color:gray; font-size: 45px; margin-top: auto;"></i></a>
                                    <p style="font-family: 'Times New Roman', Times, serif;margin-left:80px;margin-top:-50px;color:black;font-size:17px;"><b>30 Days Returns</b></p>
                                    <h6 style="font-family: 'Times New Roman', Times, serif;margin-left:80px;margin-top:20px;color:black;font-size:17px;">On Products Guarantee</h6>
                                    <a href="#"><div class="text-center" style="height:20px;width:20px;background-color:grey;float: right;margin-top:-30px;color:ghostwhite;font-size:10px;"><b>+</b></div></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#"> <i class="fa fa-shopping-cart fa" style="margin-left: auto;color:gray; font-size: 45px; margin-top: auto;"></i></a>
                                    <p style="font-family: 'Times New Roman', Times, serif;margin-left:80px;margin-top:-50px;color:black;font-size:17px;"><b>Nationwide Delivery</b></p>
                                    <h6 style="font-family: 'Times New Roman', Times, serif;margin-left:80px;margin-top:20px;color:black;font-size:17px;">On all Orders</h6>
                                    <a href="#"><div class="text-center" style="height:20px;width:20px;background-color:grey;float: right;margin-top:-30px;color:ghostwhite;font-size:10px;"><b>+</b></div></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#"> <i class="fa fa-cc-visa fa" style="margin-left: auto;color:gray; font-size: 45px; margin-top: auto;"></i></a>
                                    <p style="font-family: 'Times New Roman', Times, serif;margin-left:80px;margin-top:-50px;color:black;font-size:17px;"><b>Secure Payment</b></p>
                                    <h6 style="font-family: 'Times New Roman', Times, serif;margin-left:80px;margin-top:20px;color:black;font-size:17px;">Pay with the world's most popular and secured payment methods</h6>
                                    <a href="#"><div class="text-center" style="height:20px;width:20px;background-color:grey;float: right;margin-top:-30px;color:ghostwhite;font-size:10px;"><b>+</b></div></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#"> <i class="fa fa-user-o fa" style="margin-left: auto;color:gray; font-size: 45px; margin-top: auto;"></i></a>
                                    <p style="font-family: 'Times New Roman', Times, serif;margin-left:80px;margin-top:-50px;color:black;font-size:17px;"><b>24/7 Support</b></p>
                                    <h6 style="font-family: 'Times New Roman', Times, serif;margin-left:80px;margin-top:20px;color:black;font-size:17px;">Round the clock assistance for a smooth shopping experience</h6>
                                    <a href="#"><div class="text-center" style="height:20px;width:20px;background-color:grey;float: right;margin-top:-30px;color:ghostwhite;font-size:10px;"><b>+</b></div></a>
                                </td>
                            </tr>
                        </tbody>   
                    </table> 
                </div>
                <!-- <h6 ><b></b></h6> -->
                
            </div>
        
        </div>
    </div>
    <!-- Maxi Gown  -->
    <h4 class="text-center" id="head_title2" style="margin-top:50px;"><b>MAXI ANKARA GOWNS</b></h4>
    <script>
        $(document).ready(function(){
            $('#div1').slideUp();   
        $('.fuel').click(function(){
        $('#div1').slideToggle();
            });
        });
    </script>
    <p style="font-family: 'Times New Roman', Times, serif;color:black;">See More</p>
    <section class="fuel" style="height:20px;width:20px;background-color:black;margin-top:-15px;"><i class="fa fa-reorder fa" style="color:white;padding:3px;"></i></section>
    <br>
    
    <div id="div1">
        <!-- maxi gowns -->
        <div class="row">
            <div class="col-md-4">
                <a href="#"><img src="pictures/maxi gown.png" id="maxi" class="ankara" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                        Shop Now
                    </section>
                </a>
                <br><br>
                <h3 id="head_title" style="font-family: 'Times New Roman', Times, serif">Top Rated Ankara Maxi Gowns</h3>
                <a href="#" id="wishlist"> 
                    Add to WishList
                </a>
            </div>
            <div class="col-md-4">
                <a href="#"><img src="pictures/maxi.jpg" id="maxi" class="ankara" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                        Shop Now
                    </section>
                </a>
                <br><br>
                <h3 id="head_title" style="font-family: 'Times New Roman', Times, serif">Stand out in Ankara Maxi Gowns</h3>
                <a href="#" id="wishlist"> 
                    Add to WishList
                </a>
            </div>
            <div class="col-md-4">
                <a href="#"><img src="pictures/maxi.png" id="maxi" class="ankara" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                        Shop Now
                    </section>
                </a>
                <br><br>
                <h3 id="head_title" style="font-family: 'Times New Roman', Times, serif">Elegant Ankara Maxi Gowns</h3>
                <a href="#" id="wishlist"> 
                    Add to WishList
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <a href="#"><img src="pictures/maxi4.jpg" id="maxi" class="ankara" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                        Shop Now
                    </section>
                </a>
                <br><br>
                <h3 id="head_title" style="font-family: 'Times New Roman', Times, serif">Trending Ankara Maxi Gowns</h3>
                <a href="#" id="wishlist"> 
                    Add to WishList
                </a>
            </div>
            <div class="col-md-4">
                <a href="#"><img src="pictures/maxi5.jpg" id="maxi" class="ankara" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                        Shop Now
                    </section>
                </a>
                <br><br>
                <h3 id="head_title" style="font-family: 'Times New Roman', Times, serif">Latest Ankara Maxi Gowns</h3>
                <a href="#" id="wishlist"> 
                    Add to WishList
                </a>
            </div>
            <div class="col-md-4">
                <a href="#"><img src="pictures/maxi7.jpg" id="maxi" class="ankara" alt="">
                    <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                        Shop Now
                    </section>
                </a>
                <br><br>
                <h3 id="head_title" style="font-family: 'Times New Roman', Times, serif">Slay in Ankara Maxi Gowns</h3>
                <a href="#" id="wishlist"> 
                    Add to WishList
                </a>
            </div>
        </div>
    </div>

    <!-- footer -->
    <!-- text heading -->
    <h5 class="text-center" id="head_title">GET IN TOUCH WITH OUR LATEST ARRIVALS</h5>
    <!-- subcribe discount div -->
    <div class="container">
        <div class="col-lg-12">
            <img src="pictures/green38.png" class="photo" style="width:100%;" alt="">
            <section style="height:450px;background-color:black;width:97.5%;opacity:0.7;position:absolute;top:1px;">
                <br><br>
                <h5 class="text-center" style="color:ghostwhite;font-size:15px;font-family: 'Times New Roman', Times, serif">ONLY THE BEST</h5>
                <h5 class="text-center" id="head_title1"><b>SUBSCRIBE FOR A 20% DISCOUNT</b></h5>
                <br><br><br>
                <div class="col-lg-10 offset-lg-1">
                        <!-- form email input -->
                    <form method="" action="post" enctype="multipart/form-data" class="was-validated">
                        <div class="form-group">
                            <input type="text" class="form-control"  id="email" name="email" placeholder="Email:" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback" style="color:red;">Please fill out this field.</div>
                        </div>
                        <button type="button" class="btn btn-danger" style="color:ghostwhite;font-family: 'Times New Roman', Times, serif" data-toggle="button" aria-pressed="false" autocomplete="on">Subscribe</button>
                        
                    </form>
                </div>
            </section>
        </div>
        <!-- </div> -->
    </div>
    <div class="row" style="background-color:maroon;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <br>
                    <a href="#"><h6 style="color:darkgoldenrod;font-family: 'Times New Roman', Times, serif">CORPORATE</h6></a>
                    <br>
                    <a href="#"><h6 style="font-size:13px;color:gold;font-family: 'Times New Roman', Times, serif">ABOUT US</h6></a>
                    <a href="#"><h6 style="font-size:13px;color:gold;font-family: 'Times New Roman', Times, serif">ORDERS AND RETURNS</h6></a>
                    <a href="#"><h6 style="font-size:13px;color:gold;font-family: 'Times New Roman', Times, serif">TERMS OF SERVICE</h6></a>
                </div>
                <div class="col-md-3">
                    <br>
                    <a href="#"><h6 style="color:darkgoldenrod;font-family: 'Times New Roman', Times, serif">INFORMATION</h6></a>
                    <br>
                    <a href="#"><h6 style="font-size:13px;color:gold;font-family: 'Times New Roman', Times, serif">DELIVERY GUIDE</h6></a>
                    <a href="#"><h6 style="font-size:13px;color:gold;font-family: 'Times New Roman', Times, serif">STORE LOCATIONS</h6></a>
                    <a href="#"><h6 style="font-size:13px;color:gold;font-family: 'Times New Roman', Times, serif">CUSTORMER SERVICE</h6></a>
                    <a href="#"><h6 style="font-size:13px;color:gold;font-family: 'Times New Roman', Times, serif">PRIVACY AND POLICY</h6></a>
                </div>
                <div class="col-md-3">
                    <br>
                    <a href="#"><h6 style="color:darkgoldenrod;font-family: 'Times New Roman', Times, serif">SUPPORT</h6></a>
                    <br>
                    <a href="#"><h6 style="font-size:13px;color:gold;font-family: 'Times New Roman', Times, serif">FAQ</h6></a>
                    <a href="#"><h6 style="font-size:13px;color:gold;font-family: 'Times New Roman', Times, serif">OUR SERVICE</h6></a>
                    <a href="#"><h6 style="font-size:13px;color:gold;font-family: 'Times New Roman', Times, serif">CONTACT US</h6></a>
                    <!-- <a href="#"><h6 style="font-size:13px;color:ghostwhite;font-family: 'Times New Roman', Times, serif">CONTACT US</h6></a> -->
                </div>
                <div class="col-md-3">
                    <br>
                    <a href="#"><h6 style="color:darkgoldenrod;font-family: 'Times New Roman', Times, serif">DELIVERY</h6></a>
                    <p style="color:gold;font-family: 'Times New Roman', Times, serif">Packages are generally dispatched from our Abuja Office within 1-2 days after receipt of payment and are shipped via TNT Courier Plus.
                        Shipping fees vary according to total weight and location. Cash on Delivery ships, same day or next day.</p>
                    <br>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <a href="sign_in.php" style="color:ghostwhite; text-decoration-line: none;"><p style="text-align: center;font-family: 'Times New Roman', Times, serif;">Already a Customer? Sign In</p></a>
            <p style="text-align: center;font-family: 'Times New Roman', Times, serif"><span style="color:white;"> Conditions of Use & Sale &nbsp &nbsp Privacy Notice &nbsp &nbsp Cookies Notice &nbsp&nbsp Interest-Based-Ads-Notice</span> &nbsp &nbsp <span style="color:crimson;">&copy;</span> Igwe Gucci .T. 2019-2020 </p>
        </div>
    </div>

    



</div>
    
    