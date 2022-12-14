<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binotify - Premium Songs</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="/public/css/navbar.css">
    <link rel="stylesheet" href="/public/css/songList.css">
    <link rel="stylesheet" href="/public/css/subscribed.css">
</head>
<body>
    <?php include_once 'src/view/component/navbar.php' ?>
    <h2 class="pageTitle">Premium Songs</h2>
    <h3 class="pageArtist"> <?php
      $new_data = $data['result']; 
      $new_data = get_object_vars(json_decode($new_data));
      $real_data = get_object_vars($new_data['data']);
      $singer = get_object_vars($real_data['singer']);
      echo $singer['name'];
    ?> </h3>
    <?php
    require_once 'src/view/component/subscribed_song_list.php';
    return_html($data);
    ?>
    <script src="/public/js/subscribed.js"></script>
</body>