<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                    <a href="<?php echo base_url('./public/index.php/home/index') ?>" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/about_us') ?>" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('./public/index.php/home/privacy_policy') ?>" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="mailto:flatmates09@gmail.com" class="nav-link">contact</a>
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
</body>


</html>