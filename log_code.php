<?php
session_start ();
$email=$_POST['email'];
//echo "$email";
$password=$_POST['password'];
//echo "$password";


$con=mysqli_connect("localhost","root","","os");
$query="select * from tbl_user where email='$email' and password='$password'";
 $res=mysqli_query($con,$query);

 if ($row=mysqli_fetch_array($res))
 {
   $_SESSION['user']=$email;
    header("location:index.php");
   // echo "email and password is correct";
 }
 else{
    header("location:login.php");
    //echo "email and password is not correct";
 }

?>