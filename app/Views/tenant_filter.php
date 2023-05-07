<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    hello
    <ul class="list-group">
        <?php
        $districts = [
            ['district' => 'District A'],
            ['district' => 'District B'],
            ['district' => 'District C'],
            ['district' => 'District D']
        ];

        // foreach ($districts as $district) {
        //     echo '<input type="checkbox" name="district[]" value="' . $district['district'] . '"> ' . $district['district'] . '<br>';
        // }
        ?>
        <?php foreach ($districts as $district) : ?>
            <li class="list-group-item">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="product_check" value="<?= $district['district']; ?>" id="district"><?= $district['district']; ?>
                    </label>
                </div>
            </li>
        <?php endforeach; ?>

        <script type="text/javascript">
            $(document).ready(function() {
                $(".product_check").click(function() {
                    var district = getFilterText('district');
                    var price = getFilterText('price');
                    alert(price);
                })
            })
        </script>


        <?php //foreach ($districts as $district) {
        //     $districts = ['District A', 'District B', 'District C', 'District D'];
        //     echo $district . "<br>";
        // } 
        ?>
        <!-- <li class="list-group-item">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="product_check" value="<? //= $district['district']; 
                                                                            ?>" id="district"><? //= $district['district']; 
                                                                                                ?>
                    </label>
                </div>
            </li> -->
        <?php //endforeach; 
        ?>
    </ul>
</body>

</html>