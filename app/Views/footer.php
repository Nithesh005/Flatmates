<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
    footer {
        /* position: fixed; */
        bottom: 0;
        width: 100%;
        text-align: center;
    }

    .pad {
        padding: 2rem;
    }
    #center{
        margin-top:20px;
    }
</style>

<body>
    <footer class="bg-light text-center text-lg-start">

        <div class="" style="background-color: skyblue;">
            <div class="row pad">
                <div class="col text-center">
                    <img src="<?php echo base_url(); ?>/assets/assets_img/logo.png" style="height:50px; width:100px;">
                    <h4 id="center">About Us</h4>
                    <P>“
                        We are a leading online platform for booking hotels and resorts. We offer a wide range of accommodations at competitive prices, with easy booking and payment options.”</P>
                </div>
                <div class="col text-center" id="center">
                   <a href="mailto:flatemates09@mail.com" style="text-decoration:none;"> <h4  style="color:black;">Contact Us</h4></a>
                    
                </div>
                <div class="col text-center" >
                    <h4 id="center">Services</h4>
                    Search for and book hotels and resorts
                    View hotel details and amenities
                    Read and write reviews of hotels
                    Manage your bookings and reservations
                    Contact customer support for assistance
                    Receive personalized recommendations based on your preferences
                    Get exclusive deals and discounts on accommodations
                </div>
            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3" >
            © Copyright 2023 AURCM students
            <a href="<?php echo base_url('./public/index.php/home/terms_conditions') ?>" style="text-decoration:none;">Terms of Use</a>&nbsp&nbsp&
            <a href="<?php echo base_url('./public/index.php/home/privacy_policy') ?>" style="text-decoration:none;"> &nbsp Privacy Policy</a>
            <!-- <a class="text-dark">MDBootstrap.com</a> -->
        </div>

    </footer>
</body>

</html>