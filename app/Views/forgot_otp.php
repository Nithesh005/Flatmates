<?php
$session = \Config\Services::session();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <!--semantic ui cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
        integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/login.css?version=<?php echo rand(); ?>">
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <!-- header -->
    <?php require_once "header.php"; ?>
    <!-- header -->
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8">
                <div class="tab-content content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="jumbotron border border-2 border border-info rounded rounded-o shadow shadow-md">
                            <br>
                            <h2 class="text-center text-success ">Forgot Password</h2>
                            <br>
                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="text" name="reg_no" class="input" placeholder=" " id="owner_mail"
                                        onblur="Alphanumeric()" />
                                    <label for="reg_no" class="placeholder label">OTP</label>
                                    <span id="email_err"></span>
                                </div>
                                <div class="row m-3">
                                    <div class="col-12" style="display:flex;flex-direction:row-reverse;"><a
                                            href="<?php echo base_url('./public/index.php/home/sendEmail_owner') ?>">Send
                                            OTP</a></div>
                                </div>

                            </div>


                            <div class="m-3">
                                <input type="submit" value="Next"
                                    class="btn btn-lg border-2 border border-info  rounded text-info"
                                    style="width:100%;" id="owner_log_btn" onclick="confirm()">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    // your script goes here
    function confirm() {
        alert("hello")
        location.replace("<?php echo base_url('./public/index.php/home/confirmpassord_forgot') ?>");
    }
</script>

</html>