<?php
$notification=$_POST['notification'];
//echo $category;
include("connection.php");
$query="insert into tbl_notification(notification,date) values('$notification',now())";
mysqli_query($con,$query);
header("location:notification.php");
?>