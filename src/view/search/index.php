<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binotify - Search</title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="/public/css/navbar.css">
    <link rel="stylesheet" href="/public/css/songList.css">
    <link rel="stylesheet" href="/public/css/search.css">
    <link rel="shortcut icon" href="/public/img/favicon.png" type="image/x-icon">
</head>
<body>
    <?php include_once 'src/view/component/navbar.php' ?>
    <h2 class="title">Search</h2>
    <div class="top-menu">
        <form class="form-search" id="form-search">
            <div class="search-by">
              <label for="search-page">Judul / Penyanyi / Tahun Terbit</label>
              <input id="search-page" type="text" name="res" class="search-bar" placeholder="Search">
            </div>
            <div class="search-by">
              <label for="Genre">Genre</label>
              <select class="search-bar" name="genre" id="genre">
                <option value="a" selected>a</option>
                <option value="a">b</option>
                <option value="a">c</option>
                <option value="a">d</option>
              </select>
            </div>
            <div class="search-by">
              <label for="asc">Sort</label>
              <select class="search-bar" name="asc" id="asc">
                <option value="0" selected> Ascending</option>
                <option value="1"> Descending </option>
              </select>
              <select class="search-bar" name="orderby" id="orderby">
                <option value="judul" selected> Judul </option>
                <option value="penyanyi"> Penyanyi </option>
                <option value="tanggal_terbit"> Tahun terbit </option>
              </select>
            </div>
        </form>
    </div>
    <div id="search-result-list"></div>
    <!-- <?php include_once 'src/view/component/search_list.php'; return_search_list($data)?> -->
    <script defer src="/public/js/search.js"></script>
</body>
</html>
