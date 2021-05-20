<?php 
require_once "emeka_db.php";

// require_once "emeka_functions.php";

extract ($_POST, EXTR_OVERWRITE);
if(isset($_POST["submit"])){
	$pix = $_FILES["pix"]["name"];
	$target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
    

$sql = "INSERT INTO emeka_Table (id,Firstname,MiddleName,Lastname,username,password,Date_of_birth,phone,Email,picture_ref)
VALUES 
    ('','$firstname','$middleName','$lastname','$username','$password','$d_o_b','$email','$phone','$pix')";
    if (!$db->query($sql)){
        die($db->error);
    }else{
        $msg = "Your Profile has been sucessfully Created!!!";
    }
} //creating data or inserting data in database



?>
<?php require_once "emeka_header.php" ?>

<!-- admin side of user profile -->
<div class="container-fluid"style="background-color:ivory;"> 
    <h4 class="text-center content" style = "font-size:55px; font-family: 'Times New Roman', Times, serif;">Admin</h4>
    <div class="row">
        <div class="container">
            <div class="row">
                <h6 style="font-family: 'Times New Roman', Times, serif;"><span style="color:blue">&nbsp; &nbsp; &nbsp; Dashboard </span>>> User Profile >> Create </h6>
            </div>
            <!-- profile form -->
            <?php require_once "admin_profile.php";?> 
        </div>
    </div>   
</div>
