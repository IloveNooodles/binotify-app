<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Binotify</title>
  <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
  <?php print_r($GLOBALS); ?>
  <?php include_once 'src/view/component/navbar.php' ?>
  <h1 class="title">Welcome, Guest</h1>
  <?php include_once 'src/view/component/songList.php' ?>
</body>
</html>