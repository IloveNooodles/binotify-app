<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binotify - Insert new Song</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="/public/css/insertSong.css">
    <link rel="stylesheet" href="/public/css/navbar.css">
</head>
<body class="insert-album-page">
    <?php include_once 'src/view/component/navbar.php' ?>
    <a class="back-btn" href="/">
        <i class="arrow left"></i>
    </a>

    <form class="insert-song-form" action="/song/new" method="POST" enctype="multipart/form-data">
        <h3>Insert New Song</h3>
        <input type="text" placeholder="Title" id="judul" name="judul">
        <input type="text" placeholder="Artist" id="penyanyi" name="penyanyi">
        <input type="text" placeholder="Genre" id="genre" name="genre">

        <h4>Release Date</h4>
        <input type="date" placeholder="Tanggal Terbit" id="tanggal" name="tanggal">

        <h4>Song Cover</h4>
        <input type="file" id="cover" name="cover" accept="image/*">
        <h4>Song Audio</h4>
        <input type="file" id="song" name="song" accept="audio/*">

        <?php
            if (isset($data['status_message']) && $data['status_message'] == SUCCESS) {
                echo '<label class="sumbit-success">Submit Album Successful</label>';
            }
            else if (isset($data['status_message']) && ($data['status_message'] != SUCCESS)) {
                $msg = $data['status_message'];
                if ($data['status_message'] == 'INTERNAL_SERVER_ERROR') {
                    $msg = "Album already exists";
                } else if ($data['status_message'] == 'DATA_NOT_COMPLETE') {
                    $msg = "Please fill all the fields";
                } else {
                    $msg = "Something went wrong";
                }
                echo '<label class="sumbit-failure">' . $msg . '</label>';
            }
        ?>
        
        <button type="submit" class="btn primary submit-song">Submit Song</button>
    </form>

</body>
</html>
