<?php
$product_Name=$_POST['pro_name'];
//echo "$product_Name";
$category=$_POST['category'];
//echo "$category";
$product_image=$_FILES['photo']['name'];
//echo "$product_image";
$tmp_name=$_FILES['photo']['tmp_name'];
//echo "$tmp_name";
$total_unit=$_POST['unit'];
//echo "$total_unit";
$cost_price=$_POST['c_price'];
//echo "$cost_price";
$selling_price=$_POST['s_price'];
//echo "$selling_price";
$expiry_date=$_POST['e_date'];
//echo "$expiry_date";
$description=$_POST['description'];
//secho "$description";
$location="product/";
include("connection.php");
$query="insert into tbl_product(pro_name,cat_id,filename,unit,c_price,s_price,expiry,description,date) values('$product_Name','$category','$product_image','$total_unit','$cost_price','$selling_price','$expiry_date','$description',now())";
//echo $query;
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$product_image);
//echo "recorde inserted";
header("Location:view_product.php");
?>