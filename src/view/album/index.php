<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Binotify - Albums</title>
  <link rel="stylesheet" href="/public/css/styles.css">
  <link rel="stylesheet" href="/public/css/navbar.css">
  <link rel="stylesheet" href="/public/css/albumList.css">
  <link rel="shortcut icon" href="/public/img/favicon.png" type="image/x-icon">
</head>
<body>
  <?php include_once 'src/view/component/navbar.php' ?>
  <h2 class="title">Albums</h2>
  <div class="album-list-container">
    <?php 
      include_once 'src/view/component/album_list.php';
      return_html($data);  
    ?>
  </div>
</body>
</html>
