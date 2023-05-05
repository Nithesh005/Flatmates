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
    <title>Document</title>
</head>

<body>

    <?php require_once "after_login_header.php"; ?>
    <br>
    <div class="container d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
            NewHouse</button>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 p-4">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">House number</label>
                            <input type="text" class="form-control" id="house_no" placeholder="20/93">
                        </div>

                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">About your house</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-12">
                            <label for="Description" class="form-label">Description</label>
                            <textarea class="form-control" id="Description" placeholder="Nearby facilities"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="Members_allowed" class="form-label">Members allowed</label>
                            <input type="text" class="form-control" id="Members_allowed" placeholder="5 members">
                        </div>
                        <div class="col-md-6">
                            <label for="Rent_amount" class="form-label">Rent Amount</label>
                            <input type="text" class="form-control" id="Rent_amount" placeholder="₹15000-/Per Month">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="Madurai">
                        </div>

                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">State</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Tamilnadu">
                        </div>

                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">Zip Code </label>
                            <input type="text" class="form-control" id="inputZip">
                        </div><br>
                        <form action="#">
                            <div class="input-file-container">
                                <input class="input-file" id="my-file" type="file" multiple>
                                <label tabindex="0" for="my-file" class="input-file-trigger">Select files...</label>
                            </div>
                            <p class="file-return"></p>
                        </form>


                    </form>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Post</button>
                    </div>
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
                            <img src="<?php echo base_url("/assets/images/boat.jpg") ?>" class="img-fluid rounded-start"
                                alt="...">
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
                            <img src="<?php echo base_url("/assets/images/boat.jpg") ?>" class="img-fluid rounded-start"
                                alt="...">
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
                            <img src="<?php echo base_url("/assets/images/boat.jpg") ?>" class="img-fluid rounded-start"
                                alt="...">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
<script>
    $("#new_house_submit").click(function () {
        var house_no = $("#house_no").val()
        // alert("clicked");
        $.ajax({
            url: "<?php echo base_url('public/index.php/Dbcontrollers/new_house_reg_data'); ?>",
            method: "POST",
            dataType: "json",
            data: {
                house_no: house_no,
            },
            success: function (res) {
                alert(res);
            },
            error: function (er) {
                // console.error(er);
                console.log("error")
            }
        })

    })

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


</script>


</html>