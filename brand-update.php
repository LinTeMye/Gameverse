
<?php
include("admin/confs/authorize.php");

include("admin/confs/Connection.php");
$id=$_POST['id'];
$name=$_POST['name'];
$stmt=$conn->prepare("UPDATE brand SET name='$name' WHERE id=$id");
$stmt->execute([$name,$id]);
header("location:brand_list.php");
?>