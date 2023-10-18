
<html>
<head>
<title>
Edit book
</title>
<link rel="stylesheet" href="admin/css/style.css">

<style>form label{
    display:block;
    margin-top:8px;}
    </style>
    </head>
    <body>
    <?php
    include("admin/confs/authorize.php");
    
    include ("admin/confs/Connection.php");
    $id=$_GET['id'];
    $result=$conn->prepare("SELECT * FROM product WHERE id=$id");
    $result->execute(['$id']);
    $row=$result->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1>Edit product</h1>
    <ul class="menu">
 <li><a href="product-list.php">Manage product</a></li>
 <li><a href="brand_list.php">Manage brand</a></li>
 <li><a href="orders.php">Manage Orders</a></li>
 <li><a href="logout.php">Logout</a></li>
 </ul>
    
    <form action="product-update.php" method="POST" enctype="multipart/form-data">
    
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
    
    <label for="model">Product model</label>
    <input type="text" name="model" id="model"
    	value="<?php echo $row['model']?>">
    	
    	<label for="price">Price</label>
    	<input type="text" name="price" id="price"
    	value="<?php echo $row['price']?>">
    	
    	<label for="company">company</label>
    	<input type="text" name="company" id="company"
    	value="<?php echo $row['company']?>">
    	
    	
    	<label for="brand">Brand</label>
    	<select name="brandid" id="brand">
    	<option value="0">--Choose--</option>
    	
    	<?php 
    	$stmt=$conn->prepare("SELECT id,name FROM brand");
    	$stmt->execute();
    	while($brand= $stmt->fetch(PDO::FETCH_ASSOC))
    	{
    	?>
    	<option value="<?php echo $brand['id']?>"
    	<?php if($brand['id']==$row['brandid']) echo "selected"?>>
    	<?php echo $brand['name']?>
    	
    	</option>
    	<?php }?>
    	</select>
    <br><br>
    <img src="covers/<?php echo $row['cover']?>" alt="" height="150">
    <label for="cover">Change Cover</label>
    <input type="file" name="cover" id="cover">
    <br> <br>
    <input type="submit" value="Update product">
    <a href="product-list.php">Back</a>
    
    </form>
    </body>
    </html>