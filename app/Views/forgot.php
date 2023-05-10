<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Page</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/profile.css?version=<?php echo rand(); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/fonts/css/all.css"); ?>" />
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="email"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .message {
      margin-top: 10px;
      text-align: center;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Forgot Password</h1>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Enter your email">
    </div>
    <button onclick="resetPassword()">Reset Password</button>
    <p class="message" id="message"></p>
  </div>

  <script>
    function resetPassword() {
      var email = document.getElementById('email').value;

      // Perform validation
      if (email.trim() === '') {
        document.getElementById('message').innerHTML = 'Please enter your email.';
      } else {
        // Send a request to the server for password reset
        // You can add your own logic here, such as AJAX requests to a server endpoint

        // Display a success message
        document.getElementById('message').innerHTML = 'An email with password reset instructions has been sent to your email address.';
      }
    }
  </script>
</body>
</html>
