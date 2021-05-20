<?php 
require_once "emeka_db.php"; 

extract ($_POST, EXTR_OVERWRITE);
if(isset($_POST["submit"])){
	$pix = $_FILES["pix"]["name"];
	$target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
    

$sql = "INSERT INTO emeka_navs (id,Home,Clothes,Blog,Gallery,About,Contact,My_Profile,Create_Account,Delete_Account,Log_Out)
VALUES 
    ('','$home','$clothes','$blog','$pix','$about','$contact','$profile','$create','$delete','$logout')";
    if (!$db->query($sql)){
        die($db->error);
    }else{
        $msg = "Your Navs has been sucessfully Created!!!";
    }
} //creating data or inserting data in database

// $sql = $db->query("SELECT * FROM emeka_navs" ) or die($db->error);
//      $num = $sql->num_rows;
//         while($row = $sql->fetch_assoc()){
//             $id = $row['id'];
//             $home = $row['Home'];
//             $clothes = $row['Clothes'];
//             $blog = $row['Blog'];
//             $about = $row['About'];
//             $contact = $row['Contact'];
//             $pix = $row['Gallery'];
//             $profile = $row['My_Profile'];
//             $create = $row['Create_Account'];
//             $delete = $row['Delete_Account'];
//             $logout = $row['Log_Out'];
//         }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    <link href="onyi.css" rel="stylesheet" type="text/css">
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
    <!-- <link rel="stylesheet" href="flag-icon-css-master/css/flag-icon.min.css">
    <link rel="stylesheet" href="flag-icon-css-master/flag/4x3"> -->
    <link rel="stylesheet" href="animate.css-master/animate.min.css">
    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>
<body>

<div class="container-fluid" >
    <div class="row">
        <nav class="navbar navbar-expand-sm fixed-top" style="background-color:brown;" id="nav-header">
            <!-- <nav class="navbar navbar-expand-sm fixed-top" style="background-color:brown;height:95px;">   -->
            
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fa fa-reorder fa" style="margin-left: auto;color: ghostwhite; font-size: 15px; margin-top: auto;"></i>
            </button>
            <!-- Links -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><b><span style="color:gold;">COPAT</span> <span style="color:darkgoldenrod;">WEARS</span></b></a>
            </div>

                
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <i class="fa fa-reorder fa" style="margin-left: auto;color: ghostwhite; font-size: 15px; margin-top: auto;"></i>
            </button> -->
                    <!-- nav anchors -->
            
            <div class="col-md-6">
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <?php 
                            $sql = $db->query("SELECT * FROM mynav" ) or die($db->error);
                            $num = $sql->num_rows;
                            while($row = $sql->fetch_assoc()){
                                $id = $row['id'];
                                $navtitle = $row['navtitle'];
                                $navlink = $row['navlink'];
                            // $clothes = $row['Clothes'];
                            // $blog = $row['Blog'];
                            // $about = $row['About'];
                            // $contact = $row['Contact'];
                            // $pix = $row['Gallery'];
                            // $profile = $row['My_Profile'];
                            // $create = $row['Create_Account'];
                            // $delete = $row['Delete_Account'];
                            // $logout = $row['Log_Out'];
                        ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo $navlink;?>" style="font-family: 'Times New Roman', Times, serif;" name="navtitle"><?php echo $navtitle;?></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link text-light" href="clothes.php" style="font-family: 'Times New Roman', Times, serif;" name="clothes"><?php //echo $clothes;?></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-light" href="about-us.php" style="font-family: 'Times New Roman', Times, serif;" name="blog"><?php// echo $blog;?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="gallery.php" style="font-family: 'Times New Roman', Times, serif;" name="pix"><?php //echo $pix;?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="about.php" style="font-family: 'Times New Roman', Times, serif;" name="about"><?php/// echo $about;?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="contact.php" style="font-family: 'Times New Roman', Times, serif;" name="contact"><?php// echo $contact;?></a>
                        </li>                         -->
                        <?php }?>
                    </ul>
                </div>  
            </div>

            <!-- <div class="col-md-6"> -->
            <form class="form-inline"  action="/action_page.php">
                <!-- form-inline  mt-md-4 -->

                <input class="form-control mr-sm-0" type="text" id="input" placeholder="Search">
                <!-- <input class="form-control mr-sm-6" type="text" id="input" placeholder="Search"> -->
                    <!-- form-control col-md-7 -->

                <button class="btn btn-secondary" type="submit" style="font-family: 'Times New Roman', Times, serif;">Search</button>
                <!-- <button class="btn btn-secondary" type="submit" style="font-family: 'Times New Roman', Times, serif;width:70px;">Search</button> -->
                <div class="dropdown">
                    <li type="button" class="btn dropdown-toggle text-light" data-toggle="dropdown" style="background-color:brown;font-family: 'Times New Roman', Times, serif;">
                        Sign up
                    </li>
                    <div class="dropdown-menu" style="background-color:brown;">
                        <?php 
                            $sql = $db->query("SELECT * FROM navtitle2" ) or die($db->error);
                            $num = $sql->num_rows;
                            while($row = $sql->fetch_assoc()){
                                $id = $row['id'];
                                $sideNav = $row['sideNav'];
                                $side_title = $row['side_title'];
                        ?>
                        <a class="dropdown-item text-light" href="<?php echo $side_title;?>" style="font-family: 'Times New Roman', Times, serif;" name="profile"><?php echo $sideNav;?></a>
                        <!-- <a class="dropdown-item text-light" href="create-account.php" style="font-family: 'Times New Roman', Times, serif;" name="create"><?php// echo $create;?></a>
                        <a class="dropdown-item text-light" href="createAccount.php" style="font-family: 'Times New Roman', Times, serif;" name="delete"><?php// echo $delete;?></a>
                        <a class="dropdown-item text-light" href="#" style="font-family: 'Times New Roman', Times, serif;" name="logout"><?php// echo $logout;?> </a> -->
                        <?php }?>
                    </div>
                </div> 
            </form> 
            <!-- </div> -->  
        </nav>
    </div> 
    <!-- end of nav links and anchors -->
</div>
       


    <script src="jss/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="jss/custom.js"></script>
</body>
</html>