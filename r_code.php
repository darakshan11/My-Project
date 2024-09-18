<?php


$user_id=$_POST['user_id'];
//echo "$user_id";
$name=$_POST['name'];
//echo "$name";
$email=$_POST['email'];
//echo "$email";
$mobile=$_POST['mobile'];
//echo "$mobile";
$password=$_POST['password'];
//echo "$password";
$city=$_POST['city'];
//echo "$city";
$address=$_POST['address'];
//echo "$address";
$date=$_POST['dor'];
//echo "$date";

$con=mysqli_connect("localhost","root","","os");
$query="insert into tbl_user(user_id,name,email,mobile,password,city,address,dor) values('$user_id','$name','$email','$password','$city','$address','$date',curdate())";


//echo"$query";
//echo "recorded inserted";
mysqli_query($con,$query);
?>

