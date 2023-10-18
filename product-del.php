
<?php
include("admin/confs/authorize.php");
include("admin/confs/Connection.php");
$id=$_GET['id'];
$stmt=$conn->prepare("DELETE FROM product where id=$id");
$stmt->execute([$id]);
header("location:product-list.php");
?>