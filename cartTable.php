<?php require_once "header.php";
require_once "emeka_db.php";

extract ($_POST, EXTR_OVERWRITE);
if(isset($_POST["submit"])){
	$pix = $_FILES["pix"]["name"];
	$target = "pictures/".$pix;
    move_uploaded_file($_FILES["pix"]["tmp_name"],$target);

    $sql = "INSERT INTO `add_to_cart` (`id`, `Cart_Title`, `Cart_image`, `Quantity`, `Unit_price`, `Sub_Total`) 
    VALUES ('1', 'Senator Ankara', 'Htmlfolder/senator.jpg', '3', '20000', '')";
    
    if (!$db->query($sql)){
        die($db->error);
    }else{
        $msg = "Your Cart Table has been sucessfully Created!!!";
    }
}
?>


<div class="container-fluid pix1">
    <h4 class="font4">Cart(1 Item)</h4>
    <div class="table-responive">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr class="font1">
                            <th>CART-id</th>
                            <th>CART-TITLE</th>
                            <th>CART-IMAGE</th>
                            <th>QUANTITY</th>
                            <th>UNIT-PRICE</th>
                            <th>SUB-TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="font1">
                            <td>1</td>
                            <td>Senator Ankara</td>
                            <td><img src="pictures/senator.jpg" class="img img-fluid ankara" id="cart" alt=""></td>
                            <td>1</td>
                            <td>N20,000,00</td>
                            <td>N20,000,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>  
   
        <div class="row">
            <div class="col-lg-9">

            </div>
            <div class="col-lg-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr class="font1">
                            <th>Total</th>
                            <th class="font2">N20,000,00</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr class="font1">
                            <th>CONTINUE SHOPPING</th>
                            <th class="text-center font3"><a href="" style="color:ghostwhite;">PROCEED TO CHECKOUT</a></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <h6 class="badge badge-success">4.4</h6>
    </div>
</div>