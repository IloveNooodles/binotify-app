<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binotify</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="/public/css/insertAlbum.css">
</head>
<body class="insert-album-page">
    <?php include_once 'src/view/component/navbar.php' ?>
    <a class="back-btn" href="/">
        <i class="arrow left"></i>
    </a>

    <form class="insert-album-form" action="/login" method="POST">
        <h3>Insert New Album</h3>
        <input type="text" placeholder="Judul" id="judul" name="judul">
        <input type="text" placeholder="Penyanyi" id="penyanyi" name="penyanyi">
        <input type="text" placeholder="Tanggal Terbit" id="tanggal" name="tanggal">
        <input type="text" placeholder="Genre" id="genre" name="genre">
        
        <h4>Album Cover</h4>
        <input type="file" id="cover" name="cover">
        
        <button type="submit" class="btn primary submit-album">Submit Album</button>
    </form>

</body>
</html>