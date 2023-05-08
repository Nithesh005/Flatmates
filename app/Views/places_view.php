<!DOCTYPE html>
<html>
<head>
    <title>Places View</title>
</head>
<body>
    <form action="<?php echo base_url('public/index.php/home/place_con') ?>" method="post">
        <label>
            <input type="checkbox" name="places[]" value="dharmapuri" <?= in_array('dharmapuri', $places) ? 'checked' : '' ?>>
            Dharmapuri
        </label>
        <br>
        <label>
            <input type="checkbox" name="places[]" value="madurai" <?= in_array('madurai', $places) ? 'checked' : '' ?>>
            Madurai
        </label>
        <br>
        <input type="submit" value="Filter">
    </form>

    <table>
        <thead>
            <tr>
                <th>Place Name</th>
            </tr>
        </thead>
        <tbody>
            <?php //foreach ($results as $row) : ?>
                <!-- <tr>
                    <td><?//= $row['place_name'] ?></td>
                </tr> -->
            <?php // endforeach; ?>
        </tbody>
    </table>
</body>
</html>