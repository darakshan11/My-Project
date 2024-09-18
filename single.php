<?php
session_start();
if ($_SESSION['user']== '') {

    header("location:login.php");
} else {

    $pro_id = $_REQUEST['pro_id'];
    //echo "$pro_id";
include('admin/connection.php');
$query="select * from tbl_product where pro_id='$pro_id'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$user=$_SESSION['user'];
echo $user;
$query2="select * from tbl_user where email='$user'";
$res2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($res2);
?>
<?php
if(isset($_POST['submit'])){
echo "<script> alert('Order Placed Successfully') </script>";
}

?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="Assest/css/bootstrap.css" rel="stylesheet">

        <script src="Assest/js/bootstrap.bundle.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

    




        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class container="col-sm-12">
                        <div class="card mb-3";>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="admin/product/<?php echo $row['filename'] ?>" class="img-fluid rounded-start w-100 h-100" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php  echo $row['pro_name'];?></h5>
                                        <p class="card-text"><?php echo $row['description'];?></p>
                                        <h4> <?php echo $row ['s_price'];?></h4>
                                        <small>Shipping Address: - <?php echo $row2['address'];?>,<?php echo $row2['city'];?> </small><br>
                                        <input type="radio" name="" /> Cash on delivery <br>
                                        <input type="radio" name="" /> UPI Payment <br>
                                        <input type="radio" name="" /> PAYTM<br>
                                        <input type="radio" name="" /> Net Banking

                                        <form action="single_code.php" method="post">
                                            <input type="hidden" name="user" value="<?php echo $row2['user_id'];?>"/>
                                           <input type="hidden" name="pro" value="<?php echo $row['pro_id'];?>"/>
                                           <input type="hidden" name="cat" value="<?php echo $row['cat_id'];?>"/>
                                           <input type="hidden" name="unit" value="1" id=""/>
                                           <input type="hidden" name="amount" value="<?php echo $row['s_price'];?>"/>
                                            <button type="submit" name="submit" class ="btn btn-danger">Order placed</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </body>

    </html>
<?php
}
?>