<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styles.css?version=<?php echo rand(); ?>">
    <title>Document</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home') ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/about_us') ?>" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#footer" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/#footer') ?>" class="nav-link">contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/login') ?>" class="nav-link text-dark">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/tenant_register') ?>" class="nav-link text-dark">Sign up</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    
    <div class="content_about">
    <h2 class="text-xl md:text-3xl text-gray-600 font-medium mt-10 mb-5">About us</h2>
    <p class="text-gray-600 text-sm md:text-base mt-3 lg:leading-7 text-justify"><img src="<?php echo base_url(); ?>/assets/assets_img/aboutus.webp"  id="img_about" ></img>Welcome to our website! We are a team of passionate individuals who believe in providing our customers with a seamless and hassle-free booking experience. Our goal is to make it easier for you to find and reserve your perfect room, whether you're looking for a short-term stay or a long-term rental.

     With our user-friendly platform, you can browse through a wide range of rooms and apartments in different locations, and easily compare prices and amenities to find the one that suits your needs. We work with trusted partners to ensure that all our properties meet the highest standards of quality and cleanliness, so you can rest assured that you're getting the best value for your money.
     <br><br> At our core, we value transparency, integrity, and customer satisfaction. We believe in providing clear and upfront pricing, and in offering flexible cancellation policies that give you peace of mind. Our dedicated customer support team is available around the clock to answer any questions or concerns you may have, and to help you make the most of your booking experience.
       Thank you for choosing our website, and we look forward to serving you!</p>

    </div>

    
    <!-- Footer Start -->
    <?php require_once "footer.php"; ?>
    <!-- Footer End -->




    <!-- Back to Top -->
    <a id="gototop" href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>


    <!--bootstrap  -->
    <script src="./assests/js/jquery.min.js"></script>
    <script src="./assests/js/bootstrap.min.js"></script>

</body>
