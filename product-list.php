
<!DOCTYPE HTML>
<html>
<head>
<title>Product List</title>
<link rel="stylesheet" href="admin/css/style.css">

</head>
<body>
<h1>Product list</h1>
<ul class="menu">
<li><a href="product-list.php">Manage product</a></li>
<li><a href="brand_list.php">Manage brand</a></li>
<li><a href="orders.php">Manage Orders</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

<?php
include("admin/confs/authorize.php");

include("admin/confs/Connection.php");
$stmt=$conn->query("SELECT product.*,brand.name
    FROM product LEFT JOIN brand
    ON product.brandid=brand.id
    ORDER BY product.created_date DESC");
?>
<a href="product-new.php" class="New">New product</a>
<ul class="product">
<?php while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
<li>
<img src="admin/covers/<?php echo $row['cover']?>"
	alt="" align="left" height="140">
	<b><?php echo $row['model']?></b>
	<i><?php echo $row['price']?></i>
	<b>by<?php echo $row['company']?></b>
	<div>(in <?php echo $row['name']?></div>
	
	[<a href="product-del.php?id=<?php echo $row['id']?>" >del</a>]
	[<a href="product-edit.php?id=<?php echo $row['id']?>">edit</a>]
	
	<br><br><br><br><br><br><br>
	</li> 
	<?php 
}
	?>
</ul>

</body>
</html>