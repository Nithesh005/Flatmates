<?php
$session = \Config\Services::session();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Font aswesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/filechoose.css?version=<?php echo rand(); ?>">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Document</title>

    <style>
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
    </style>
</head>

<body onload="getcar()">


    <?php require_once "after_login_header.php"; ?>
    <br>
    <div class="container d-flex justify-content-end add_house_row">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Requests</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
            Add New House</button>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply for New House</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">
                    <form class="row g-3 p-4"
                        action="<?php echo base_url('public/index.php/dbcontrollers/demo_reg'); ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">House number</label>
                            <input type="text" class="form-control" id="house_no" placeholder="20/93" name="house_no">
                        </div>

                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="inputAddress"
                                placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">About your house</label>
                            <input type="text" class="form-control" id="inputAddress2" name="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-12">
                            <label for="Description" class="form-label">Description</label>
                            <textarea class="form-control" id="Description" name="Description"
                                placeholder="Nearby facilities"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="Members_allowed" class="form-label">Members allowed</label>
                            <input type="text" class="form-control" id="Members_allowed" name="Members_allowed"
                                placeholder="5 members">
                        </div>
                        <div class="col-md-6">
                            <label for="Rent_amount" class="form-label">Rent Amount</label>
                            <input type="text" class="form-control" id="Rent_amount" name="Rent_amount"
                                placeholder="₹15000-/Per Month">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" name="inputCity"
                                placeholder="Madurai">
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">State</label>
                            <input type="text" class="form-control" id="inputstate" name="inputstate"
                                placeholder="Tamilnadu">
                        </div>

                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">Zip Code </label>
                            <input type="text" class="form-control" id="inputZip" name="inputZip" placeholder="123456">
                        </div>

                        <div class="col-md-6">
                            <label for="bhk" class="form-label">BHK</label>
                            <input type="text" class="form-control" id="bhk" name="bhk" placeholder="2.3.4..etc">
                        </div>


                        <div class="input-file-container">
                            <input class="input-file" id="my_file" name="my_file" type="file" multiple>
                            <label tabindex="0" for="my-file" class="input-file-trigger">Select files...</label>
                        </div>
                        <p class="file-return"></p>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" id="post_btnn" value="Post">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary button2" data-toggle="modal" data-target="#exampleModal">
        Requests
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Requests</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <div class="modal-body"> -->
                <!-- <div class="card accepted"> -->
                <div class="card-content">
                    <!-- <div class="user-info">
                        <img src="https://i.imgur.com/cMSVQZC.jpg" alt="User Photo" class="user-photo">
                        <p class="username">John Doe</p>
                        <button class="accept-button">Accept</button>
                        <button class="reject-button">Reject</button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>



    <div class="row" id="ads">
        <!-- Category Card -->
        <div class="owner_card">
        </div>

    </div>

    <!-- <img src="<?php echo base_url(); ?>public/public/uploads/FMOW_1002/be nice.jpg" height="200px" width="300px" alt=""> -->

    </div>

    <!-- <img src="<?php echo base_url(); ?>public/public/uploads/FMOW_1002/be nice.jpg" height="200px" width="300px" alt=""> -->

    </div>

    <!-- <img src="<?php echo base_url(); ?>public/public/uploads/FMOW_1002/be nice.jpg" height="200px" width="300px" alt=""> -->

    </div>

</body>

<?php require_once "footer.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>

    function accept_btn() {
        alert("accpted");
    }
    function reject_btn() {
        alert("rejected");
    }

    document.querySelector("html").classList.add('js');

    var fileInput = document.querySelector(".input-file"),
        button = document.querySelector(".input-file-trigger"),
        the_return = document.querySelector(".file-return");

    button.addEventListener("keydown", function (event) {
        if (event.keyCode == 13 || event.keyCode == 32) {
            fileInput.focus();
        }
    });
    button.addEventListener("click", function (event) {
        fileInput.focus();
        return false;
    });
    fileInput.addEventListener("change", function (event) {
        var files = this.files;
        var filenames = "";
        for (var i = 0; i < files.length; i++) {
            filenames += files[i].name + "<br>";
        }
        the_return.innerHTML = filenames;
    });


    $.ajax({
        url: "<?php echo base_url('public/index.php/Dbcontrollers/get_requests') ?>",
        method: "POST",
        dataType: "json",
        success: function (res) {
            // alert(res);
            $('.card-content').empty();
            res.forEach(
                function (item) {
                    // $('.card-content').append('<h1>haiii</h1>');
                    // alert("kk");
                    var element = $();
                    element = element.add(
                        '<div class="user-info">' +
                        '<div class="user-info" style="display: flex;  justify-content: center; align-items: center;">' +
                        '<img src="https://i.imgur.com/cMSVQZC.jpg" alt="User Photo" class="user-photo">' +
                        '<p class="username" style="font-size: 30px;">' + items.name + '</p>' +
                        '<div class="mov">' +
                        '<button class="accept-button" style="height:5%;" onclick="accept_btn()">Accept</button>' +
                        '<button class="reject-button" style="height:5%;" onclick="reject_btn()">Reject</button>' +
                        '</div>' +
                        '</div>' +
                        '</div>'
                    );
                    $('.card-content').append(element);
                });
        },
        error: function (er) {
            alert(er);
        }
    });


    $.ajax({
        // url: "<?php echo base_url() ?>/public/index.php/Controllers/dbcontrollers/reg_user_data",
        url: "<?php echo base_url('public/index.php/Dbcontrollers/owner_card'); ?>",
        method: "POST",
        dataType: "json",
        success: function (res) {
            console.log(res);
            console.log("ajax woking");
            $('.owner_card').empty();
            res.forEach(
                function (items) {
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
                        '<span class="card-detail-badge">' + '₹' + items.rent +  '/' +'</span>' +
                        '<span class="card-detail-badge">' + items.BHK + '-' + 'BHK' + '</span>' +
                        '</div>' +
                        '<div class="col-12">' +
                        '<div class="card-body">' +
                        '<h5 class="card-title">About Home</h5>' +
                        '<div class="card-title house_no" id="' + items.house_no + '" value="mm">' + items.house_no + '</div>' +
                        '<p class="card-text">' + items.description + '</p>' +
                        '<p class="card-text">' + 'City' + ':' + items.city + '</p>' +
                        '<p class="card-text">' + 'Zipcode' + ':' + items.zipcode + '</p>' +
                        '<br>' +
                        '<button type="button" id="delete_btn" class="btn btn-danger">Delete Home</button>' +
                        // '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>'+
                        '</div>' +
                        '</div>' + '</div>'

                    );
                    // element.find('.house_no').data('house_no', items.house_no);
                    $('.owner_card').append(element);

                    element.find('#delete_btn').click(function () {
                        var house_no = items.house_no;
                        // alert(house_no);
                        // alert(a);
                        // Perform deletion logic for the corresponding card
                        $.ajax({
                            url: "<?php echo base_url('public/index.php/dbcontrollers/delete_owner_card'); ?>",
                            method: "POST",
                            data: {
                                house_no: house_no,
                            },
                            success: function (res) {
                                alert(res);
                                return location.reload();
                            },
                            error: function (er) {
                                alert("error");
                            }

                        })
                    });

                }

            );
            // $('#delete_btn').click(function() {
            //     alert("hai");
            // });

        },
        error: function (er) {
            // console.error(er);
            console.log("error");
        }
    })

        // }
        // $('#delete_btn').click(function() {
        //     alert("hai");
        // })


</script>


</html>