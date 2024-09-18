<?php
include("connection.php");
$query = "select * from tbl_category";
$res = mysqli_query($con, $query);
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

            background-color: #3ea99f;
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
                                <h3 class="my-2"><cite>Add Product Here</cite></h3>
                            </div>

                            <div class="col-sm-2">
                                <div class="dropdown my-2">
                                    <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-person"></i> Admin Profile
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Admin Profile</a></li>
                                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                        <li><a class="dropdown-item" href="#">Change Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Change Password</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="row  text-center mt-5">
                            <h1><cite>ADD Product</cite></h1>
                        </div>
                        <div class="row" align="center">
                            <form action="product_code.php" method="post" enctype="multipart/form-data">
                                <table>
                                    <tr>

                                        <th><label for="exampleFormControlInput1" class="form-label">Product Name</label></th>
                                        <td><input type="type" class="form-control" id="exampleFormControlInput1" placeholder="enter your Product name" name="pro_name"></td>
                                    </tr>
                                    <tr>

                                        <th><label for="exampleFormControlInput1" class="form-label">Category</label></th>
                                        <td>
                                            <select name="category">
                                                <option value="">--select category--</option>
                                                <?php
                                                while ($row = mysqli_fetch_array($res)) {
                                                ?>
                                                    <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['name']; ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>

                                        <th><label for="exampleFormControlInput1" class="form-label">Product Image</label></th>
                                        <td><input type="file" class="form-control" id="exampleFormControlInput1" name="photo"></td>
                                    </tr>
                                    <tr>

                                        <th><label for="exampleFormControlInput1" class="form-label">Total Unit</label></th>
                                        <td><input type="number" class="form-control" id="exampleFormControlInput1" name="unit"></td>
                                    </tr>
                                    <tr>

                                        <th><label for="exampleFormControlInput1" class="form-label">Cost Price</label></th>
                                        <td><input type="number" class="form-control" id="exampleFormControlInput1" name="c_price"></td>
                                    </tr>
                                    <tr>

                                        <th><label for="exampleFormControlInput1" class="form-label">Selling Price</label></th>
                                        <td><input type="number" class="form-control" id="exampleFormControlInput1" name="s_price"></td>
                                    </tr>
                                    <tr>

                                        <th><label for="exampleFormControlInput1" class="form-label">Expiry Date</label></th>
                                        <td><input type="date" class="form-control" id="exampleFormControlInput1" name="e_date"></td>
                                    </tr>
                                    <tr>
                                        <th><label for="exampleFormControlTextarea1" class="form-label">Description</label></th>
                                        <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" value="Add Product" </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-dark text-center text-light">
                <div class="col-sm-12 my-2">
                    <p>copyright &copy; 2022-2023 Designed Devloped By : Darakshan Under the Guidance Mr. Rohit Kumar Softpro India PVT. LTD.</p>
                </div>
            </div>
        </div>
</body>

</html>