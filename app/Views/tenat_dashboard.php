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

    ul li {
        list-style-type: none;
        float: left;
        display: flex;
        height: 50%;
    }

    /* .tenant {
        margin-left: 5px;
        margin-top: 3%;
        box-shadow: 5px 5px 5px 5px;
        white-space: 5%;

    }  */

    .card {
        background-color: #f1f1f1;
        margin-bottom: 10px;
        /* Adds space below each card */
        padding: 10px;
        box-shadow: 5px 5px 5px 5px;
        /* Adds space inside each card */
    }
</style>

<body onload="getcardtenant()">
    <!-- <h1>user id<?php //echo session('u_id'); 
                    ?></h1> -->

    <?php require_once "after_login_header.php"; ?>
    <div class="search-box">
        <form>
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="">
        <div class="row" id="ads">
            <!-- Category Card -->
            <!-- <div class="col-md-4">
                <ul class="card rounded tenant_card">

                </ul>
            </div> -->
        </div>
    </div>


    <?php require_once "footer.php"; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
    // card design
    function getcardtenant() {
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
                            '<div class="col-md-4 tenant">' +
                            '<div class="card-image">' +
                            '<img class="img-fluid" ' +
                            'src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262" ' +
                            'alt="Alternate Text" />' +
                            '</div>' +
                            '<div class="card-image-overlay m-auto">' +
                            '<span class="card-detail-badge">' + '₹' + +items.rent + '</span>' +
                            '<span class="card-detail-badge">' + items.BHK + '/' + 'BHK' + '</span>' +
                            '</div>' +
                            '<div class="col-12">' +
                            '<div class="card-body">' +
                            '<h5 class="card-title">About Home</h5>' +
                            '<p class="card-text">' + items.description + '</p>' +
                            '<p class="card-text">' + 'City' + ':' + items.city + '</p>' +
                            '<p class="card-text">' + 'Zipcode' + ':' + items.zipcode + '</p>' +
                            // '<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>'+
                            '</div>' +
                            '</div>' +
                            '<a href="#" class="button button--piyo">' +
                            '<div class="button__wrapper">' +
                            '<span class="button__text">APPLY</span>' +
                            '</div>' +
                            '<div class="characterBox">' +
                            '<div class="character wakeup">' +
                            '<div class="character__face"></div>' +
                            '</div>' +
                            '<div class="character wakeup">' +
                            '<div class="character__face"></div>' +
                            '</div>' +
                            '<div class="character">' +
                            '<div class="character__face"></div>' +
                            '</div>' +
                            '</div>' +
                            '</a>' +
                            '<a href="#" class="button1 button--piyo">' +
                            '<div class="button__wrapper">' +
                            '<span class="button__text">CHAT</span>' +
                            '</div>' +
                            '<div class="characterBox">' +
                            '</div>' +
                            '</a>' +
                            '<div class="card-body text-center">' +
                            '<div class="ad-title m-auto">' +
                            '<h5>Honda Accord LX</h5>' +
                            '</div>' +
                            '<a class="ad-btn" href="#">View</a>' +
                            '</div>' +
                            '</div>' +
                            '<br>'

                        );
                        $('#ads').append(element);

                    }
                );

            },
            error: function(er) {
                // console.error(er);
                console.log("error")
            }
        })

    }
</script>

</html>