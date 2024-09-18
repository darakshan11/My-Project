<?php 
$cat_id=$_REQUEST['id'];
//echo $cat_id;
include("connection.php");
$query="delete from tbl_category where cat_id='$cat_id'";
mysqli_query($con,$query);
header("location:category.php");
?> 