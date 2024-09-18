<?php
error_reporting(0);

$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
$msgerr1="Invalid Email Or Password";
}
if($msg==1)
{
$msgerr2="Logout successfully";
}

if($msg==3)
{
$msgerr3="Don't try to make me fool";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link href="../Assest/css/bootstrap.css" rel="stylesheet" />
    <link href="../Assest/css/style.css" rel="stylesheet" type="text/css" />
    <script src="../Assest/js/bootstrap.bundle.js" rel="stylesheet"></script>
    <!-- font-icon & font-awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
background-color:#3ea99f;
}
</style>
</head>

<body>
    <div class="container-fluid fluid">
        <div class="row ">
            <h1 align="center" class="mt-4">Admin Login Here...</h1>
    <div class="col-sm-2 mt-5"></div>
            <div class="col-sm-4 bg-light  mt-5 shadow">
                <img src="../Assest/images/d.jpg" style="height:100%;width:100%;" />
            </div>
            <div class="col-sm-4 bg-light  mt-5 shadow">
                <h2 align="center" class="mt-5">Admin Login</h2>
                <h4><?php echo $msgerr1;?></h4>
                <h4><?php echo $msgerr2;?></h4>
                <form action="logcode.php" method="post">
                    <a href="../index.php">back to home</a>
                    
                        <div class="row mt-3">
                            <div class="col-sm-2">
                                <i class="bi-solid bi-envelope"></i> Email
                            </div>
                            <div class="col-sm-10">
                                <input type="email" class="form-control admin" aria-describedby="emailHelp" name="email">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-2">
                                Password
                            </div>
                            <div class="col-sm-10">
                                <input type="password" class="form-control admin" name="password">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <input type="checkbox">
                                I am not robot
                            </div>
                        </div>
                        <div class="row">
                            <a href="#" class="text-end">Forget password</a>
                        </div>
                        <div class="row m-1">

                            <button type="submit" class="btn btn-primary">Login</button>

                        </div>
                        <div class="row text-center mt-3">
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-primary">facebook</button>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-secondary">Twitter</button>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-success">Google</button>
                            </div>
                        </div>
                  
                </form>


            </div>
            <div class="col-sm-2  mt-5"></div>

        </div>
    </div>
</body>

</html>