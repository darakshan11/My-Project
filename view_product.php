<?php
include("connection.php");
$query="select * from tbl_product";
$res=mysqli_query($con,$query);
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
        body {

            background-color:  #3ea99f;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-sm-3 mt-4">
                    <div class="col-sm-12 text-center ">
                        <span><img src="../Assest/images/admin.jpg" style="width:40%;height:40%; border-radius:50%;" /></span>
                    </div>
                    <div class="list-group text-center my-2">
                        <a href="dashboard.php" class="list-group-item list-group-item-action my-2">DASHBOARD</a>
                        <a href="category.php" class="list-group-item list-group-item-action list-group-item-danger my-2">ADD CATEGORY</a>
                        <a href="product.php" class="list-group-item list-group-item-action list-group-item-primary y-2">ADD PRODUCT</a>
                        <a href="view_product.php" class="list-group-item list-group-item-action list-group-item-secondary my-2"> VIEW PRODUCT</a>
                        <a href="view_user.php" class="list-group-item list-group-item-action list-group-item-success my-2">VIEW USERS</a>
                        <a href="notification.php" class="list-group-item list-group-item-action list-group-item-danger my-2">ADD NOTIFICATION</a>
                        <a href="cart.php" class="list-group-item list-group-item-action list-group-item-warning my-2">VIEW CART</a>
                        <a href="contact_us.php" class="list-group-item list-group-item-action list-group-item-info my-2">VIEW CONTUCT US</a>
                        <a href="sold_item.php" class="list-group-item list-group-item-action list-group-item-light my-2">VIEW SOLID ITEMS</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-dark my-2">GENERATE REPORT</a>
                    </div>
                </div>

                <div class="col-sm-9  ">
                    <div class="container-fulid">
                        <div class="row bg-dark text-light">
                            <div class="col-sm-10"align="center">
                                <h3 class="my-2"><cite>View Product Here</cite></h3>
                            </div>

                            <div class="col-sm-2">
                                <div class="dropdown my-2">
                                    <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person"></i> Admin Profile
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Admin Profile</a></li>
                                        <li><a class="dropdown-item" href="cat_logout.php">Logout</a></li>
                                        <li><a class="dropdown-item" href="#">Change Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Change Password</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
						
                        <div class="row  text-center mt-5">
                            <h1><cite>ADD Product</cite></h1>
                        </div>
                       <div class="row">



                       
<table border="1px" align="center">
<tr>
<th>S.NO.</th>
<th>PRODUCT NAME</th>
<th>CATEGORY</th>
<th>FILE_NAME</th>
<th>TOTAL UNIT</th>
<th>COST PRICE</th>
<th>SELLING PRICE</th>
<th>EXPIRY DATE</th>
<th>DESCRIPTION</th>
<th>DATE</th>
<th>DELETE</th>
<th>EDIT</th>
</tr>
<?php
$a=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr>
<td><?php echo $a; ?></td>
<td><?php echo $row['pro_name'];?></td>
<?php $cid= $row['cat_id'];
$query2="select * from tbl_category where cat_id='$cid'";
$res2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($res2);
?>
<td><?php echo $row2['name'];?></td>
<td><img src="product/<?php echo $row['filename'];?>" style="height:50%;width:50%;"/></td>
<td><?php echo $row['unit'];?></td>
<td><?php echo $row['c_price'];?></td>
<td><?php echo $row['s_price'];?></td>
<td><?php echo $row['expiry'];?></td>
<td><?php echo $row['description'];?></td>
<td><?php echo $row['date']; ?></td>
<a href="view_product_delete.php"><td>delete</td></a>
 <a href="#"><td>edit</td></a>
</tr>
<?php 
$a++;
}
?>
</table>

                       </div>



                </div>
            </div>
        </div>
        <div class="row bg-dark text-center text-light">
            <div class="col-sm-12 my-2">
                <p>copyright &copy; 2022-2023 Designed & Devloped By : Darakshan Under the Guidance Mr. Rohit Kumar Softpro India PVT. LTD.</p>
            </div>
        </div>
    </div>
</body>

</html>