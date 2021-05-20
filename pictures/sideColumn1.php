<?php
require_once "emeka_db.php"; 
require_once "header.php"; 

$sql = $db->query("SELECT * FROM welcome_table" ) or die($db->error);
$num = $sql->num_rows;
while($row = $sql->fetch_assoc()){
    $id = $row['id'];
    $welcome = $row['Welcome']; 
    $Cashback = $row['Cashback']; 
    $Shop = $row['Shop']; 
    $unbeatable = $row['unbeatable']; 
    $Best_Deals = $row['Best_Deals']; 
   
}

?>

<div class="pix">
    <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <?php for($i=0; $i<$num; $i++) {?>
        <div class="carousel-item active">
            <img src="pictures/short67.jpg" style="width:100%;"alt="">
            <div class="top-left" id="sly1"><?php echo $welcome;?> </div>
        </div>
        <div class="carousel-item">
            <img src="pictures/agbada51.png" style="width:100%;" alt="">
            <div class="top-left" id="sly2"><?php echo $Cashback;?></div>
        </div>
        <div class="carousel-item">
            <img src="pictures/dinner2.jpg" style="width:100%;" alt="">
            <div class="top-left" id="sly3"><?php echo $Shop;?> </div>
        </div>
        <div class="carousel-item">
            <img src="pictures/scren6.jpg" style="width:100%;" alt="">
            <div class="top-left" id="sly4"><?php echo $unbeatable;?></div>
        </div>
        <div class="carousel-item">
            <img src="pictures/agbada50.png" style="width:100%;" alt="">
            <div class="top-left" id="sly5"><?php echo $Best_Deals;?></div>
            
        </div>
        <?php }?>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>

    </div>
</div>