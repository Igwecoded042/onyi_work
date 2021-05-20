<?php 
ob_start();
session_start();
require_once "emeka_db.php";
// require_once "header1.php";
extract($_POST, EXTR_OVERWRITE);

if(isset($_POST['submit'])){
    global $db;
    $username= $_POST['username'];
    $password =$_POST['password'];
    $username= mysqli_real_escape_string ($db, $username);
    $password= mysqli_real_escape_string ($db, $password);

        // encrypting my password
    $hashFormat = "$2y$10$";
    $salt = "mynameisnnaemekaigwe22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);
        // end of password encryption
    
$sql = "INSERT INTO admin_Table (username,password) VALUES ('$username', '$password')";    
    
if (!$db->query($sql)){
    die($db->error);
}else{
    $msg="Welcome Admin!!!" ;
// echo "$msg";
    }
}
    // security
if(isset($_POST['submit'])){
    global $db;
    $name = array('Nnaemeka','Onyinye','Favour','Elvis','Meccedess','Kelechi');
    $minimum = 5;
    $maximum = 15;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username= mysqli_real_escape_string ($db, $username);
    $password= mysqli_real_escape_string ($db, $password);
    $sql = $db->query("SELECT * FROM admin_Table WHERE username='$username' AND password='$password'") or die($db->error);
    if($row = $sql->fetch_assoc()){
        $user_id = $row['id']; 
        $_SESSION['user'] = $user_id;
        // header("location:dashboard.php");
    }


    if(strlen($username)< $minimum){
        $msg = "Username is less than five ";
    }
    else if(strlen($username)> $maximum){
        $msg = "Sorry Username is more than fiveteen ";
    }
    else if(!in_array($username,$name)){
        $msg = "Sorry!...Admins Only!";
    }else if(strlen($password)< $minimum){
        $msg = "Sorry!Your password strength is too Weak";
    }else if(strlen($password) > $maximum){
        $msg = "Sorry!Your password strength cannot be more than twenty letters";
    }else if(!isset($_POST['submit'])){
        $msg = "Access Denied";
     }else{
        header('location:header.php');
    }
    
    // echo $username; different from strlen
    // echo " " .$password; different from strlen
    // else{
        
    //  }
    
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin login</title>
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
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="flag-icon-css-master/css/flag-icon.min.css">
    <link rel="stylesheet" href="flag-icon-css-master/flag/4x3">
    <link rel="stylesheet" href="animate.css-master/animate.min.css">
</head>
<body>
    <div class="container-fluid" style="background-color:seashell;">
        <div style="background-color:brown; width:100%; height:70px;">
            <h4 class="admin">Admin Login</h4>
        </div><br><br>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="" method="post" enctype="multipart/form-data" class="was-validated">
                            <h5 class="text-center" style="font-family: 'Times New Roman', Times, serif;"><?php if(isset($msg))echo $msg ?></h5>
                            <div class="form-group">
                                <!-- <label for="email">Email address:</label> -->
                                <input type="username" class="form-control" id="username" name="username"  placeholder="Username:"required>
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
                                <input class="form-check-input" type="checkbox"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 

        <div style="width:100%; height:100px; background-color:brown;">
            <div class="row" >
                <div class="col-sm-12">
                    <br>
                    <a href="dashboard.php" style="color:ghostwhite; text-decoration-line: none;"><p style="text-align: center;font-family: 'Times New Roman', Times, serif;">Already an Admin? Sign In</p></a>
                    
                    <p style="text-align: center;font-family: 'Times New Roman', Times, serif"><span style="color:white;"> Conditions of Use & Sale &nbsp &nbsp Privacy Notice &nbsp &nbsp Cookies Notice &nbsp&nbsp Interest-Based-Ads-Notice</span> &nbsp &nbsp <span style="color:crimson;">&copy;</span> Igwe Gucci .T. 2019-2020 </p>
                </div>
            </div>    
        </div>
    </div>
</body>
</html>