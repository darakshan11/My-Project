<?php
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
                  <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="help.php">HELP</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="about.php">ABOUT US</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    PROFILE
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                    <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                  </ul>
                </li>
                
              </ul>
              <li class="nav-item">
                <a class="nav-link active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i>
              </li>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>

      <!--nav end-->

        <!--about strt-->

        <div class="jumb text-center bg-secondary">
            <h1>About Us</h1>
            <p> The Gavai Swad Agro Products P Limited (Gavai Swad) is a company founded in 2020 during the lockdown period when the food services were not available in offline mode for window shopping.
                The vision behind starting “Gavai Swad” is to provide the real taste of India and the real products made out of desi raw material. Nowadays, getting Organic fruits and vegetables is next to impossible since adulteration has become a common practice. Unlike conventional ones which are coated with waxes and sprayed with chemicals, basically mummifying them. We, at Gavai Swad treat nature as it should be and provide a wide variety of the freshest possible products free from harmful pesticides and chemicals, that disrupt our physical health and mental wellbeing.
                We offer a range of products like: Sugarcane sirka, pickles, murabba, jaggery products to our customers freshly made without using any chemicals & pesticides. Since now all of us are getting more internet & technology savvy and we all want the services at our doorstep and therefore gavaiswad.com portal came into existence.
                The products of Gavai Swad are available on Amazon, Flipkart, Swiggy & other e-commerce based food portals.
            </p>

            <img  style="height:200px;width:300px;"src="Assest/images/jnv.jpg" />
        </div>
        <!--about end-->

        <!--footer-->
        <footer class="footer-distributed">

            <div class="footer-left">



                <p class="footer-links">
                    <a href="privacy.php">Privacy Policy</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">Contact</a>
                </p>
                <img src="Assest/images/logo.png">
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