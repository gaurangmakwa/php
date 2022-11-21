<?php
    require './connection.php';
   session_start();

   if(isset($_GET['id'])){
      $id=$_GET['id'];
      unset($_SESSION['productcart'][$id]);
      unset($_SESSION['qtycart'][$id]);
   }

   if(isset($_SESSION['productcart']) && !empty($_SESSION['productcart']))
   {
      echo "<table align='center' width='50%'>";
      echo "<tr>";
      echo "<th>#</th>";
      echo "<th>Title</th>";
      echo "<th>Qty</th>";
      echo "<th>price</th>";
      echo "<th>image</th>";
      echo "</tr>";

      $i=0;
     
      $grandtotal=array();
   foreach($_SESSION['productcart'] as $key=> $value){
      $i++;
     $productq=mysqli_query($connection,"select * from tbl_productmaster where product_id='{$value}'");
     $productdetails=mysqli_fetch_array($productq);
     $qty = $_SESSION['qtycart'][$key];
     $subtotaltemp=$productdetails['pro_price'] * $qty;
      echo "<tr>";
      echo "<td>$i</td>";
      echo "<td>{$productdetails['pro_title']}</td>";
      echo "<td>$qty</td>";
      echo "<td>{$productdetails['pro_price']}</td>";
      echo "<td><img src='upload/{$productdetails['pro_imagepath']}' style='width:50px;'></td>";

      echo "<td>$subtotaltemp</td>";
      echo "<td><a href='?id=$key'>remove</a></td>";

      echo "</tr>";

      $grandtotal[]= $subtotaltemp;

    

   }
   $finalnum =array_sum($grandtotal);
   echo "<tr>";

      echo "<td></td>";
      echo "<td></td>";  echo "<td></td>";  echo "<td></td>";  echo "<td></td>";
      echo "<td>$finalnum</td>";

   echo "</tr>";
   echo "</table>";
   echo "<a href='product-listing.php'>buy product</a>";
}
else{
      echo "cart is empty";
      echo "<a href='product-listing.php'>buy product</a>";
   }
      if(isset($_SESSION['studentid'])){
            echo "<a href='shipping-info.php'>Checkout</a>";
      }else{
         echo "<a href='login.php'>please login to place order</a>";
     }
   echo "<pre>";
   //print_r($_SESSION);
?>