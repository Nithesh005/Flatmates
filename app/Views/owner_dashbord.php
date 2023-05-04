<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Font aswesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<style>

</style>

<body>

    <?php require_once "after_login_header.php"; ?>
    <br>
    <div class="container d-flex justify-content-end">
        <button type="button" class="btn btn-outline-primary mt-100" data-bs-toggle="modal" data-bs-target="#popup" data-bs-whatever="@fat"><i class="fa-solid fa-plus"></i> New House</button>
    </div>


    <!-- popup content -->
    <div class="modal fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form class="row g-3 p-4">
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">House number</label>
                        <input type="text" class="form-control" id="house_no">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">About your house</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>

                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">State</label>
                        <input type="text" class="form-control" id="inputPassword4">
                    </div>

                    <div class="col-md-6">
                        <label for="inputZip" class="form-label">Zip Code </label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </form>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="new_house_submit">Submit</button>
                </div>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <!-- card 1 -->
                <div class="card mb-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-12">
                            <img src="<?php echo base_url("/assets/images/boat.jpg") ?>" class="img-fluid rounded-start" alt="...">
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
                            <img src="<?php echo base_url("/assets/images/boat.jpg") ?>" class="img-fluid rounded-start" alt="...">
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
                            <img src="<?php echo base_url("/assets/images/boat.jpg") ?>" class="img-fluid rounded-start" alt="...">
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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<script>
    $("#new_house_submit").click(function() {
        var house_no = $("#house_no").val()
        // alert("clicked");
        $.ajax({
            url: "<?php echo base_url('public/index.php/Dbcontrollers/new_house_reg_data'); ?>",
            method: "POST",
            dataType: "json",
            data: {
                house_no: house_no,
            },
            success: function(res) {
                alert(res);
            },
            error: function(er) {
                // console.error(er);
                console.log("error")
            }
        })

    })
</script>


</html>