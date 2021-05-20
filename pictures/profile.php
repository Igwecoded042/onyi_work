<?php 
session_start();
require_once "emeka_db.php";
require_once "header.php";
extract ($_POST,EXTR_OVERWRITE);

if(isset($_POST["send"])){
     global $db;
$pix = $_FILES["pix"]["name"];
	$target = "Htmlfolder/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);
 
 }  

?>
<div class="container-fluid">
    <h5 class="text-center" id="form"><b> Profile Information </b></h5>
    <div class="row">
        <div class="container bg-light">
            <div class="row">
                <div class="col-lg-6">
                    <table class="table"id="form">
                        <thead>
                            <tr>
                                <th>Picture</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td><img src="<?php if (isset($_SESSION['target'])) echo $_SESSION['target'];?>"width="100" class="rounded-circle"> </td>
                                </td>
                            </tr>
                        </tbody>
                        
                        <thead>
                            <tr>
                                <th>Lastname</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php if (isset($_SESSION['lname'])) echo $_SESSION['lname'];?></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Firstname</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php if (isset($_SESSION['fname'])) echo $_SESSION['fname'];?></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Middlename</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php if (isset($_SESSION['mname'])) echo $_SESSION['mname'];?></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php if (isset($_SESSION['email'])) echo $_SESSION['email'];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <table class="table"id="form">
                        <thead>
                            <tr>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php if (isset($_SESSION['username'])) echo $_SESSION['username'];?></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php if (isset($_SESSION['date'])) echo $_SESSION['date'];?></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php if (isset($_SESSION['phone'])) echo $_SESSION['phone'];?></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Male</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php if (isset($_SESSION['male'])) echo $_SESSION['male'];?></td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Female</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php if (isset($_SESSION['female'])) echo $_SESSION['female'];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "footer.php";?>
</div>
