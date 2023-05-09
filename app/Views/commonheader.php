<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styles.css?version=<?php echo rand(); ?>">
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .menu,
        .drop-menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .menu-item {
            display: inline-block;
            position: relative;
            color: rgba(0, 0, 0, .55);
        }

        .menu-item a {
            text-decoration: none;
            padding: 6px 10px;
            color: #fff;
            display: block;
        }

        .drop-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 100px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            z-index: 0;
        }

        .drop-menu-item {
            width: 100%;
        }

        .drop-menu-item:hover {
            background-color: #eee;
        }

        .drop-menu-item a {
            color: #555;
        }

        .menu-item:hover .drop-menu {
            display: block;
        }
    </style>



</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <!-- Left links -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/index') ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/login') ?>" class="nav-link ">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <div class="menu-wrap">
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="#" style="color: rgba(0,0,0,.55);">SignUp</a>
                                    <ul class="drop-menu"  style="position: absolute; z-index: 2;">
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
                </ul>
                <!-- Left links -->
            </div>
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