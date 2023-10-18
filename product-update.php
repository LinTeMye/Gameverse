
<?php
include("admin/confs/authorize.php");

include("admin/confs/Connection.php");
$id=$_POST['id'];
$model=$_POST['model'];
$price=$_POST['price'];
$company=$_POST['company'];
$brandid=$_POST['brandid'];
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];

if($cover)
{
    move_uploaded_file($tmp, "admin/covers/$cover");
    $sql="UPDATE product SET model='$model', price='$price', company='$company',
        brandid='$brandid',cover='$cover', modified_date=now() WHERE id=$id";
}
else{
    $sql="UPDATE product SET model='$model', price='$price', company='$company',
        brandid='$brandid',cover='$cover', modified_date=now() WHERE id=$id";
}
$conn->query($sql);
header("location:product-list.php");
?>