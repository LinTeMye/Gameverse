
<html>
<head>
<title>
Brand List
</title>
<link rel="stylesheet" href="admin/css/style.css">

</head>
<body>
<h1>
Brand List
</h1>
<ul class="menu">
<li><a href="product-list.php">Manage product</a></li>
<li><a href="brand_list.php">Manage brand</a></li>
<li><a href="orders.php">Manage Orders</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

<?php
include("admin/confs/authorize.php");

include ("admin/confs/Connection.php");
$stmt=$conn->query("SELECT * FROM brand");
?>
<ul>
<?php 
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{?>
<li title="<?php echo $row['id']?>">
[<a href="brand-del.php?id=<?php echo $row['id']?>">Del</a>]
[<a href="brand-edit.php?id=<?php echo $row ['id']?>">Edit</a>]
<?php echo $row['name']?>
</li>
<?php } ?>

</ul>
<a href="brand-new.php" class="new">New Brand</a>
</body>
</html>