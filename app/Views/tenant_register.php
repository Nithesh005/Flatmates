<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Insertnship Registeration</title>
    <!--semantic ui cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owner_register.css?version=<?php echo rand(); ?>">
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/custom/css/inter_register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- swwet alert -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .container .row_top{
            margin-top: -160px;
        }
    </style>
</head>

<body>
    <!-- header -->
    <?php require_once "header.php"; ?>
    <!-- header -->
    <div class="container mb-4">
        <div class="row row_top">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form action="<?php echo base_url('public/index.php/Dbcontrollers/reg_user_data'); ?>" method="post" enctype="multipart/form-data">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="jumbotron border border-2 border-info shadow shadow-sm  rounded ">
                                <br>
                                <h2 class="text-info text-center">Tenant Registeration</h2>
                                <br>
                                <!-- <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" id="reg_no" name="reg_no" class="input" placeholder=" " onblur="Alphanumeric()" />
                                        <label for="form2Example11" class="placeholder label">Register No </label>
                                        <span id="studentUid_err"></span>
                                    </div>
                                </div> -->

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" id="sname" name="sname" class="input" placeholder=" " onblur="validateUsername()" />
                                        <label for="reg_name" class="placeholder label">Enter Name</label>
                                        <span id="name_err"></span>
                                        <!-- form2Example11 Enter Name -->
                                    </div>
                                </div>
                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="email" id="email_id" name="email_id" class="input" placeholder=" " onblur="validateEmail()" />
                                        <label for="email_id" class="placeholder label">E-mail</label>
                                        <span id="reg_mail_err"></span>
                                    </div>
                                </div>
                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" id="mobile" name="mobile" class="input" placeholder=" " onblur="validateMobile()" />
                                        <label for="mobile" class="placeholder label">Enter Mobile</label>
                                        <span id="mobile_err"></span>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="password" id="password_id" name="password_id" class="input" placeholder=" " onblur="validatepassword()" />
                                        <label for="password_id" class="placeholder label">Password</label>
                                        <span id="password_err"></span>
                                    </div>
                                </div>


                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container ">
                                        <input type="text" id="occupation_id" name="occupation_id" class="input" placeholder=" " onblur="validateoccupation()" />
                                        <label for="occupation_id" class="placeholder label">Occupation</label>
                                        <span id="occupation_err"></span>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container ">
                                        <input type="text" id="address_id" name="address_id" class="input" placeholder=" " onblur="validateaddress()" />
                                        <label for="address_id" class="placeholder label">Address</label>
                                        <span id="address_err"></span>
                                    </div>
                                </div>
                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container ">
                                        <input type="text" id="city_id" name="city_id" class="input" placeholder=" " onblur="validatecity()" />
                                        <label for="city_id" class="placeholder label">City</label>
                                        <span id="city_err"></span>
                                    </div>
                                </div>
                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container ">
                                        <input type="text" id="state_id" name="state_id" class="input" placeholder=" " onblur="validatestate()" />
                                        <label for="state_id" class="placeholder label">State</label>
                                        <span id="state_err"></span>
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-lg mx-auto border border-2 border-info rounded text-info next_click" style="width:100%" id="reg_first_btn">Next</button>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </div>
                        </div>
                        <!-- second -->
                        <div class="carousel-item">
                            <div class="jumbotron border border-2 border-info shadow shadow-sm  rounded ">
                                <br>
                                <h2 class="text-center text-info">Second Page</h2>
                                <br>




                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="profile_file_txt" id="profile_file_txt" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Photo</label>
                                        <div class="pin" id="pin_profile"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" accept="image/jpeg" name="profile_file" id="profile_file" class="hidden form-control form-control-md" onblur="checkFileSize()">
                                        <span class="label_txt">Photo Lesser then 20KB and its only jpg,
                                            jpeg
                                            accept</span>
                                    </div>
                                    <br>
                                </div>


                                <div class="m-3">

                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="resume_file_txt" id="resume_file_txt" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Smart Card</label>
                                        <div class="pin" id="pin_resume"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" accept="image/jpeg" id="smart_card" name="smart_card" class="hidden form-control form-control-md">
                                        <span class="label_txt">Smart Card Lesser then 20KB and its only pdf ,
                                            jpg, jpeg
                                            accept</span>
                                    </div>
                                    <br>

                                </div>

                                <div class="m-3">

                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="aadhar_card" id="aadhar_card" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Aadhar card </label>
                                        <div class="pin" id="pin_bonafide"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" accept="image/jpeg" id="bonafide_check_file" name="aadhar_card" class="hidden form-control form-control-md">
                                        <span class="label_txt">Aadhar card Lesser then 20KB and its only pdf , jpg,
                                            jpeg
                                            accept</span>
                                    </div>
                                    <br>
                                </div>

                                <div class="row m-3 ">
                                    <div class="col-lg-3 col-md-1 col-sm-1"></div>
                                    <div class="col-lg-6 col-md-10 col-sm-10 button-next-back d-flex">
                                        <button class="btn btn-lg mx-auto border border-2 border-primary rounded text-primary back_btn">Back</button>
                                        <button class="btn btn-lg mx-auto border border-2 border-info rounded text-info next_click" id="reg_sec_btn">Next</button>
                                    </div>
                                    <div class="col-lg-3 col-md-1 col-sm-1"></div>
                                </div>
                            </div>
                        </div>


                        <!-- third -->
                        <div class="carousel-item">
                            <div class="jumbotron border border-2 border-info shadow shadow-sm  rounded ">
                                <br>
                                <h2 class="text-center text-info">Third Page</h2>
                                <br>
                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" id="aadhar_id" name="aadhar_id" class="input" placeholder=" " onblur="validateaadhar()" />
                                        <label for="aadhar_id" class="placeholder label">Enter aadhar number</label>
                                        <span id="aadhar_err"></span>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="family_type" id="family_type">
                                        <option selected disabled>Looking House for</option>
                                        <option value="Family">Family</option>
                                        <option value="Bachelor">Bachelor</option>
                                    </select>
                                </div>


                                <div class="row m-3">

                                    <div class="col-lg-3 col-md-3 col-sm-1"></div>
                                    <div class="col-lg-6 col-md-6 col-sm-10 button-next-back d-flex ">
                                        <button class="btn btn-lg border border-2 border-primary rounded text-primary back_btn">Back</button>
                                        <input type="submit" value="SUBMIT" class="btn btn-lg border border-2 border-info rounded text-info inter_register_btn" onclick="otp_verify()" id="reg_third_btn">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-1"></div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
                </form>


            </div>
            <div class="col-lg-3"></div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
    <script>




        $('#reg_third_bt').click(function() {
            var sname = $('#sname').val();
            var email_id = $('#email_id').val();
            var mobile = $('#mobile').val();
            var password_id = $('#password_id').val();
            var occupation_id = $('#occupation_id').val();
            var address_id = $('#address_id').val();
            var city_id = $('#city_id').val();
            var state_id = $('#state_id').val();
            var profile_file = $('#profile_file').val();
            var smart_card = $('#smart_card').val();
            var aadhar_card = $('#aadhar_card').val();
            var aadhar_id = $('#aadhar_id').val();
            var family_type = $('#family_type').val();
            // console.log(sname);
            $.ajax({
                // url: "<?php echo base_url() ?>/public/index.php/Controllers/dbcontrollers/reg_user_data",
                url: "<?php echo base_url('public/index.php/Dbcontrollers/reg_user_data'); ?>",
                method: "POST",
                dataType: "json",
                data: {
                    sname: sname,
                    email_id: email_id,
                    mobile: mobile,
                    password_id: password_id,
                    occupation_id: occupation_id,
                    address_id: address_id,
                    city_id: city_id,
                    state_id: state_id,
                    profile_file: profile_file,
                    smart_card: smart_card,
                    aadhar_card: aadhar_card,
                    aadhar_id: aadhar_id,
                    family_type: family_type,
                },
                success: function(res) {
                    alert(res);
                    console.log("susscess");
                    location.replace("<?php echo base_url('./public/index.php/home/otp_verification') ?>");
                },
                error: function(er) {
                    // console.error(er);
                    console.log("error")
                }
            })

        })

        // next button function
        $(document).on('click', '.next_click', function(event) {
            event.preventDefault();
            var get_tmp_index = $('.next_click');
            var get_index = get_tmp_index.index($(this));
            // alert(get_index);
            $('.carousel').carousel('next');
            $('.carousel').carousel({
                interval: false
            });
        });

        // previous button function
        $(document).on('click', '.back_btn', function(event) {
            event.preventDefault();
            $('.carousel').carousel('prev');
        })





        $(document).ready(function() {

            // resume upload
            $("#pin_resume").click(function() {
                $("#smart_card").trigger("click");
            });
            $("#resume_file").change(function() {
                $("#resume_file_txt").val($("#smart_card")[0].files[0].name);

            });

            // bonafide upload
            $("#pin_bonafide").click(function() {
                $("#bonafide_check_file").trigger("click");
            });
            $("#bonafide_check_file").change(function() {
                $("#aadhar_card").val($("#bonafide_check_file")[0].files[0].name);
            });

            // id card upload
            $("#pin_id_card").click(function() {
                $("#id_card_file").trigger("click");
            });
            $("#id_card_file").change(function() {
                $("#id_card_file_txt").val($("#id_card_file")[0].files[0].name);
            });

            // profile upload
            $("#pin_profile").click(function() {
                $("#profile_file").trigger("click");
            });
            $("#profile_file").change(function() {
                $("#profile_file_txt").val($("#profile_file")[0].files[0].name);
            });
        });

        // username validation

        function validateUsername() {
            const usernameInput = document.getElementById('sname');
            const username = usernameInput.value;
            const regex = /^[a-zA-Z0-9_ ]{4,16}$/; // regular expression to match username pattern
            if (!regex.test(username)) {
                $('#name_err').text("Enter a valid name");
                $("#name_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#name_err').text("");
                return true;
            }
        }

        // email validation

        function validateEmail() {
            const emailInput = document.getElementById('email_id');
            const email = emailInput.value;
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // regular expression to match email pattern
            if (!regex.test(email)) {
                $('#reg_mail_err').text("Enter a valid email");
                $("#reg_mail_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#reg_mail_err').text("");
                return true;
            }
        }

        // phone number validation

        function validateMobile() {
            const mobileInput = document.getElementById('mobile');
            const mobile = mobileInput.value;
            const regex = /^[0-9]{10}$/; // regular expression to match mobile number pattern
            if (!regex.test(mobile)) {
                $('#mobile_err').text("Enter a Moblie Number");
                $("#mobile_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#mobile_err').text("");
                return true;
            }
        }

        // password validation
        function validatepassword() {
            const passwordInput = document.getElementById('password_id');
            const password = passwordInput.value;
            const regex = /^[A-Z0-9!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?a-z]{8,64}$/;
            if (!regex.test(password)) {
                $('#password_err').text("Enter a valid password");
                $("#password_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#password_err').text("");
                return true;
            }
        }

        //Occupation validation

        function validateoccupation() {
            const occupationInput = document.getElementById('occupation_id');
            const occupation = occupationInput.value;
            const regex = /^[a-zA-Z]+$/; // regular expression to match department pattern
            if (!regex.test(occupation)) {
                $('#occupation_err').text("Enter a valid occupation");
                $("#occupation_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#occupation_err').text("");
                return true;
            }
        }

        // house number validation 

        function validatehouseno() {
            const houseInput = document.getElementById('house_id');
            const houseno = houseInput.value;
            const regex = /^\d{1,4}[A-Za-z]?\/?\d{0,4}[A-Za-z]?$/; // regular expression to match mobile number pattern
            if (!regex.test(houseno)) {
                $('#house_err').text("Enter valid House number");
                $("#house_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#house_err').text("");
                return true;
            }
        }

        // Address validation 

        function validateaddress() {
            const addressInput = document.getElementById('address_id');
            const address = addressInput.value;
            const regex = /^[A-Za-z0-9\s]+$/; // regular expression to match username pattern
            if (!regex.test(address)) {
                $('#address_err').text("Enter a valid Address");
                $("#address_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#address_err').text("");
                return true;
            }
        }

        // city validation/

        function validatecity() {
            const cityInput = document.getElementById('city_id');
            const city = cityInput.value;
            const regex = /^[A-Za-z\s]+$/; // regular expression to match username pattern
            if (!regex.test(city)) {
                $('#city_err').text("Enter a valid Address");
                $("#city_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#city_err').text("");
                return true;
            }
        }

        // State validation/

        function validatestate() {
            const stateInput = document.getElementById('state_id');
            const state = stateInput.value;
            const regex = /^[A-Za-z\s]+$/; // regular expression to match username pattern
            if (!regex.test(state)) {
                $('#state_err').text("Enter a valid Address");
                $("#state_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#state_err').text("");
                return true;
            }
        }

        // aadhar card validation
        function validateaadhar() {
            const aadharInput = document.getElementById('aadhar_id');
            const aadhar = aadharInput.value;
            const regex = /^[0-9]{12}$/; // regular expression to match mobile number pattern
            if (!regex.test(aadhar)) {
                $('#aadhar_err').text("Enter valid aadhar card number");
                $("#aadhar_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#aadhar_err').text("");
                return true;
            }
        }




        $('#reg_first_btn').on('click', function() {
            if (validateUsername() && validateEmail() && validateMobile() && validatepassword() && validateoccupation() && validatehouseno() && validateaddress() && validatecity() && validatestate()) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Something went wrong!',
                    footer: 'you want to fill all data'
                })
            }
        });
        // $('#reg_sec_btn').on('click', function() {
        //     if (Alphanumeric() && validateUsername()) {
        //         alert("Success");
        //     } else {
        //         alert("Fail");
        //     }
        // });
        // $('#reg_third_btn').on('click', function() {
        //     if (Alphanumeric() && validateDate()) {
        //         alert("Success");
        //     } else {
        //         alert("Fail");
        //     }
        // });
    </script>
    <br><br><br>
</body>

</html>