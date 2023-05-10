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
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/contact.css?version=<?php echo rand(); ?>">
  <title>Document</title>
</head>

<body>
  <!-- header -->
  <?php require_once "commonheader.php"; ?>
  <!-- header -->
  <div class="contact_us_6">
    <div class="responsive-container-block container">
      <form class="form-box" action="#<?php //echo base_url()?>public/index.php/home/get_in_touch">
        <div class="container-block form-wrapper">
          <div class="mob-text">
            <p class="text-blk contactus-head">
              Get in Touch
            </p>
            <p class="text-blk contactus-subhead">
              Connect With Us
            </p>
          </div>
          <div class="responsive-container-block" id="i2cbk">
            <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
              <p class="text-blk input-title">
                FIRST NAME
              </p>
              <input class="input" id="ijowk-3" name="FirstName" placeholder="Please enter first name...">
            </div>
            <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
              <p class="text-blk input-title">
                EMAIL
              </p>
              <input class="input" id="ipmgh-3" name="Email" placeholder="Please enter email...">
            </div>
            <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
              <p class="text-blk input-title">
                PHONE NUMBER
              </p>
              <input class="input" id="imgis-3" name="PhoneNumber" placeholder="Please enter phone number...">
            </div>
            <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
              <p class="text-blk input-title">
                WHAT DO YOU HAVE IN MIND ?
              </p>
              <textarea class="textinput" id="i5vyy-3" placeholder="Please enter query..."></textarea>
            </div>
          </div>
          <button class="submit-btn" id="w-c-s-bgc_p-1-dm-id-2">
            Submit
          </button>
        </div>
      </form>
      <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
        <div class="map-part">
          <p class="text-blk map-contactus-head" id="w-c-s-fc_p-1-dm-id">
            Reach us at
          </p>
          <p class="text-blk map-contactus-subhead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis diam lectus sapien.
          </p>
          <div class="social-media-links mob">
            <a class="social-icon-link" href="#" id="ix94i-2-2">
              <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-twitter.png">
            </a>
            <a class="social-icon-link" href="#" id="itixd">
              <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-facebook.png">
            </a>
            <a class="social-icon-link" href="#" id="izxvt">
              <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-google.png">
            </a>
            <a class="social-icon-link" href="#" id="izldf-2-2">
              <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-instagram.png">
            </a>
          </div>
          <div class="map-box container-block">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <div class="foot">
    <?php require_once "footer.php"; ?>
  </div>
  <!-- Footer End -->
</body>

</html>