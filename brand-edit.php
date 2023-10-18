
<html>
<head>
<title>
Edit Brand
</title>
<link rel="stylesheet" href="admin/css/style.css">

</head>
<body>
<h1>
Edit Brand
</h1>
<ul class="menu">
<li><a href="product-list.php">Manage product</a></li>
<li><a href="brand_list.php">Manage brand</a></li>
<li><a href="orders.php">Manage Orders</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

<?php
include("admin/confs/authorize.php");

include("admin/confs/Connection.php");
$id=$_GET['id'];
$stmt=$conn->prepare("SELECT * FROM brand WHERE id=$id");
$stmt->execute([$id]);
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<form action="brand-update.php" method="post">
<input type="hidden" name="id" value="<?php echo $row['id']?>">
<label for="name">Brand Name</label>
<input type="text" name="name" value="<?php echo $row['name']?>">

<br><br>
<input type="submit" value="update Brand">

</form>
</body>
</html>