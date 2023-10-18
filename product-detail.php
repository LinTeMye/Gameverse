
<!doctype html>
<html>
<head>
<title>Product Detail</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Product Detail</h1>
<?php
include ('admin/confs/Connection.php');
$id=$_GET['id'];
$product=$conn->query("SELECT * FROM product WHERE id=$id");
$row=$product->fetch(PDO::FETCH_ASSOC);
?>

<div class="detail">
<a href="index.php" class="black">&laquo; Go Back</a>

<img src="admin/covers/<?php echo $row['cover']?>">

<h2><?php echo $row['model']?></h2>
<i><?php echo $row['price']?></i>
<b><?php echo $row['company']?></b>
<a href="add-to-cart.php?id=<?php echo $id ?>" class="add-to-cart">
	Add to cart
</a>
</div>
<div class="footer">&copy;<?php echo date("Y")?>.ALl right reserved.</div>
</body>
</html>