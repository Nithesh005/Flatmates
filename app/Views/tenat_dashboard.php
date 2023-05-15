<?php
$session = \Config\Services::session();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Font aswesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/filechoose.css?version=<?php echo rand(); ?>">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<style>
    ::-webkit-scrollbar {
        width: 0px;
        /* Width of the scrollbar */
    }

    body {
        overflow-x: hidden;
    }

    .search-box {
        position: relative;
        display: inline-block;
        vertical-align: middle;
    }

    .btn-success {
        width: 100%;
    }

    .search-box input[type="text"] {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #f2f2f2;
        font-size: 16px;
        width: 200px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .search-box button[type="submit"] {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 50px;
        background-color: #007bff;
    }

    .tenant_card {
        display: flex;
        flex-wrap: wrap;
        gap: 80px;
        /* justify-content: space-evenly; */
        /* background-color: red; */
    }

    .button2 {
        margin-left: 76%;
        margin-top: -4.3%;

    }

    .owner_card {
        display: flex;
        flex-wrap: wrap;
        gap: 80px;
        /* justify-content: space-evenly; */
        /* background-color: red; */
    }

    .button2 {
        margin-left: 76%;
        margin-top: -4.3%;

    }

    .btn-danger {
        width: 100%;
    }

    .add_house_row {
        gap: 20px;
    }

    .individual_req {
        display: flex;
        justify-content: space-between;
    }

    /* .row>* {
            margin-left: 8%;
        } */
    .action-buttons {
        display: flex;
        justify-content: flex-end;
    }

    .accept-button,
    .reject-button {
        padding: 10px 20px;
        margin-left: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .accept-button {
        background-color: #4CAF50;
        color: #fff;
    }

    .reject-button {
        background-color: #F44336;
        color: #fff;
    }

    .accepted {
        height: 50px;
    }

    .user-photo {
        border-radius: 50%;
        width: 50px;
        height: 50px;
    }

    .mov {
        margin-left: 5%;
    }

    .image_req {
        border-radius: 50%;
    }

    .user-info {
        display: flex;
        align-items: center;
        justify-content: center;
        justify-content: space-around;
        /* gap: 100px; */
        /* width: 100%; */
    }

    .username {
        /* background-color: #F44336; */
        display: flex;
        justify-content: center;
        justify-content: center;
    }

    .btn-info {
        width: 50%;
    }

    .social_btn {
        display: flex;
        gap: 20px;
    }

    .add_house_row {
        display: flex;
        gap: 20px;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
    }


    .row>* {
        margin-left: 8%;
    }
</style>

<body onload="getcardtenant()">

    <!-- Modal -->



    <!-- <h1>user id<?php //echo session('u_id'); 
                    ?></h1> -->

    <?php require_once "after_login_header.php"; ?>



    <div class="container d-flex justify-content-end add_house_row">
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Requests</button> -->
        <div class="input-group">
            <div id="search-autocomplete" class="form-outline">
                <input type="search" id="form1" class="form-control" />
                <label class="form-label" for="form1">Search</label>
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="container d-flex justify-content-end add_house_row">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal">My
                house</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal1">Requests</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal2">Shared
                House</button>
        </div>
        <div class="modal fade exampleModal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">My house</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-content">
                        <div class="card col-3 card_index">
                            <div class="card-image">
                                <img class="img-fluid" src="<?php echo base_url() ?>" alt="Alternate Text" height="100px" width="400px" />
                            </div>
                            <div class="card-image-overlay m-auto">
                                <span class="card-detail-badge"> ₹ 6000 </span>
                                <span class="card-detail-badge"> 5BHK </span>
                            </div>
                            <div class="col-12">
                                <div class="card-body">
                                    <h5 class="card-title">About Home</h5>
                                    <div class="card-title house_no" id=" items.house_no" value="mm"> nice home </div>
                                    <p class="card-text"> description : Nice Home</p>
                                    <p class="card-text"> 'City ': Nagercoil'</p>
                                    <p class="card-text"> 'Zipcode ': 629704</p>
                                    <br>
                                    <button type="button" id="delete_btn" class="btn btn-success">Share Home</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade exampleModal1" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Request Page</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-content">
                        <div class="user-info">
                            <div class="user-info" style="display: flex;  justify-content: center; align-items: center;">
                                <img class="image_req" src="<?php echo base_url() ?>/public/public/uploads/ item.u_id + / item.photo_img + " alt="Alternate Text" height="50px" width="50px" />
                            </div>
                            <p class="username" style="font-size: 20px;"> item.name + </p>
                            <p class="email" style="font-size: 20px;"> item.email + </p>
                            <p class="email" style="font-size: 20px;"> item.occupation + </p>
                            <p class="occupation" style="font-size: 20px;"> item.status + </p>
                            <div class="mov">
                                <button class="accept-button" style="height:5%;" onclick="accept_btn()">Accept</button>
                                <button class="reject-button" style="height:5%;" onclick="reject_btn()">Reject</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade exampleModal2" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Shared House</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="card-content">
                    <!-- <div class="card col-3 card_index">
                        <div class="card-image">
                            <img class="img-fluid" src="<?php echo base_url() ?>" alt="Alternate Text" height="100px" width="400px" />
                        </div>
                        <div class="card-image-overlay m-auto">
                            <span class="card-detail-badge"> ₹ 6000 </span>
                            <span class="card-detail-badge"> 5BHK </span>
                        </div>
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title">About Home</h5>
                                <div class="card-title house_no" id=" items.house_no" value="mm"> nice home </div>
                                <p class="card-text"> description : Nice Home</p>
                                <p class="card-text"> 'City ': Nagercoil'</p>
                                <p class="card-text"> 'Zipcode ': 629704</p>
                                <br>
                                <button type="button" id="delete_btn" class="btn btn-danger">Delete Home</button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


    </div>





    <div class="row" id="ads">
        <!-- Category Card -->
        <div class="tenant_card">
        </div>

    </div>


    <?php require_once "footer.php"; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
    // my house
    $.ajax({
        url: "<?php echo base_url('public/index.php/Dbcontrollers/my_house') ?>",
        method: "POST",
        dataType: "json",
        success: function(res) {
            console.log(res);
        },
        error: function(er) {

        }

    })
    // card design
    
        $.ajax({
            // url: "<?php echo base_url() ?>/public/index.php/Controllers/dbcontrollers/reg_user_data",
            url: "<?php echo base_url('public/index.php/Dbcontrollers/tenant_card_controller'); ?>",
            method: "POST",
            dataType: "json",
            success: function(res) {
                console.log(res);
                console.log("ajax woking");
                $('.tenant_card').empty();
                res.forEach(
                    function(items) {
                        var element = $();
                        element = element.add(
                            '<div class="card col-3 card_index">' +
                            '<div class="card-image">' +
                            // '<span class="card-notify-badge">Low KMS</span>' +
                            // '<span class="card-notify-year">2018</span>' +
                            // items.u_id+items.image+
                            '<img class="img-fluid" ' +
                            'src="<?php echo base_url() ?>/public/public/uploads/' + items.u_id + '/' + items.image + '" ' +
                            'alt="Alternate Text" height="100px" width="400px"  />' +
                            '</div>' +
                            '<div class="card-image-overlay m-auto">' +
                            '<span class="card-detail-badge">' + '₹' + items.rent + '/' + '</span>' +
                            '<span class="card-detail-badge">' + items.BHK + '-' + 'BHK' + '</span>' +
                            '</div>' +
                            '<div class="col-12">' +
                            '<div class="card-body">' +
                            '<p class="card-text">' + 'House No' + ':' + items.house_no + '</p>' +
                            '<p class="card-text">' + 'DESCRIPTION' + ':' + items.description + '</p>' +
                            '<p class="card-text">' + 'About Home' + ':' + items.about + '</p>' +
                            '<p class="card-text">' + 'Members allowed' + ':' + items.members + '</p>' +
                            '<p class="card-text">' + 'City' + ':' + items.city + '</p>' +
                            '<p class="card-text">' + 'Zipcode' + ':' + items.zipcode + '</p>' +
                            '<br>' +
                            '<div class="social_btn">' +
                            '<button type="button" class="btn btn-info button4" id="apply_btn" onclick="changeText()">Apply</button>' +
                            '<button type="button" class="btn btn-success button3" id="chat_btn" onclick="chat_page()">Chat</button>' +
                            '</div>' +
                            // '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>'+
                            '</div>' +
                            '</div>' + '</div>'
                        );
                        $('.tenant_card').append(element);
                        var house_no = items.house_no;
                        element.find('#apply_btn').click(function() {
                            // event.preventDefault();
                            alert(house_no);
                            $.ajax({
                                url: "<?php echo base_url('public/index.php/dbcontrollers/apply_button'); ?>",
                                method: "POST",
                                dataType: "json",
                                data: {
                                    house_no: house_no,
                                },
                                success: function(res) {
                                    var button = document.getElementById("apply_btn");
                                    button.innerHTML = "Applied";
                                    // alert(res)
                                },
                                error: function(er) {
                                    console.log("Login Error");
                                    console.log(er);
                                }
                            });
                        });
                        element.find('#chat_btn').click(function() {
                            // alert(house_no)
                            $.ajax({
                                url: "<?php echo base_url('public/index.php/Dbcontrollers/chat_page'); ?>",
                                method: "POST",
                                dataType: "json",
                                data: {
                                    house_no: house_no,
                                },
                                success: function(res) {
                                    // alert(res)
                                    location.replace("<?php echo base_url('./public/index.php/home/chat') ?>");
                                },
                                error: function(er) {
                                    alert(res)
                                }
                            })
                        })
                    }
                );
            },
            error: function(er) {
                // console.error(er);
                console.log("error")
            }
        })


    function chat_page() {

    }
</script>
<link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.9.0/css/mdb.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.9.0/js/mdb.min.js"></script>
<script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

<!-- <script>
    const basicAutocomplete = document.querySelector('#search-autocomplete');
    const data = ['One', 'Two', 'Three', 'Four', 'Five'];
    const dataFilter = (value) => {
        return data.filter((item) => {
            return item.toLowerCase().startsWith(value.toLowerCase());
        });
    };

    new mdb.Autocomplete(basicAutocomplete, {
        filter: dataFilter
    });
</script> -->


</html>