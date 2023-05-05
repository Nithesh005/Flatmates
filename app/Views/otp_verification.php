<?php
// if ($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()) {

//     //send email
//     $vars['code'] =  rand(10000, 99999);

//     //save to database
//     $vars['expires'] = (time() + (60 * 10));
//     $vars['email'] = $_SESSION['USER']->email;

//     $query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
//     database_run($query, $vars);

//     $message = "your code is " . $vars['code'];
//     $subject = "Email verification";
//     $recipient = $vars['email'];
//     send_mail($recipient, $subject, $message);
// }

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (!check_verified()) {

        $query = "select * from verify where code = :code && email = :email";
        $vars = array();
        $vars['email'] = $_SESSION['USER']->email;
        $vars['code'] = $_POST['code'];

        $row = database_run($query, $vars);

        if (is_array($row)) {
            $row = $row[0];
            $time = time();

            if ($row->expires > $time) {

                $id = $_SESSION['USER']->id;
                $query = "update users set email_verified = email where id = '$id' limit 1";

                database_run($query);

                header("Location: profile.php");
                die;
            } else {
                echo "Code expired";
            }
        } else {
            echo "wrong code";
        }
    } else {
        echo "You're already verified";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="otp_form">
        <form action="" method="post">
            <input type="text" value="" placeholder="enter otp">
            <a href="#">Send OTP</a>
            <input type="submit">
        </form>
    </div>
</body>

</html>