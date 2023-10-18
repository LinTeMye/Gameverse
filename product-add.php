
<?php
include("admin/confs/authorize.php");

include("admin/confs/Connection.php");

$model=$_POST['model'];
$price=$_POST['price'];
$company=$_POST['company'];
$brandid=$_POST['brandid'];
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];

if($cover)
{
    move_uploaded_file($tmp, "admin/covers/$cover");
}

$sql="INSERT INTO product(model,price,company,brandid,cover,created_date)
    VALUES('$model','$price','$company','$brandid','$cover',now())";
$conn->query($sql);

header("location:product-list.php");
?>