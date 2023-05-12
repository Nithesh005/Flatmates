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
  <style>
    .padding {
      /* width: 160%; */
    }
    .profile_card_head{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .profile_card{
      width: 100%;
      margin-left: -150px;
      margin-top: -500px;
    }

    .img_rad {
      border-radius: 50%;
    }
  </style>
</head>

<body onload="profil()">
  <?php require_once "after_login_header.php"; ?>
  <div class="row profile_card_head" id="ads">
    <!-- Category Card -->
    <div class="profile_card">
    </div>

  </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
  // function profile() {
  $.ajax({
    // url: "<?php echo base_url() ?>/public/index.php/Controllers/dbcontrollers/reg_user_data",
    url: "<?php echo base_url('public/index.php/Dbcontrollers/profile_controller'); ?>",
    method: "POST",
    dataType: "json",
    success: function(res) {
      console.log(res);
      console.log("ajax woking");
      $('.profile_card').empty();
      res.forEach(
        function(items) {
          var element = $();
          element = element.add(
            '<div class="page-content page-container" id="page-content">' +
            '<div class="padding">' +
            ' <div class="row container d-flex justify-content-center">' +
            '<div class="col-xl-8 col-md-12">' +
            '<div class="card user-card-full">' +
            '<div class="row m-l-0 m-r-0">' +
            '<div class="col-sm-4 bg-c-lite-green user-profile">' +
            '<div class="card-block text-center text-white">' +
            '<div class="m-b-25">' +
            '<img class="img-fluid img_rad" ' +
            'src="<?php echo base_url() ?>/public/public/uploads/' + items.u_id + '/' + items.photo_img + ' "alt="Alternate Text" height="100px" width="400px"/>' +
            '</div>' +
            '<h6 class="f-w-600">' + items.name + '</h6>' +
            '<p>' + items.occupation + '</p>' +
            '<i class="fas fa-edit"></i>' +
            '</div>' +
            '</div>' +
            '<div class="col-sm-8">' +
            '<div class="card-block">' +
            '<div class="row">' +
            '<div class="col-sm-6">' +
            '<p class="m-b-10 f-w-600">NAME:</p>' +
            '<h6 class="text-muted f-w-400">' + items.name + '</h6>' +
            '</div>' +
            '<div class="col-sm-6">' +
            '<p class="m-b-10 f-w-600">OCCUPATION:</p>' +
            '<h6 class="text-muted f-w-400">' + items.occupation + '</h6>' +
            '</div>' +
            '<div class="col-sm-6">' +
            '<p class="m-b-10 f-w-600">CITY:</p>' +
            '<h6 class="text-muted f-w-400">' + items.city + '</h6>' +
            '</div>' +
            '<div class="col-sm-6">' +
            '<p class="m-b-10 f-w-600">STATE:</p>' +
            '<h6 class="text-muted f-w-400">' + items.state + '</h6>' +
            '</div>' +
            '</div>' +
            '<br>' +
            '<div class="row">' +
            '<div class="col-sm-6">' +
            '<p class="m-b-10 f-w-600">EMAIL:</p>' +
            '<h6 class="text-muted f-w-400">' + items.email + '</h6>' +
            '</div>' +
            '<div class="col-sm-6">' +
            '<p class="m-b-10 f-w-600">MOBILE NUMBER</p>' +
            '<h6 class="text-muted f-w-400">' + items.phone_no + '</h6>' +
            '</div>' +
            '<div class="col-sm-6">' +
            '<p class="m-b-10 f-w-600">ADDRESS:</p>' +
            '<h6 class="text-muted f-w-400">' + items.address + '</h6>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'
          );
          $('.profile_card').append(element);

        }
      );
    },
    error: function(er) {
      // console.error(er);
      console.log("error")
    }
  })

  // }
</script>

</html>