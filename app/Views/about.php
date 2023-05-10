<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/about.css?version=<?php echo rand(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <!-- header -->
    <?php require_once "commonheader.php"; ?>
    <!-- header -->


    <div class="container">
        <div class="first">
            <div class="heading">
                <h1>ABOUT US</h1>
            </div>
            <br>
            <br>
            <br>
            <div>

                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome
                    to our website! We are a team of passionate individuals who believe in providing our
                    customers
                    with a seamless and hassle-free booking experience. Our goal is to make it easier for you to find
                    and
                    reserve your perfect room, whether you're looking for a short-term stay or a long-term rental.
                    <br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our
                    dedicated customer support team is available around the clock to answer any questions or concerns
                    you
                    may have, and to help you make the most of your booking experience.
                    Thank you for choosing our website, and we look forward to serving you
                </h5>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="second">
            <div class="heading">
                <h1>OUR TEAM MATES</h1>
            </div>
            <br>
            <br>

            <div class="scene">

                <div class="card">
                    <div class="card__face card__face--front">
                        <img src="<?php echo base_url(); ?>about_asset/abi-anim.jpeg" alt="">
                    </div>
                    <div class="card__face card__face--back">
                        <img src="<?php echo base_url(); ?>about_asset/abi-normal.jpg" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="card__face card__face--front">
                        <img src="<?php echo base_url(); ?>about_asset/rose-anim.jpeg" alt="">
                    </div>
                    <div class="card__face card__face--back">
                        <img src="<?php echo base_url(); ?>about_asset/rose-normal.jpeg" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="card__face card__face--front">
                        <img src="<?php echo base_url(); ?>about_asset/mathan-anim.jpeg" alt="">
                    </div>
                    <div class="card__face card__face--back">
                        <img src="<?php echo base_url(); ?>about_asset/mathan-normal.jpg" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="card__face card__face--front">
                        <img src="<?php echo base_url(); ?>about_asset/nithi-anim.jpeg" alt="">
                    </div>
                    <div class="card__face card__face--back">
                        <img src="<?php echo base_url(); ?>about_asset/nithi-normal.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
<?php require_once "footer.php"; ?>

</html>