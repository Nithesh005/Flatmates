<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <!--semantic ui cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet"
            href="<?php echo base_url(); ?>/assets/css/login.css?version=<?php echo rand(); ?>">
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>

    <div class="container ">

        <!-- icon header -->
        <div class="row">
            <div class="col-lg-5 col-md-4 "></div>
            <div class="col-lg-2 col-md-4 col-sm-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-mortar-board fa-2x"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-vcard fa-2x"></i></button>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-4 "></div>
        </div>
        <!-- jumbotron file -->
        <div class="row mb-4">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8">
                <div class="tab-content content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="jumbotron border border-2 border border-info rounded rounded-o shadow shadow-md">
                            <br>
                            <h2 class="text-center text-success ">Student Login</h2>
                            <br>
                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="text" name="reg_no" class="input" placeholder=" " id="reg_no" onblur="Alphanumeric()" />
                                  
                                    <label for="reg_no" class="placeholder label">Register No </label>
                                    <span id="studentUid_err"></span>
                                </div>

                            </div>

                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="text" name="dob" class="input" id="dob" placeholder=" " onfocus="datefun()" onblur="hideDatePicker();validateDate()" />
                                    <label for="dob" class="placeholder">Date of Birth</label>
                                    <span id="date_err"></span>

                                    <!-- id="form2Example22"  -->
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-6"><a href="">Create An Account?</a></div>
                                <div class="col-6" style="display:flex;flex-direction:row-reverse;"><a href="">Forgot
                                        Password?</a></div>
                            </div>

                            <div class="m-3">
                                <input type="submit" value="Login" class="btn btn-lg border-2 border border-info  rounded text-info" style="width:100%;" id="intern_log_btn">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="jumbotron border border-2 border border-info rounded rounded-o shadow shadow-md">
                            <br>
                            <h2 class="text-center text-success ">Admin Login</h2>
                            <br>
                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="text" id="adminId" name="reg_no" class="input" placeholder=" " onblur="Alphanumeric1()" />
                                    <label for="adminId" class="placeholder label">Enter User Id</label>
                                    <span id="adminIderr"></span>
                                </div>
                            </div>

                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="text" id="adminpasword" name="reg_no" class="input" placeholder=" " onblur="passwordValidate1()" />
                                    <label for="adminpasword" class="placeholder label">Enter Password</label>
                                    <span id="adminPassworderr"></span>
                                </div>

                                <div class="row m-3">
                                    <div class="col-6"><a href="">Create An Account?</a></div>
                                    <div class="col-6" style="display:flex;flex-direction:row-reverse;"><a href="">Forgot
                                            Password?</a></div>
                                </div>

                                <div class="m-3">
                                    <input type="submit" value="Login" class="btn btn-lg border-2 border border-info  rounded text-info" style="width:100%;" id="admin_log_btn">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>


        </div>
        <br><br>

    </div>

    <script>
        function datefun() {
            var date = document.getElementById("dob");
            date.type = "date";
        }

        function hideDatePicker() {
            var date = document.getElementById("dob");
            if (date.value === "") {
                date.type = "text";
            }
        }

        function Alphanumeric() { //registerNumber(parameter)
            var alphanumericRegex = /^[0-9a-zA-Z]+$/;
            var reg = document.getElementById("reg_no").value;
            if (!alphanumericRegex.test(reg)) {
                $('#studentUid_err').text("Special Characters or empty sapace are not Allowed");
                $("#studentUid_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                // var no_err_stu_reg = 0;
                $('#studentUid_err').text("");
                return true;
            }
        }

        function isDateNotExceedingCurrentDate(dateString) {
            var inputDate = new Date(dateString);
            var currentDate = new Date();
            if (inputDate.getTime() < currentDate.getTime()) {
                return true;
            } else {
                return false;
            }
        }

        function validateDate() {
            var dateString = document.getElementById("dob").value;
            if (!isDateNotExceedingCurrentDate(dateString)) {
                $('#date_err').text("Enter a valid Date");
                $("#date_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                var no_err_date = 0;
                $('#date_err').text("");
                return true;
            }
        }

        function Alphanumeric1() { //registerNumber(parameter)
            var alphanumericRegex = /^[0-9a-zA-Z]+$/;
            var reg = document.getElementById("adminId").value;
            if (!alphanumericRegex.test(reg)) {
                $('#adminIderr').text("Special Characters or empty sapace are not Allowed");
                $("#adminIderr").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#adminIderr').text("");
                return true;
            }
        }

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

        $('#intern_log_btn').on('click', function() {
            console.log(validateDate());
            if(Alphanumeric() && validateDate()){
                alert("Success");
            }
            else{
                alert("Fail");
            }
        });

        // $('#admin_log_btn').on('click', function() {
        //     if(Alphanumeric1() && passwordValidate1()){
        //         alert("Success");
        //         location.replace("<?php echo base_url('/public/index.php/Home/load_option/card_show_more'); ?>");
        //     }
        //     else{
        //         alert("Fail");
        //     }
        // });

// admin log in 
        $(document).on('click','#admin_log_btn',function(event){
            event.preventDefault();
            // alert('ahi');
            var user_id = $('#adminId').val();
            var password = $('#adminpasword').val();
            $.ajax({
                    url:"<?php echo base_url('public/index.php/Intern_controller/admin_login'); ?>",
                    method:"POST",
                    dataType:"json",
                    data:{
                        user_id:user_id,
                        password:password,
                    },
                    success:function(res){
                        console.log("Admin Login");
                        if (res === "success") {
                            // alert("login success");
                            location.replace("<?php echo base_url(); ?>public/index.php/Home/load_option/card_show_more");
                        }
                        else if(res==="new"){
                            alert("Invalid Admin");

                        }
                        // alert(res);
                        // console.log(res);

                    },
                    error:function(er){
                        console.log("Login Error");
                        console.log(er);
                    }
            });

        });
    </script>






</html>