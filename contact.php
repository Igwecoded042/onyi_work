<?php 
require_once "emeka_db.php";
require_once "header.php";
?>
<div class="container-fluid">
    <?php require_once "sideColumn1.php";?>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <h6 class="about2">Home >>> <span style="color:brown;font-family: 'Times New Roman', Times, serif;"> Contact Us </span></h6>
                <br>
                <h5 class="text-center" id="head_title">GET IN TOUCH WITH US</h5>
                <p style="color:black; font-family: 'Times New Roman', Times, serif;font-size:20px;">
                    Feel free to contact us at Copat Wears for more enquires and ways you feel like we can improve more on our services, get better and serve you more efficiently.
                    <br><br>   
                    <form action="" method="post" enctype="multipart/form-data" class="was-validated" style="background-color:cornsilk;">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" style="font-family: 'Times New Roman', Times, serif;" id="user" placeholder="Name:"required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="font-family: 'Times New Roman', Times, serif;" id="user" placeholder="+234:"required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" style="font-family: 'Times New Roman', Times, serif;"id="user" placeholder="Subject:"required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" style="font-family: 'Times New Roman', Times, serif;" id="user" placeholder="Address:"required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" style="font-family: 'Times New Roman', Times, serif;" id="user" placeholder="Email:"required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name"style="margin-left:2px; margin-top:10px;font-size:15px;font-family: 'Times New Roman', Times, serif">Message</label><br>
                            <textarea class="form-control" id="name"style="width:100%; font-size:15px;font-family: 'Times New Roman', Times, serif"name="product" required></textarea>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                            <button type="send" class="btn" name="send" style="background-color:brown;color:ghostwhite;">Send</button>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
    <?php require_once "footer.php";?>
</div>