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
    <title>Shared Home</title>
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

        .btn-success {
            width: 50%;
        }

        .btn-info {
            width: 50%;
        }

        .social_btn {
            display: flex;
            gap: 20px;
        }

        .card-content {
            display: flex;
            flex-direction: row;
            margin: 5%;
        }
    </style>
</head>

<body>
    <?php require_once "after_login_header.php"; ?>
    <div class="card-content">


        <div class="card col-3 card_index apply_card">
            <div class="card-image">
                <img class="img-fluid" src="<?php echo base_url() ?>" alt="Alternate Text" height="100px"
                    width="400px" />
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
                    <div class="social_btn">
                        <button type="button" class="btn btn-info button4" id="apply_btn"
                            >Apply</button>
                        <button type="button" class="btn btn-success button3" id="chat_btn"
                            onclick="chat_page()">Chat</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
    // $.ajax({
    //     url: "<?php echo base_url('public/index.php/dbcontrollers/tao_cards') ?>",
    //     method: "POST",
    //     dataType: "json",
    //     success: function (res) {
    //         alert(res);
            
    //     },
    //     error: function (er) {

    //     }

    // })
    // $('.apply_card').append(element);
    //                 var house_no = items.house_no;
                    $('#apply_btn').click(function () {
                        // event.preventDefault();
                        // alert(house_no);
                        $.ajax({
                            url: "<?php echo base_url('public/index.php/dbcontrollers/tenant_apply_button'); ?>",
                            method: "POST",
                            dataType: "json",
                            // data: {
                            //     house_no: house_no,
                            // },
                            success: function (res) {
                                console.log("ajax woking");
                                console.log(res)
                                // var button = document.getElementById("apply_btn");
                                // button.innerHTML = "Applied";
                                // alert(res)
                            },
                            error: function (er) {
                                console.log("Login Error");
                                console.log(er);
                            }
                        });
                    });


</script>

</html>