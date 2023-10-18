
<?php
include("admin/confs/authorize.php");

include("admin/confs/Connection.php");
$id=$_GET['id'];;
$stmt=$conn->prepare("DELETE FROM brand where id=$id");
$stmt->execute([$id]);
header("location:brand_list.php");
?>