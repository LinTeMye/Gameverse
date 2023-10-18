
<?php
include("admin/confs/authorize.php");
?>

<!doctype html>
<html>
<head>
  <title> Order List</title>
  <link rel="stylesheet" href="admin/css/style.css">
</head>
<body>

<h1> Order List </h1>
<ul class="menu">
  <li><a href="product-list.php">Manage product</a></li>
  <li><a href="brand_list.php">Manage brand</a></li>
  <li><a href="orders.php">Manage Orders</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<?php 
  include("admin/confs/Connection.php");
  $orders= $conn->query("SELECT * FROM orders");
?>

<ul class="orders">
  <?php while($order=$orders->fetch(PDO::FETCH_ASSOC))
  { 
    ?>
      <?php if($order['status']):?>
      <li class="delivered">
      <?php else: ?>
     <li>
      <?php endif; ?>
   
     <div class="order">
         <b><?php echo $order['name']?></b>
         <i><?php  echo $order['email']?></i>
         <span><?php echo $order['phoneno']?></span>
         <p><?php echo $order['address']?></p>
         <?php if($order['status']): ?>
            <a href="order-status.php?id=<?php echo $order['id'] ?>&status=0">
            Undo</a>
         <?php else: ?>
            <a href="order-status.php?id=<?php echo $order['id'] ?>&status=1">
            Mark as delivered</a>
            <?php  endif; ?>
         </div>   
         <div class="items">
           <?php 
               $order_id=$order['id'];
               $items= $conn->query("SELECT order_items.*, product.model FROM order_items
                   LEFT JOIN product ON order_items.product_id=product.id WHERE order_items.order_id=$order_id
                   ");
               
             while($item=$items->fetch(PDO::FETCH_ASSOC)){
               ?>
             <b>
               <?php  echo $item['model'] ?>
               ( <?php  echo $item['qty']?>)
            </b>
            
            <?php }?>        
         </div>  
         </li>
         <?php }?>


</ul>
</body>
</html>