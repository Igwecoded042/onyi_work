<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    <link href="onyi2.css" rel="stylesheet" type="text/css">
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
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="flag-icon-css-master/css/flag-icon.min.css">
    <link rel="stylesheet" href="flag-icon-css-master/flag/4x3/ad.html"> -->
    <link rel="stylesheet" href="animate.css-master/animate.min.css">
</head>
<body>
    <div class="container-fluid">
        <!-- <script>
            function button() {
            alert("login");
            alert(ans);
            }
            button();
        </script> -->

        <nav class="navbar navbar-expand-sm" style="background-color:brown;">

            <!-- Links -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><img src="Htmlfolder/agba19.jpg"class="rounded-circle img-responsive" style="width:32px;"></a>
            </div>
                <!-- side nav begins -->
            <div id="mySidenav" class="sidenav">

                        <!-- Admin index -->
                <a href="indexAdmin.php" style="font-family: 'Times New Roman', Times, serif;margin-top:auto;font-size: 20px;">
                    <i class="fa fa-home fa" style="margin-left: auto;color: white; font-size: 15px; margin-top: auto;"></i> &nbsp;Admin Index
                </a>

                <!-- onClick button -->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <!-- dashboard -->
                <a href="#" style="font-family: 'Times New Roman', Times, serif;font-size: 20px;">
                    <!-- onClick="cat();" -->
                    <p id="hide1" class="dropdown-toggle " data-toggle="dropdown" style="font-family: 'Times New Roman', Times, serif;font-size:20px;">
                        <i class="fa fa-navicon fa" style="margin-left: auto;color: white; font-size: 15px; margin-top: auto;"></i> &nbsp; Dashoard
                    </p>
                    <ul id="ul">
                        <a href="dashboard.php"><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Home Page</li></a>
                        <a href="dashboardNAV.php"><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Profile Page</li></a>
                        <a href="imageCRUD.php"><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Image Slider</li></a>
                        <!-- <a href="uploadCategory_delete.php"><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Upload Category|Delete</li></a>
                        <a href=""><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Edit view</li></a> -->
                    </ul>
                </a>

                <!-- Posts -->
                <a href="#" style="font-family: 'Times New Roman', Times, serif;margin-top:auto;font-size: 20px;">   
                    <p id="hide"  style="font-family: 'Times New Roman', Times, serif;font-size:20px;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-camera fa" style="margin-left: auto;color: white; font-size: 15px; margin-top: auto;"></i> &nbsp;Posts
                    </p>
                    <ul class="ul">
                        <a href="gSliderTable.php"><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">image Gallery1</li></a>
                        <a href="long_gownTable.php"><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Long Gowns Table</li></a>
                        <a href="agbadaCRUD.php"><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Agbada Theme Photos</li></a>
                        <a href="agbaGown.php"><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Agbada Gown Theme Photos</li></a>
                        <a href="galleryslider2.php"><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Female Ankara Senators</li></a>
                        <a href="post.php?source=admin_post_create"><li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Add Posts</li></a>
                    </ul>
                </a>

                

                <!-- comments -->
                <a href="#" style="font-family: 'Times New Roman', Times, serif;font-size: 20px;">
                    <p class="hide2  dropdown-toggle" data-toggle="dropdown" style="font-family: 'Times New Roman', Times, serif;font-size:20px;">
                        <i class="fa fa-windows fa" style="margin-left: auto;color: white; font-size: 15px; margin-top: auto;"></i> &nbsp; Comments
                    </p>
                    <ul class="ull">
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Orders and Fulfilling</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Ordered product Details</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Customer Details</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Payment and Fulfilment</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Create Draft Orders </li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Abandoned checkouts </li>
                    </ul>
                </a>

                <!-- Users -->
                <a href="#" style="font-family: 'Times New Roman', Times, serif;font-size: 20px;">
                    <p class="hide3 dropdown-toggle" data-toggle="dropdown"  style="font-family: 'Times New Roman', Times, serif;font-size:20px;">
                        <i class="fa fa-cart-plus fa" style="margin-left: auto;color: white; font-size: 15px; margin-top: auto;"></i>
                        &nbsp; Users
                    </p>
                    <ul class="pl">
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Add Unlimited Products</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Track Inventory</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Manage Products</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">organize with Collections</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Gift Cards</li>
                    </ul>

                </a>

                <!-- Profiles -->
                <a href="#" style="font-family: 'Times New Roman', Times, serif;font-size: 20px;">
                    <p class="hide4 dropdown-toggle" data-toggle="dropdown"  style="font-family: 'Times New Roman', Times, serif;font-size:20px;">
                        <i class="fa fa-handshake-o fa" style="margin-left: auto;color: white; font-size: 15px; margin-top: auto;"></i>
                        &nbsp; Profiles
                    </p>
                    <ul class="al">
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Customers Relationship Management</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Customers Account Invite</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Manage Products</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">organize with Collections</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Gift Cards</li>
                    </ul>

                </a>

                <!-- <a href="#" style="font-family: 'Times New Roman', Times, serif;">
                    <p class="hide6 dropdown-toggle" data-toggle="dropdown"  style="font-family: 'Times New Roman', Times, serif;font-size:22px;">
                        <i class="fa fa-bank fa" style="margin-left: auto;color: white; font-size: 25px; margin-top: auto;"></i><br>
                    Marketing
                    </p>
                    <ul class="b2">
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Google Smart Shopping</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Facebook Marketing</li>
                        <li style="font-family: 'Times New Roman', Times, serif;font-size:15px;">Discount Codes</li>
                    </ul>
                </a> -->

                <!-- <a href="#" style="font-family: 'Times New Roman', Times, serif;">
                    <i class="fa fa-gear fa" style="margin-left: auto;color: white; font-size: 22px; margin-top: auto;"></i><br>
                    Settings
                </a> -->

            </div>

            <span style="font-size:15px;cursor:pointer; color:ghostwhite;" onclick="openNav()">&#9776;</span>

            <script>
                function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                }

                function closeNav()  {
                document.getElementById("mySidenav").style.width = "0";
                }


                // function cat(){
                //     window.open('categories.php','_self');
                // }
            </script>

            <!-- Home Menu -->
            <div style="height:25px;width:100px;margin-left:100px;">
                <a href="../index.php" class="text-warning" style="font-family: 'Times New Roman', Times, serif;"> Home</a>
            </div>
        </nav>

        <h3 style="position:absolute; color:ghostwhite;margin-left:auto;margin-top:auto; font-family: 'Times New Roman', Times, serif;" class="upload1"><b>Welcome<span style="color:orange"> Admin !</span></b></h3>
            <img src="Htmlfolder/bb.jpg" style="width:100%; height:150px;">
        <!-- <div style="color:orange; width:100%; height:100px;font-size:40px;" class="june1"><b>For your all round graphics</b></div> -->
        




        <script src="jss/jquery-3.2.1.min.js"></script>
        <script src="styles/bootstrap4/popper.js"></script>
        <script src="styles/bootstrap4/bootstrap.min.js"></script>
        <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="plugins/parallax-js-master/parallax.min.js"></script>
        <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
        <script src="jss/custom.js"></script>

        <script>
                //post parent//
            $(document).ready(function(){
                $("ul").hide();
                    $("#hide").click(function(){
                        $(".ul").toggle(1000);
                            $("#ul").hide();
                });


                //dashboard parent//
                $("#ul").hide();
                    $("#hide1").click(function(){
                        $("#ul").toggle(1000);
                });

                //comment parent//
                $(".ull").hide();
                    $(".hide2").click(function(){
                        $(".ull").toggle(1000);
                            // $(".ul").hide();
                });
                //Product//
                $(".pl").hide();
                    $(".hide3").click(function(){
                        $(".pl").toggle(1000);
                });
                // Customers//
                $(".al").hide();
                    $(".hide4").click(function(){
                        $(".al").toggle(1000);
                });

                //Marketing//
                // $(".b2").hide();
                //     $(".hide5").click(function(){
                //         $(".b2").toggle(1000);
                // });

            
                    // pop up query
                // $('.container-fluid').hide();   //beginning of query
                //     $('.popup').show();
                //         $('#btn').click(function(){
                            //not part of popup query
                            // $('popup').fadeToggle(1000);
                                //$('.container-fluid').fadeOut();
                                    //$('popup').toggle(1000);
                                    //ending part of not part of popup query

                                        // $('.popup').remove();
                                        // $('.container-fluid').show();//ending of popup query
                            
                            
                // });
            

            });
        </script>

<!-- <script>
    $(document).ready(function(){
        resetStarColors();
        $('.fa-star').mouseover(function(){
            resetStarColors();

            var currentindex = parseInt($(this).data('index'));
            for (var i=0; i<=currentindex; i++)
            $('.fa-star:eq('+i+')').css('color', 'green');
        });

        $('.fa-star').mouseleave(function(){
            resetStarColors();
        });
    });

</script> -->
    </div>
    
</body>
</html>