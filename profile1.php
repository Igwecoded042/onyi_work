<?php 
require_once "emeka_db.php";
require_once "header.php";
$sql = $db->query("SELECT * FROM user" ) or die($db->error);
    $num = $sql->num_rows;
    while($row = $sql->fetch_assoc()){
        $id = $row['id'];
        $fname = $row['firstname'];
        $mname  = $row['middlename'];
        $lname = $row['lastname'];
        $email = $row['email'];
        $username = $row['username'];
        $password = $row['password'];
        $date = $row['date'];
        $phone = $row['phone'];
        $male = $row['male'];
        $female = $row['female'];
        $pix = $row['picture_ref'];
    }

if(isset($_GET['did'])){
    $gid = $_GET['did'];
    $sql = $db->query("SELECT * FROM user where id = '$gid'" ) or die($db->error);
    
    if($row = $sql->fetch_assoc()){
        $id_1 = $row['id'];
        $fname1 = $row['firstname'];
        $mname1= $row['middlename'];
        $lname1= $row['lastname'];
        $email1= $row['email'];
        $username1= $row['username'];
        $password1= $row['password'];
        $date1= $row['date'];
        $phone1= $row['phone'];
        $male1= $row['male'];
        $female1= $row['female'];
        $pix1= $row['picture_ref'];
    }
}        
        
if(isset($_POST['submit'])){
    $id = $_POST['pid'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $date = $_POST['date'];
    $phone = $_POST['phone'];
    $male = $_POST['male'];
    $female = $_POST['female'];
    $pix = $_FILES["pix"]["name"];
	$target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);

        $sql ="UPDATE user SET firstname = '$fname',middlename = '$mname',lastname = '$lname', email = '$email', username = '$username',
        password = '$password',date = '$date',phone = '$phone',male = '$male',female = '$female',picture_ref = '$pix' WHERE id = '$id' ";
        
        $result = $db->query($sql) or die($db->error);
        if($result){
            $msg="Update successful";
        }
    }    

?>
<div class="container-fluid">
    <div class="container">	
    <!-- user form -->
        <form action="" method="post" enctype="multipart/form-data" class="was-validated" id="form">
            <h5 class="text-center"><b> Personal Information </b></h5>
            <h5 class="text-center" style="color:green;font-family: 'Times New Roman', Times, serif;"><?php if(isset($msg))echo $msg ?></h5>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="fname" value="<?php if(isset($fname1)) echo $fname1;?>" placeholder="Firstname:" required autocomplete="off">
                        <input type="hidden" name="pid" value="<?php echo $id_1 ?>">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mname" value="<?php if(isset($mname1)) echo $mname1;?>" placeholder="Middlename:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="lname" value="<?php if(isset($lname1)) echo $lname1;?>" placeholder="Lastname:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="<?php if(isset($email1)) echo $email1;?>" placeholder="Email:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group form-check" style="font-family: 'Times New Roman', Times, serif">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="male" value="<?php if(isset($male1)) echo $male1;?>">Male
                        </label>
                    </div>
                    
                </div>
                 <!-- date_default_timezone_set('UTC');
               $c = date('Y-M-D h:i:m a');
                     echo $c; -->
              <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" value="<?php if(isset($username1)) echo $username1;?>" placeholder="Username:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" value="<?php if(isset($password1)) echo $password1;?>" placeholder="Password:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="date" value="<?php if(isset($date1)) echo $date1;?>" placeholder="Date:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" value="<?php if(isset($phone1)) echo $phone1;?>" placeholder="+234:" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                   
                    <div class="form-group form-check" style="font-family: 'Times New Roman', Times, serif">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="female" value="<?php if(isset($female1)) echo $female1;?>">Female
                        </label>
                    </div>

                    <label style="font-family: 'Times New Roman', Times, serif">Image</label><br>
                    <input type="file" name="pix" value="<?php if(isset($pix1)) echo $pix1;?>">
                    <br><br>
                    <button type="send" class="btn" name="send" style="background-color:brown;color:ghostwhite;">Send</button>
                </div>
            </div>
        </form>
    </div>
    <?php require_once "footer.php"; ?>
</div>