<?php 
session_start();
require_once "emeka_db.php";
require_once "header.php";
extract($_POST,EXTR_OVERWRITE);



if(isset($_POST["send"])){
    global $db;
    // $fname= $_POST['firstname'];
    // $mname= $_POST['middlename'];
    // $lname= $_POST['lname'];
    // $email= $_POST['email'];
    // $username= $_POST['username'];
    // $password= $_POST['password'];
    // $date= $_POST['date'];
    // $phone= $_POST['phone'];
    // $male= $_POST['male'];
    // $female = $_POST['female'];
	$pix = $_FILES["pix"]["name"];
	$target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);

    $fname= mysqli_real_escape_string ($db, $fname);
    $mname= mysqli_real_escape_string ($db, $mname);
    $lname= mysqli_real_escape_string ($db, $lname);
    $email= mysqli_real_escape_string ($db, $email);
    $username= mysqli_real_escape_string ($db, $username);
    $password= mysqli_real_escape_string ($db, $password);
    $date= mysqli_real_escape_string ($db, $date);
    $phone= mysqli_real_escape_string ($db,$phone);
    $male= mysqli_real_escape_string ($db, $male);
    $female= mysqli_real_escape_string ($db, $female);
    $pix= mysqli_real_escape_string ($db, $pix);
    $target= mysqli_real_escape_string ($db, $target);

    $_SESSION['fname'] = $fname;
    $_SESSION['mname'] = $mname;
    $_SESSION['lname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['date'] = $date;
    $_SESSION['phone'] = $phone;
    $_SESSION['male'] = $male;
    $_SESSION['female'] = $female;
    $_SESSION['pix'] = $pix;
    $_SESSION['target'] = $target;
    
     
	$sql="INSERT INTO user (id,firstname,middlename,lastname,email,username,password,date,phone,male,female,picture_ref) 
    VALUES ('','$fname','$mname','$lname','$email','$username','$password','$date','$phone','$male','$female','$pix')";
    
    if(!$db->query($sql)){
        die($db->error);
    }
    else if(!$db->query($sql)){
        echo "<script> window.open('profile.php','_self');</script>";
    }
          
    else{
        $msg = "Account Created successfully!!!";
    }
   
    // header('location: profile.php');
};

 

?>
<div class="container-fluid">
    <div class="container">	
    <!-- user form -->
        <form action="create-account.php" method="post" enctype="multipart/form-data" class="was-validated" id="form">
            <h5 class="text-center"><b> Personal Information </b></h5>
            <h5 class="text-center" style="color:green;font-family: 'Times New Roman', Times, serif;"><?php if(isset($msg))echo $msg ?></h5>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" placeholder="Firstname:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mname" placeholder="Middlename:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="lname" placeholder="Lastname:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group form-check" style="font-family: 'Times New Roman', Times, serif">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="male">Male
                        </label>
                    </div>
                    
                </div>
                 <!-- date_default_timezone_set('UTC');
               $c = date('Y-M-D h:i:m a');
                     echo $c; -->
              <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="date" placeholder="Date:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="+234:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                   
                    <div class="form-group form-check" style="font-family: 'Times New Roman', Times, serif">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="female">Female
                        </label>
                    </div>

                    <label style="font-family: 'Times New Roman', Times, serif">Image</label><br>
                    <input type="file" name="pix">
                    <br><br>
                    <button type="send" class="btn" name="send" style="background-color:brown;color:ghostwhite;">Send</button>
                </div>
            </div>
        </form>
    </div>
    <?php require_once "footer.php"; ?>
</div>