<?php 
require_once "emeka_db.php";
require_once "header.php";


?>

<!-- How to highlight text font color -->
<!-- <style>
#head_title::selection{
background-color: blue;
}
</style> -->
<div class="container-fluid">
    <?php require_once "sideColumn1.php";?>
    
    <div class="row" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php 
                    $sql = $db->query("SELECT * FROM blog" ) or die($db->error);
                    $num = $sql->num_rows;
                    while($row = $sql->fetch_assoc()){
                        $id = $row['id'];
                        $blog_category_id = $row['blog_category_id']; 
                        $blog_title = $row['blog_title']; 
                        $blog_title2 = $row['blog_title2']; 
                        $blog_author = $row['blog_author']; 
                        $blog_date = $row['blog_date']; 
                        $blog_content = $row['blog_content']; 
                        $pix = $row['blog_image']; 
                        $blog_tags = $row['blog_tags']; 
                        $blog_comment_count = $row['blog_comment_count']; 
                        $blog_status = $row['blog_status'];   
                    ?>
                    <h4><span style="color:crimson; font-family: 'Times New Roman', Times, serif;font-size:25px;">
                    <b  class="" ><?php echo $blog_title; ?> </b>
                    </span>
                    <b style=" font-family: 'Times New Roman', Times, serif;font-size:25px;">
                    <?php echo $blog_title2; ?></b></h4> 
                    <h6><a href="#" style="color:black;"><?php echo  $blog_author;?></a></h6>
                    <p><span class="glyphicon glyphicon-time"> <?php echo $blog_date;?></span> at 3.00 PM</p>
                    <p style="color:black; font-family: 'Times New Roman', Times, serif;font-size:20px;"><?php echo $blog_content; ?> </p>
                    <img src="pictures/croptop.png" class="ankara" alt="" id="blog2" style="margin-bottom: 2rem" >
                    <?php }?>
                </div>
                       
                
                <div class="col-lg-4 bg-light">
                    <div style="background-color:brown; width:100%; height:50px;">
                        <h4 class="admin" style = "display: flex; justify-content:center; align-item:center;color:ghostwhite;font-size:40px; font-family: 'Times New Roman', Times, serif;">Login</h4>
                    </div><br><br>
                    <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                        <h5 class="text-center" style="font-family: 'Times New Roman', Times, serif;"><?php if(isset($msg))echo $msg ?></h5>
                        <div class="form-group">
                            <!-- <label for="email">Email address:</label> -->
                            <input type="username" class="form-control" id="username" name="username"  placeholder="username:"required>
                            <!-- <input class="water1" type="text" placeholder="Name"> -->
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                            
                        </div>
                        
                        <div class="form-group">
                            <!-- <label for="pwd">Password:</label> -->
                            <input type="password" class="form-control" id="pwd" name="password"  placeholder="Password:" required >
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" > Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                    </form>
                    <br><br>
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
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Senator Wears</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Stylish Ankara Designs</a></td>
                            </tr>
                            <tr>
                                <td style="font-family: 'Times New Roman', Times, serif;"><a href="#"style="color:black;">Stylish Ankara Designs</a></td>
                            </tr> 
                        </tbody>
                    </table>
                    <br><br>
                    <br><br>
                    <!-- fonts -->
                    <h5 style="font-family: 'Times New Roman', Times, serif">Stay connected</h5>
                    <a href="#"> <i class="fa fa-facebook-official fa" style="margin-left: auto;color: blue; font-size: 35px; margin-top: auto;"></i></a>
                    <a href="#"> <i class="fa fa-twitter-square fa" style="margin-left: auto;color: cornflowerblue; font-size: 35px; margin-top: auto;"></i></a>
                    <a href="#"> <i class="fa fa-instagram fa" style="margin-left: auto;color: crimson; font-size: 35px; margin-top: auto;"></i></a>
                    <a href="#"> <i class="fa fa-youtube-play fa" style="margin-left: auto;color: red; font-size: 35px; margin-top: auto;"></i></a>
                    <a href="#"> <i class="fa fa-whatsapp fa" style="background-color:green; margin-left: auto; color: white; font-size: 35px; margin-top: auto;"></i></a>
                    <a href="#"> <i class="fa fa-linkedin-square fa" style="margin-left: auto;color: cornflowerblue; font-size: 35px; margin-top: auto;"></i></a>
                </div>
            </div>
            <!-- Title header -->
            <br><br>
                <h4 style="font-family: 'Times New Roman', Times, serif;font-size:30px;"><b>EXPLORE OUR WORLD</b></h4>
            
            <br><br>
                <h3 style="font-family: 'Times New Roman', Times, serif; font-size:">1: Top Rated Ankara Crop Tops</h3>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <a href=""><img src="pictures/croptop.jpg" class="ankara" alt="" id="blog3" >
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                            Shop Now
                        </section>
                    </a> 
                </div>
                
                <div class="col-md-4">
                    <a href=""><img src="pictures/crop top1.jpg" class="ankara" alt=""id="blog3">
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                            Shop Now
                        </section>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href=""><img src="pictures/crop top.jpg" class="ankara" alt=""id="blog3">
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                            Shop Now
                        </section>
                    </a>
                </div>
            </div>
            <br><br>
            <p style="color:black;font-family: 'Times New Roman', Times, serif;font-size:20px;">Step out of the weekend with our best designed ankara crop tops, that can make you feel cool</p>
            <br><br>
            <h3 style="font-family: 'Times New Roman', Times, serif; font-size:">2: Latest Ankara High waist</h3>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <a href=""><img src="pictures/highwaist.jpg" class="ankara" alt="" style="height:500px;width:100%" >
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                            Shop Now
                        </section>
                    </a> 
                </div>
                <div class="col-md-4">
                    <a href=""><img src="pictures/highwaist1.jpg" class="ankara" alt=""style="height:500px;width:100%" >
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                            Shop Now
                        </section>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href=""><img src="pictures/highwaist2.jpg" class="ankara" alt=""style="height:500px;width:100%" >
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                            Shop Now
                        </section>
                    </a>
                </div>
            </div>
            <br><br>
            <p style="color:black; font-family: 'Times New Roman', Times, serif;font-size:20px;">
                Ankara fabric has proven to meet every African fashion style requirement of fashionistas of the day, just like Ankara Jumpsuit Styles, 
                we’ve also come with the latest and trendy ankara high waist trouser styles for ladies, unlike the usual ankara trouser styles you’re used 
                to knowing and rocking these Latest Ankara High Waist
                Trouser Styles For Ladies are exceptionally different with their high waisted designs.
                Ankara trouser are dope, very very classy when that classic lady like you wears it, that we know. But we’re are just discovering is the 
                awesomeness ans sexiness of high waist ankara trousers, these designs of ankara trousers brings together sexiness and native fashion together
                by giving your beautiful shape the perfect outline it deserves, especially up to the waist of the person putting them on. You definitely would 
                fall in love uncontrollably with these ankara trouser classics, high waist ankara trousers at their best are exactly what we have in the below 
                collection.

                These Latest Ankara High Waist Trouser Styles For Ladies could be used for unique ankara aso ebi styles or anything at all that fit your needs.
            </p>
            <br><br>
            <!-- couple goals -->
            <h3 style="font-family: 'Times New Roman', Times, serif; font-size:">3: Couple Goals</h3>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <a href=""><img src="pictures/sen12.jpg" class="ankara" alt="" style="height:450px;width:100%" >
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                            Shop Now
                        </section>
                    </a> 
                </div>
                <div class="col-md-4">
                    <a href=""><img src="pictures/sen23.jpg" class="ankara" alt=""style="height:450px;width:100%" >
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                            Shop Now
                        </section>
                    </a>
                    <br>
                    <!-- <a href=""><img src="Htmlfolder/sen16.jpg" class="ankara" alt=""style="height:450px;width:100%" >
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                            Shop Now
                        </section>
                    </a> -->
                    
                </div>
                <div class="col-md-4">
                    <a href=""><img src="pictures/sen14.png" class="ankara" alt=""style="height:450px;width:100%" >
                        <section class="text-center" style="height:30px;width:100px;background-color:brown;color:ghostwhite;font-family: 'Times New Roman', Times, serif;font-size:20px;margin-top:-50px;margin-left:120px;">
                            Shop Now
                        </section>
                    </a>
                </div>
            </div>
            <br><br>
            <p style="color:black; font-family: 'Times New Roman', Times, serif;font-size:20px;">Modern ankara styles for couples, we african cherish wearing local outfits for occasions like conventional 
                weddings. There are distinctive materials to look at
            </p>
            <br><br>
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Comment</label><br>
                <textarea class="form-control" id="name"style="width:100%; font-size:15px;font-family: 'Times New Roman', Times, serif"name="product" required></textarea>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
                <button type="submit" class="btn" name="submit" style="background-color:brown;color:ghostwhite;">Submit</button>
            </form>
        </div>
    </div>
<?php
require_once "footer.php";
?>
</div>