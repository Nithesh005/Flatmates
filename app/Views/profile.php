<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/profile.css?version=<?php echo rand(); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/fonts/css/all.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/profile.css?version=<?php echo rand(); ?>">
</head>

<body>
  <div class="page-content page-container" id="page-content">
    <div class="padding">
      <div class="row container d-flex justify-content-center">
        <div class="col-xl-8 col-md-12">
          <div class="card user-card-full">
            <div class="row m-l-0 m-r-0">
              <div class="col-sm-4 bg-c-lite-green user-profile">
                <div class="card-block text-center text-white">
                  <div class="m-b-25">
                    <img src="<?php echo base_url("assets/images/avatar.jpg"); ?>" class="img-radius"
                      alt="User-Profile-Image">
                  </div>
                  <br>
                  <h6 class="f-w-600">User Name</h6>
                  <p>Domain</p> 
                  <i class="fas fa-edit"></i>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="card-block">
                  <br>
                  <!-- <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6> -->
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Register Number</p>
                      <h6 class="text-muted f-w-400">123456789</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Department</p>
                      <h6 class="text-muted f-w-400">cse</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Year</p>
                      <h6 class="text-muted f-w-400">4</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">College name</p>
                      <h6 class="text-muted f-w-400">Anna University regional campus madurai</h6>
                    </div>
                  </div>
                  <br>
                  <!-- <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6> -->
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Start date</p>
                      <h6 class="text-muted f-w-400">Date</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">End date</p>
                      <h6 class="text-muted f-w-400">date</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Email</p>
                      <h6 class="text-muted f-w-400">Aurcm@gmail.com</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Mobile no.</p>
                      <h6 class="text-muted f-w-400">1234567890</h6>
                    </div>
                  </div>
                  <ul class="social-link list-unstyled m-t-40 m-b-10">
                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="facebook" data-abc="true">
                        <!-- <i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i> -->
                        <i class="fa-solid fa-square-share-nodes" style="color: #3079f8;"></i>
                      </a>
                    </li>
                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="twitter" data-abc="true">
                        <!-- <i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i> -->
                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="instagram" data-abc="true">
                        <!-- <i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i> -->
                        <!-- <i class="fa-brands fa-figma" style="color: #ffc524;"></i></a> -->
                    </li>
                  </ul>
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