<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Binotify - Login</title>
  <link rel="stylesheet" href="/public/css/styles.css">
  <link rel="stylesheet" href="/public/css/login.css">
  <link rel="shortcut icon" href="/public/img/favicon.png" type="image/x-icon">
</head>
<body>
  <a class="back-btn" href="/">
    <i class="arrow left"></i>
  </a>
  <form class="login-form" action="/login" method="POST">
      <h3>Binotify</h3>
      <input type="text" placeholder="Username" id="username" name="username">
      <input type="password" placeholder="Password" id="password" name="password">
      <?php
        if(isset($data['status_message']) && $data['status_message'] != SUCCESS){
          echo '<label id="login-failure">Invalid Username or Password</label>';
        }
      ?>
      <button type="submit" class="btn primary login">Log In</button>
      <a href="/register">
        <button type="button" class="btn primary register">Register</button>
      </a>
  </form>
  <script defer src="/public/js/login.js"></script>
</body>
</html>