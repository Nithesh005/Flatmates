<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
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
</style>

<body>
    <?php require_once "after_login_header.php"; ?>
    <div class="search-box">
        <form>
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>


    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <!-- card 1 -->
                <div class="card mb-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-12">
                            <img src="<?php echo base_url("/assets/assets_img/logo-room.png") ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <!-- card 1 -->
                <div class="card mb-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-12">
                            <img src="<?php echo base_url("/assets/assets_img/part1.png") ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-12">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "footer.php"; ?>
</body>

</html>