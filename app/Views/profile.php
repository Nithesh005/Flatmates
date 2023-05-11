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
                  <h6 class="f-w-600">Name</h6>
                  <p>Domain</p>
                  <i class="fas fa-edit"></i>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="card-block">
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">NAME:</p>
                      <h6 class="text-muted f-w-400">MATHAN</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">OCCUPATION:</p>
                      <h6 class="text-muted f-w-400">Developer</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">CITY:</p>
                      <h6 class="text-muted f-w-400">Nagercoil</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">STATE:</p>
                      <h6 class="text-muted f-w-400">Tamilnadu</h6>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">EMAIL:</p>
                      <h6 class="text-muted f-w-400">Aurcm@gmail.com</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">MOBILE NUMBER</p>
                      <h6 class="text-muted f-w-400">1234567890</h6>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">ADDRESS:</p>
                      <h6 class="text-muted f-w-400">Anna University regional campus madurai</h6>
                    </div>
                  </div>
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