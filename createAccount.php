<?php 
require_once "emeka_db.php";
require_once "header.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="flag-icon-css-master/css/flag-icon.min.css">
    <link rel="stylesheet" href="flag-icon-css-master/flag/4x3">
    <link rel="stylesheet" href="animate.css-master/animate.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="user" placeholder="Firstname:">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="user" placeholder="Middlename:">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="user" placeholder="Lastname:">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="user" placeholder="Email:">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="user" placeholder="Username:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pass" placeholder="Password:">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio">Male
                    </label>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio">Female
                    </label>
                </div>

                <div class="form-group form-check">
                    <label>&nbsp &nbsp Date of Birth</label>
                        <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="date">
                            Date of Birth
                        </label>
                    </div>
                </div>

                
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">Remember me
                    </label>
                </div>
                <div class="form-group">
                    <label>Select your Country</label>
                    <select class="form-control">
                        <option>Afghanistan</option>
                        <option>Anarctical</option>
                        <option>Brazil</option>
                        <option>Belguim</option>
                        <option>Camerooun</option>
                        <option>Canada</option>
                        <option>Denmark</option>
                        <option>England</option>
                        <option>Finland</option>
                        <option>Georgia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea class="form-control"></textarea>
                </div>
            </form>
        
            
            <form>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Marital Status</label>
                        <div class="col-md-10">
                            <!-- <input type="text" class="form-control"> -->
                            <select class="form-control">
                                <option style="font-family: 'Times New Roman', Times, serif;">Single</option>
                                <option style="font-family: 'Times New Roman', Times, serif;">Married</option>
                                <option style="font-family: 'Times New Roman', Times, serif;">Divorced</option>
                                <option style="font-family: 'Times New Roman', Times, serif;">Widowed</option>
                                <textarea class="form-control"id="others" placeholder="Others Specify"></textarea>
                            </select>
                        </div>
                      
                      <div class="form-group">
                          <div class="col-md-2 col-md-offset-2">
                                <button class="btn btn-secondary btn-block">click me</button>
                          </div>
                      </div> 
                    </div>

                </div>
            </form>
        </div>
    <?php
    require_once "footer.php";
    ?>


                    






    </div>

    


    <!-- <script src="jss/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="jss/custom.js"></script> -->
</body>
</html>