<?php
// use App\View\function.php;
// App\Models\Dbmodels

// if ($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()) {

//     //send email
//     $vars['code'] =  rand(10000, 99999);

//     //save to database
//     $vars['expires'] = (time() + (60 * 10));
//     $vars['email'] = $_SESSION['USER']->email;

//     $query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
//     database_run($query, $vars);

//     $message = "your code is " . $vars['code'];
//     $subject = "Email verification";
//     $recipient = $vars['email'];
//     send_mail($recipient, $subject, $message);
// }

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // echo "Code expired";
    // hai();
    // if (!check_verified()) {

    //     $query = "select * from verify where code = :code && email = :email";
    //     $vars = array();
    //     $vars['email'] = $_SESSION['USER']->email;
    //     $vars['code'] = $_POST['code'];

    //     $row = database_run($query, $vars);

    //     if (is_array($row)) {
    //         $row = $row[0];
    //         $time = time();

    //         if ($row->expires > $time) {

    //             $id = $_SESSION['USER']->id;
    //             $query = "update users set email_verified = email where id = '$id' limit 1";

    //             database_run($query);

    //             header("Location: profile.php");
    //             die;
    //         } else {
    //             echo "Code expired";
    //         }
    //     } else {
    //         echo "wrong code";
    //     }
    // } else {
    //     echo "You're already verified";
    // }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/login.css?version=<?php echo rand(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1>user id<?php echo session('u_id'); 
                ?></h1>

    <div class="otp_form">
    <h2>You are Entered as tenant</h2>
        <form action="<?php echo base_url('public/index.php/home/verifyOTP_tenant'); ?>" method="post">
            <div class="row mb-4">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8">
                    <div class="tab-content content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="jumbotron border border-2 border border-info rounded rounded-o shadow shadow-md">
                                <br>
                                <h2 class="text-center text-success ">OTP verification</h2>
                                <br>
                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="entered_otp" class="input" placeholder=" " id="owner_mail" onblur="Alphanumeric()" />
                                        <label for="entered_otp" class="placeholder label">Enter OTP</label>
                                        <span id="email_err"></span>
                                    </div>

                                </div>

                                <div class="row m-3">
                                    <div class="col-12" style="display:flex;flex-direction:row-reverse;"><a href="<?php echo base_url('./public/index.php/home/sendEmail_tenant') ?>">Send OTP</a></div>
                                </div>

                                <div class="m-3 otp_submit">
                                    <input type="submit" value="Verify" class="btn btn-lg border-2 border border-info  rounded text-info" style="width:50%;" id="owner_log_btn">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-2"></div>
                </div>


            </div>
        </form>
    </div>
    <br>
    <br>
    <br>


</body>

</html>