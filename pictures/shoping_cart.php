<?php ob_start(); 
session_start();
// require_once "header.php";
require_once "emeka_db.php"; 

if(isset($_POST['add_to_cart'])){
    if(isset($_SESSION['shopping_cart'])){
        $item_array_id = array_column($_SESSION['shopping_cart'], 'item_id');
        print_r($item_array_id); 
    //     if(!in_array($_GET['id'], $item_array_id)){
    //         $count = count($_SESSION['shopping_cart']);
    //         $item_array = [
    //             'item_id'=>$_GET['id'],
    //             'item_name'=>$_POST['hidden_name'],
    //             'item_price'=>$_POST['hidden_price'],
    //             'item_quantity'=>$_POST['quantity']];
    //         $_SESSION['shopping_cart'][$count] = $item_array;
    //     }else{
    //         echo "<script>alert('Item already added')</script>";
    //         echo "<script>window.location('shopping_cart.php')</script>";
    //     }
        
    // }else{
    //     $item_array = [
    //         'item_id'=>$_GET['id'],
    //         'item_name'=>$_POST['hidden_name'],
    //         'item_price'=>$_POST['hidden_price'],
    //         'item_quantity'=>$_POST['quantity']];
    //     $_SESSION['shopping_cart'][0] = $item_array;
    }
}
if(isset($_GET['action'])){
    if($_GET['action']=='delete'){
        foreach($_SESSION['shopping_cart'] as $keys=> $values){
            if($values['iitem_id']==$_GET['id']){
                unset($_SESSION['shopping_cart'][$keys]);
                echo "<script>alert('item removed')</script>";
                echo "<script>window.location='shoping_cart.php'</script>";
            }
        }
    }
}
?>

<div class="container">
    <br><br><br><br><br>
    <?php 
        $sql = $db->query("SELECT * FROM shopping_cart_tutorial" ) or die($db->error);
    ?>
    <div class="row">
        <?php while($row = $sql->fetch_assoc()): ?>
        <div class="col-md-3">
            <form action="" method="post" enctype="multipart/form-data" class="was-validated">
           
                <input type="hidden" name="hidden_price" value="<?php  $row['price'] ?>">
                <input type="hidden" name="hidden_name" value="<?php  $row['name'] ?>">
                <img src="pictures/<?php echo $row['image']; ?>" style="height:250px;overflow-hidden;width:100%;
                    background: radial-gradient(white 30%, lightblue 70%);">
                <h5><?php echo $row['name']; ?></h5>
                <h6><?php echo "$".$row['price']; ?></h6>
                <input type="text" name="quantity" class="form-control" value="1">
                <input type="hidden" name="hidden-name" class="form-control" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="hidden-price" class="form-control" value="<?php echo $row['price']; ?>">
                <input type="submit" name="add_to_cart" style="margin-top:5px" class="btn btn-success my-3" value="Add_to_cart">
            </form>
        </div>
        <?php  endwhile ?>
        <?php}?>
    </div>

<br><br><br>
    <h5><b>Order Details</b></h5>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                <?php 
                    if(!empty($_SESSION['shopping_cart'])){
                        $total = 0;
                       
                        foreach($_SESSION['shopping_cart'] as $keys => $values)
                        {
                            $item_quantity1 = floatval($values['item_quantity'] );
                            $item_price1 = floatval($values['item_price']);
                        ?>
                        <tr><td><?php echo $values['item_name'] ?></td>
                        <td><?php echo $values['item_quantity'] ?></td>
                        <td>$ <?php echo $values['item_price'] ?></td>
                        <td><?php echo number_format( $item_quantity1 * $item_price1 , 2); ?></td>
                        <td> <a href="shoping_cart.php?action=delete&id=<?php echo $values['item_id']?>"><span class="text-danger">Remove</span></a></td></tr>
                        <?php
                            $total = $total + ( $item_quantity1+ $item_price1 );
                        }
                        ?>
                            <td colspan="3" align-item="right">Total</td>
                            <td align-item="right">$ <?php echo number_format($total, 2);?></td>
                        <?php
                    }
                ?>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
            
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-12">
    <form action="">
        <div class="card">shopping cart
            <h6 class="cart_title">
                <div class="card_body">
                <i class="fa fa-star"></i>
                    <h6 class="price"></h6>
                    <s class="text text-success">$619</s>
                </div>
            </h6>
        </div>
    </form>
</div>
