<?php
    require './connection.php';
    session_start();

    if($_POST){
        $name=$_POST['text1'];
        $mobile=$_POST['text2'];
        $address=$_POST['text3'];
        $stid=$_SESSION['studentid'];
        $currentdate = date('d-m-y');

        $ordermasterq= mysqli_query($connection,"insert into order_master(order_date,st_id,order_status,shippingname,shippingmobile,shippingaddress)values('{$currentdate}','{$stid}','pending','{$name}','{$mobile}','{$address}')");

        //get last inserted record id
        $orderid = mysqli_insert_id($connection);
    

        foreach ($_SESSION['productcart'] as $key => $value ){
            
           $productq=mysqli_query($connection,"select * from tbl_productmaster where product_id='{$value}'");
           $productdetails=mysqli_fetch_array($productq);
           $qty = $_SESSION['qtycart'][$key];

           $orderdetailsquery=mysqli_query($connection,"insert into order_details (order_id,product_id,product_qty,product_price) values('{$orderid}','{$value}','{$qty}','{$productdetails['pro_price']}')");

        }
            unset($_SESSION['productcart']);
            unset($_SESSION['counter']);
            unset($_SESSION['qtycart']);

            echo "<script>alert('thanks for shopping with us!.');window.location='product-listing.php';</script>";
    
    }
?>
<html>
    <body>
        <form method="post">
            <h1>shipping info</h1>
            name : <input type="text" name="text1">
            <br/>
            mobile : <input type="text" name="text2">
            <br/>
            address : <textarea name="text3"></textarea>
            <br/>
            <input type="submit" value="confim order">
        </form>
    </body>
</html>