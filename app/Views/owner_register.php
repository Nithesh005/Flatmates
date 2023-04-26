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

</head>

<body>
   
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form  action="<?php echo base_url('public/index.php/Intern_controller/demo_reg'); ?>" method="post" enctype="multipart/form-data">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="jumbotron border border-2 border-info shadow shadow-sm  rounded ">
                                <br>
                                <h2 class="text-info text-center">Owner Registeration</h2>
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
                                        <input type="text" id="dept" name="dept" class="input" placeholder=" " onblur="validateDepartment()" />
                                        <label for="dept" class="placeholder label">Number of house</label>
                                        <span id="dept_err"></span>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container ">
                                        <input type="text" id="clg_name" name="clg_name" class="input" placeholder=" " onblur="validateCollege()" />
                                        <label for="form2Example11" class="placeholder label">Address</label>
                                        <span id="clg_name_err"></span>
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
                                        <input type="text" id="year" name="year" class="input" placeholder=" " onblur="validateYear()" />
                                        <label for="reg_Year" class="placeholder label">Enter Year</label>
                                        <span id="reg_Year_err"></span>
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
                                        <input type="text" name="resume_file_txt" id="resume_file_txt" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Resume</label>
                                        <div class="pin" id="pin_resume"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" name="resume_file" id="resume_file" class="hidden form-control form-control-md" >
                                        <span class="label_txt">Resume Lesser then 20KB and its only pdf , jpg, jpeg
                                            aceept</span>
                                    </div>
                                    <br>

                                </div>

                                <div class="m-3">

                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="bonafide_file_txt" id="bonafide_file_txt" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Bonafide</label>
                                        <div class="pin" id="pin_bonafide"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" name="bonafide_check_file" id="bonafide_check_file" class="hidden form-control form-control-md" >
                                        <span class="label_txt">Bonafide Lesser then 20KB and its only pdf , jpg, jpeg
                                            aceept</span>
                                    </div>
                                    <br>
                                </div>

                                <div class="row m-3">

                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="id_card_file_txt" id="id_card_file_txt" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Id
                                            Card</label>
                                        <div class="pin" id="pin_id_card"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" name="id_card_file" id="id_card_file" class="hidden form-control form-control-md" onblur="checkFileSize()">
                                        <span class="label_txt">ID Card Lesser then 20KB and its only pdf , jpg, jpeg
                                            aceept</span>
                                    </div>
                                    <br>
                                </div>


                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="profile_file_txt" id="profile_file_txt" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Profile</label>
                                        <div class="pin" id="pin_profile"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" name="profile_file" id="profile_file" class="hidden form-control form-control-md" onblur="checkFileSize()">
                                        <span class="label_txt">Profile Lesser then 20KB and its only pdf , jpg, jpeg
                                            aceept</span>
                                    </div>
                                    <br>
                                </div>

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="dob" id="dob" class="input date" placeholder=" " onfocus="dob_fun()" onblur="dob_to_txt()" />
                                        <label for="dob" class=" placeholder  label">Date Of Birth</label>
                                    </div>
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
                                        <input type="text" name="sdate" id="sdate" class="input date " placeholder=" " onfocus="datefun()"   onblur="hideDatePicker()"/>
                                        <label for="form2Example22" class="placeholder  label">Start Date</label>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="edate" id="edate" class="input date" placeholder=" " onfocus="datefun1()"  onblur="hideDatePicker1()"/>
                                        <label for="form2Example23" class=" placeholder  label">End Date</label>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="domain" id="domain">
                                        <option selected disabled>Select Domain</option>
                                        <option value="Web">Web</option>
                                        <option value="App">App</option>
                                        <option value="IOT">IOt</option>
                                    </select>
                                </div>

                                <div class="row m-3">

                                    <div class="col-lg-3 col-md-3 col-sm-1"></div>
                                    <div class="col-lg-6 col-md-6 col-sm-10 button-next-back d-flex ">
                                        <button class="btn btn-lg border border-2 border-primary rounded text-primary back_btn">Back</button>
                                        <input type="submit" value="SUBMIT" class="btn btn-lg border border-2 border-info rounded text-info inter_register_btn" id="reg_third_btn">
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
                $("#resume_file").trigger("click");
            });
            $("#resume_file").change(function() {
                $("#resume_file_txt").val($("#resume_file")[0].files[0].name);

            });

            // bonafide upload
            $("#pin_bonafide").click(function() {
                $("#bonafide_check_file").trigger("click");
            });
            $("#bonafide_check_file").change(function() {
                $("#bonafide_file_txt").val($("#bonafide_check_file")[0].files[0].name);
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


    
        function datefun() {
            var date = document.getElementById("sdate");
            date.type = "date";
        }

        function hideDatePicker() {
            var date = document.getElementById("sdate");
            if (date.value === "") {
                date.type = "text";
            }
        }

        function datefun1() {
            var date = document.getElementById("edate");
            date.type = "date";
        }

        function hideDatePicker1() {
            var date = document.getElementById("edate");
            if (date.value === "") {
                date.type = "text";
            }
        }

        function  dob_fun(){
            var dob = document.getElementById("dob");
            dob.type = "date";
        }

        function dob_to_txt(){
            var dob = document.getElementById("dob");
            if (dob.value === "") {
                dob.type = "text";
            }
        }

        function Alphanumeric() { //registerNumber(parameter)
            // alert("hai");
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
                $('#studentUid_err').text("");
                return true;
            }
        }

        function validateUsername() {
            const usernameInput = document.getElementById('reg_name');
            const username = usernameInput.value;
            const regex = /^[a-zA-Z0-9_]{4,16}$/; // regular expression to match username pattern
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

        function validateDepartment() {
            const departmentInput = document.getElementById('dept');
            const department = departmentInput.value;
            const regex = /^[a-zA-Z]+$/; // regular expression to match department pattern
            // alert("hai");
            if (!regex.test(department)) {
                $('#dept_err').text("Enter a valid department");
                $("#dept_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#dept_err').text("");
                return true;
            }
        }

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

        function validateCollege() {
            const collegeInput = document.getElementById('clg_name');
            const college = collegeInput.value;
            const regex = /^[a-zA-Z\s]+$/; // regular expression to match college name pattern
            if (!regex.test(college)) {
                $('#clg_name_err').text("Enter a Moblie Number");
                $("#clg_name_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#clg_name_err').text("");
                return true;
            }
        }

        function validateYear() {
            const yearInput = document.getElementById('reg_Year');
            const year = yearInput.value;
            const regex = /^[0-9]{4}$/; // regular expression to match year of passing pattern
            if (!regex.test(year)) {
                $('#reg_Year_err').text("Enter a Correct Year");
                $("#reg_Year_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#reg_Year_err').text("");
                return true;
            }
        }

        $('#reg_first_btn').on('click', function() {
            if (Alphanumeric() && validateDate() && validateEmail() && validateDepartment() && validateMobile() && validateCollege() && validateYear()) {
                alert("Success");
            } else {
                alert("Fail");
            }
        });
        $('#reg_sec_btn').on('click', function() {
            if (Alphanumeric() && validateUsername()) {
                alert("Success");
            } else {
                alert("Fail");
            }
        });
        $('#reg_third_btn').on('click', function() {
            if (Alphanumeric() && validateDate()) {
                alert("Success");
            } else {
                alert("Fail");
            }
        });



/* temporary hide this function 
        function on_submit(){
            var regno = $('#reg_no').val();
            var dept = $('#dept').val();
            var year = $('#year').val();
            var email_id = $('#email_id').val();
            var sname = $('#sname').val();
            var mobile = $('#mobile').val();
            var clg_name = $('#clg_name').val();
            var sdate = $('#sdate').val();
            var edate = $('#edate').val();
            var domain = $('#domain').val();

            var resume = $("#resume_file")[0].files[0];

            var fd = new FormData();
            // var files = $('#file')[0].files[0];
            fd.append('regno',regno);
            fd.append('dept',dept);
            fd.append('year',year);
            fd.append('sname',sname);
            fd.append('mobile',mobile);
            fd.append('clg_name',clg_name);
            fd.append('sdate',sdate);
            fd.append('edate',edate);
            fd.append('domain',domain);
            fd.append('email_id',email_id);
            fd.append('resume',resume);
            console.log("before ajax");
            console.log(fd);
            $.ajax({
                url:"<?php echo base_url('public/index.php/Intern_controller/new_connection'); ?>",
                method:"post",
                // dataType:"json",
                data:fd,
                contentType: false,
                processData: false,
                success:function(res){
                    console.log("Intern register");
                    console.log(res);
                },
                error:function(er){
                    console.log('Intern register error');
                    console.log(er);
                }
            });
        }
        */
    </script>
<br><br><br>
</body>

</html>