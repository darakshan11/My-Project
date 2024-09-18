<?php
session_start();
$email=$_SESSION['user'];
//echo $email;

include("admin/connection.php");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);

if($row=mysqli_fetch_array($res))
{
	$pp=$row['password'];
}

$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
if($pp==$op)
{
	if($op==$np)
	{
		  //echo "your old and new password is matched";
		  header("location:change_password.php");
	}
	else if($np==$cnp)
	{
		include("admin/connection.php");
		//echo"update ki query fire kro";
		$query="update tbl_user set password='$np' where email='$email'";
         //echo "make update query";
		 mysqli_query($con,$query);
		//echo "something";
		session_destroy();
		//echo"everything";
		header("location:login.php");    
	}
	
	else
	{
		//echo "your new pass and confirm new pass  is not matched";
				header("location:change_password.php");    
	}
}
	else
	{
		//echo "your old password is not matched";
				header("location:change_password.php");    
	}
	?>
	
