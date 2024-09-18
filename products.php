<?php
include("admin/connection.php");
$query = "select * from tbl_product";
$res = mysqli_query($con, $query);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="Assest/css/bootstrap.css" rel="stylesheet">
    <link href="Assest/css/style.css" rel="stylesheet">

    <script src="Assest/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>




    <!--header-->
    <div class="container-fluid ">
        <div class="row py-2 bg-warning">
            <div class="col-sm-3"><i class="fa-solid fa-phone"></i>Contact Us:+916704359392</div>
            <div class="col-sm-3"><i class="fa-solid fa-envelope"></i>Mail Us:vandja@gmail.com</div>
            <div class="col-sm-3">
            </div>
        </div>


        <!--header end-->




        <!--........navbar....-->




        <div class="row-fluid">
            <div class="col-sm-12 p-0">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="Assest/images/1.png" alt="" height="60px" /></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">HELP</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">ABOUT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">PRIVACY POLICY</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!--........navbar....-->

        <!--price-->
        <div class="container-fluid"> 
        <div class="row mt-3">
            <?php
            while ($row = mysqli_fetch_array($res)) {
            ?>

                <div class="col-sm-3 p-0">
                    <div class="card" style="width: 20rem;">
                        <img src="admin/product/<?php echo $row['filename']; ?>" class="card-img-top my-card" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['s_price'];?>/-</h5>
                           <h3> <p class="card-text"><?php echo $row['pro_name'];?>
                            </p></h3>
                            <a href="#" class="btn btn-warning">Buy Now</a>
                            <a href="#" class="btn btn-warning float-end">Add to Cart</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>



    </div>









    <!--footer-->
    <footer class="footer-distributed">

        <div class="footer-left">



            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Contact</a>
            </p>
            <img src="Assest/images/2a.png">
            <p class="footer-company-name">Vinegar & Jaggary Store @ 2022</p>

            <div class="footer-icons">

                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>

            </div>

        </div>

        <div class="footer-right">

            <p>Contact Us</p>

            <form action="#" method="post">

                <input type="text" name="email" placeholder="Email">
                <textarea name="message" placeholder="Message"></textarea>
                <button>Send</button>

            </form>

        </div>

    </footer>



    </div>
    </div>
    </div>

</body>

</html>