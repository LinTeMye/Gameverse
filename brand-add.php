
<?php
include("admin/confs/authorize.php");

include ("admin/confs/Connection.php");

if(isset($_POST['insert']))
{
    $name=$_POST['name'];
    $sql="INSERT INTO brand(name,created_date,modified_date)
          VALUES('$name',now(),now())";
    $conn->query($sql);
    
    header("location:brand_list.php");
}
?>