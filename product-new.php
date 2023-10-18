
<html>
<head>
<title>
New Product
</title>
<link rel="stylesheet" href="admin/css/style.css">

<style>form label{
    display:block;
    margin-top:8px;}
    </style>
    </head>
    <body>
    <h1>New phone</h1>
    <ul class="menu">
    <li><a href="product-list.php">Manage product</a></li>
    <li><a href="brand_list.php">Manage brand</a></li>
    <li><a href="orders.php">Manage Orders</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
    
    <form action="product-add.php" method="post" enctype="multipart/form-data">
    
    <label for="model">Product name</label>
    <input type="text" name="model"><br><br>
    
    <label for="price">Price</label>
    <input type="text" name="price"><br><br>
    
    <label for="company">company</label>
    <input type="text" name="company"><br><br>
    
    <label for="brandid">Brand</label>
    <select name="brandid">
    <option value="0">----Choose-----</option>
    <?php
    include("admin/confs/authorize.php");
    
    include ("admin/confs/Connection.php");
    $stmt=$conn->query("SELECT id,name FROM brand");
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
        
        
        ?>
	<option value="<?php echo $row['id']?>">
	<?php echo $row['name'] ?>
	</option>
<?php 
}
?>
</select>
<br><br>
<label for="cover">Cover</label>
<input type="file" name="cover">
<br><br>
<input type="submit" name="new" value="Add product">

<a href="product-list.php">Back</a>
</form>
</body>
</html>