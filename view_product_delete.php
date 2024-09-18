<?php 
$pro_id=$_REQUEST['id'];
//echo $cat_id;
include("connection.php");
$query="delete from tbl_product where pro_id='$pro_id'";
mysqli_query($con,$query);
header("location:view_product.php");
?> 