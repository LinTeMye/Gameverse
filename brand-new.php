
<html>
<head>
<title>
New Brand
</title>
<link rel="stylesheet" href="admin/css/style.css">

</head>
<body>
<h1>New Brand</h1>


<ul class="menu">
 <li><a href="product-list.php">Manage product</a></li>
 <li><a href="brand_list.php">Manage brand</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>

<form action="brand-add.php" method="post">
<label for="name">Brand Name</label>
<input type="text" name="name">
<br><br>
<input type="submit" name="insert" value="Add brand">
</form>
</body>
</html>
