<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styles.css?version=<?php echo rand(); ?>">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="<?php echo base_url("/assets/images/boat.jpg") ?>" height="15" alt="MDB Logo"
                        loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home') ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/about') ?>" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/privacy_policy') ?>" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/contact_us') ?>" class="nav-link">contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('http://localhost/chatapp/index.php') ?>" class="nav-link"
                            target="_blank">Chat</a>
                    </li>
                    <!-- <li class="nav-item">
                    <a href="<?php echo base_url('./public/index.php/home/owner_register') ?>" class="nav-link text-dark">Sign in</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/logout') ?>"
                            class="nav-link text-dark">Log Out</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/tenant_filter') ?>"
                            class="nav-link text-dark">tenant_filter</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/otp_verification') ?>"
                            class="nav-link text-dark">Otp verification</a>
                    </li>

                </ul>
                <!-- Left links -->
            </div>
            <li class="nav-item">
                        <div class="menu-wrap">
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="#" style="color: rgba(0,0,0,.55); ">Sign up</a>
                                    <ul class="drop-menu" style="position: absolute; z-index: 2;">
                                        <li class="drop-menu-item">
                                            <a href="<?php echo base_url('./public/index.php/home/tenant_register') ?>">Tenant</a>
                                        </li>
                                        <li class="drop-menu-item">
                                            <a href="<?php echo base_url('./public/index.php/home/owner_register') ?>">Owner</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <!-- <div class="d-flex align-items-center">
                <!-- Icon -->
                <a class="text-reset me-3" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a> -->

                <!-- Notifications -->
                <!-- <div class="dropdown">
                    <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Some news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </div> -->
                <!-- Avatar -->
                
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!--bootstrap start -->
    <script src="./assests/js/jquery.min.js"></script>
    <script src="./assests/js/bootstrap.min.js"></script>
    <!-- bootstrap end -->
</body>

</html>