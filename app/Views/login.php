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
    <style>
        body{
            overflow-y: hidden;
        }
    </style>
</head>

<body>
    <!-- header -->
    <?php require_once "header.php"; ?>
    <!-- header -->
    <div class="container">
        <!-- icon header -->
        <div class="row row_top">
            <div class="col-lg-5 col-md-4 "></div>
            <div class="col-lg-2 col-md-4 col-sm-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true"><i class="fa-solid fa-chess-king fa-2x"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false"><i class="fa fa-vcard fa-2x"></i></button>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-4 "></div>
        </div>
        <!-- jumbotron file -->
        <!-- owner login -->
        <div class="row mb-4">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8">
                <div class="tab-content content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="jumbotron border border-2 border border-info rounded rounded-o shadow shadow-md">
                            <br>
                            <h2 class="text-center text-success ">Owner Login</h2>
                            <br>
                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="text" name="reg_no" class="input" placeholder=" " id="owner_mail"
                                        onblur="Alphanumeric()" />
                                    <label for="reg_no" class="placeholder label">Email Address</label>
                                    <span id="email_err"></span>
                                </div>

                            </div>

                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="password" id="owner_pasword" name="reg_no" class="input"
                                        placeholder=" " onblur="passwordValidate1()" />
                                    <label for="adminpasword" class="placeholder label">Enter Password</label>
                                    <span id="adminPassworderr"></span>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-6"><a href="<?php echo base_url('./public/index.php/home/owner_register') ?>">Create An Account?</a></div>
                                <div class="col-6" style="display:flex;flex-direction:row-reverse;"><a href="<?php echo base_url('./public/index.php/home/forgot') ?>">Forgot
                                        Password?</a></div>
                            </div>

                            <div class="m-3">
                                <input type="submit" value="Login"
                                    class="btn btn-lg border-2 border border-info  rounded text-info"
                                    style="width:100%;" id="owner_log_btn">
                            </div>
                        </div>
                    </div>
                    <!-- tenat login -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="jumbotron border border-2 border border-info rounded rounded-o shadow shadow-md">
                            <br>
                            <h2 class="text-center text-success ">Tenant Login</h2>
                            <br>
                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="text" id="tenant_mail" name="reg_no" class="input" placeholder=" "
                                        onblur="Alphanumeric1()" />
                                    <label for="tenant_mail" class="placeholder label">Email Address</label>
                                    <span id="email_er"></span>
                                </div>
                            </div>

                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="text" id="tenant_password" name="reg_no" class="input" placeholder=" "
                                        onblur="passwordValidate()" />
                                    <label for="tenant_password" class="placeholder label">Enter Password</label>
                                    <span id="adminPassworderrr"></span>
                                </div>

                                <div class="row m-3">
                                    <div class="col-6"><a href="<?php echo base_url('./public/index.php/home/tenant_register') ?>">Create An Account?</a></div>
                                    <div class="col-6" style="display:flex;flex-direction:row-reverse;"><a href="<?php echo base_url('./public/index.php/home/forgot') ?>"
                                            onclick="forgot()">Forgot
                                            Password?</a></div>
                                </div>

                                <div class="m-3">
                                    <input type="submit" value="Login"
                                        class="btn btn-lg border-2 border border-info  rounded text-info"
                                        style="width:100%;" id="tanet_log_btn">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>


        </div>
        <br><br>
        <!-- <h1>user id<?php //echo session('u_id'); ?></h1> -->

    </div>

    <script>

function forgot(){
            // location.replace( "<?php echo base_url('./public/index.php/home/forgot') ?>");
            alert("hello")
            location.replace("<?php echo base_url(); ?>public/index.php/home/forgot");
        }
        
        // owner email validation

        function Alphanumeric() {
            var alphanumericRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var reg = document.getElementById("reg_no").value;
            if (!alphanumericRegex.test(reg)) {
                $('#email_err').text("Enter propre email formate");
                $("#email_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#email_err').text("");
                return true;
            }
        }


        //Owner password validation

        function passwordValidate1() {
            var adminPw = document.getElementById("adminpasword").value;
            // alert(adminPw.length)
            if (adminPw.length < 8) {
                $("#adminPassworderr").text("Password can't be less than 8 Characters");
                $("#adminPassworderr").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#adminPassworderr').text("");
                return true;
            }
        }


        // tenat email validation

        function Alphanumeric1() {
            var alphanumericRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var reg = document.getElementById("tenat_id").value;
            if (!alphanumericRegex.test(reg)) {
                $('#email_er').text("Enter propre email formate");
                $("#email_er").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#email_er').text("");
                return true;
            }
        }



        // tenat password validation

        function passwordValidate() {
            var adminPw = document.getElementById("tenat_pasword").value;
            // alert(adminPw.length)
            if (adminPw.length < 8) {
                $("#adminPassworderrr").text("Password can't be less than 8 Characters");
                $("#adminPassworderrr").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#adminPassworderrr').text("");
                return true;
            }
        }




        $(document).on('click', '#owner_log_btn', function (event) {
            event.preventDefault();
            alert('owner');
            var owner_mail = $('#owner_mail').val();
            var owner_pasword = $('#owner_pasword').val();
            console.log(owner_mail);
            console.log(owner_pasword);
            $.ajax({
                url: "<?php echo base_url('public/index.php/dbcontrollers/ownerlogin'); ?>",
                method: "POST",
                dataType: "json",
                data: {
                    owner_mail: owner_mail,
                    owner_pasword: owner_pasword,
                },
                success: function (res) {
                    alert(res);
                    if (res === "success") {
                        // alert("login success");
                        location.replace("<?php echo base_url(); ?>public/index.php/home/owner_dashbord");
                    } else if (res === "fail") {
                        alert("Invalid Owner");

                    }

                },
                error: function (er) {
                    console.log("Login Error");
                    console.log(er);
                }
            });

        });
        $(document).on('click', '#tanet_log_btn', function (event) {
            event.preventDefault();
            alert('tanent');
            var tenant_mail = $('#tenant_mail').val();
            var tenant_password = $('#tenant_password').val();
            console.log(tenant_mail)
            console.log(tenant_password)
            $.ajax({
                url: "<?php echo base_url('public/index.php/dbcontrollers/tenantlogin'); ?>",
                method: "POST",
                dataType: "json",
                data: {
                    tenant_mail: tenant_mail,
                    tenant_password: tenant_password,
                },
                success: function (res) {
                    alert(res);
                    // console.log("Admin Login");
                    if (res === "success") {
                        // alert("login success");
                        location.replace("<?php echo base_url('./public/index.php/home/tenat_dashboard') ?>");
                    } else if (res === "fail") {
                        alert("Invalid tenant");

                    }
                    // alert(res);
                    // console.log(res);

                },
                error: function (er) {
                    console.log("Login Error");
                    console.log(er);
                }
            });

        });
    </script>

</html>