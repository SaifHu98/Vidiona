<?php
session_start();
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
    include 'dbh.php';
    $im = "SELECT * FROM movies WHERE name = '$title'" ;

  $records = mysqli_query($conn,$im);
  while($result = mysqli_fetch_assoc($records));
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="player/video-js.css" rel="stylesheet">
  <link href="player/themes/city/index.css" rel="stylesheet">
  <link href="player/themes/fantasy/index.css" rel="stylesheet">
  <link href="player/themes/forest/index.css" rel="stylesheet">
  <link href="player/themes/sea/index.css" rel="stylesheet">
<script src="player/video.js"></script>
<script src="player/lang/ar.js"></script>

<link rel="stylesheet" href="./bootstrap/bootstrap.css" >
</head>
<body>
<video  id="my-player" class="video-js vjs-theme-fantasy" width="auto" height="auto"  controls preload="auto" poster="uploads/<?php echo $result[imgpath]; ?>" data-setup='{"language":"ar"}'>
  <source src="video-uploads/<?php echo $result[videopath]; ?>" type="video/mp4"></source>
  <source src="video-uploads/<?php echo $result[videopath]; ?>" type="video/webm"></source>
  <source src="video-uploads/<?php echo $result[videopath]; ?>" type="video/ogg"></source>
  <track label="العربية" kind="subtitles" srclang="ar" src="subs/<?php echo $result[subs]; ?>" default>

  <p class="vjs-no-js">
  <?php echo $LNG[playsupport]; ?>
    <a href="https://videojs.com/html5-video-support/" target="_blank">
    <?php echo $LNG[playsupportlink]; ?>
    </a>
  </p>
</video>
<script src="player/video.js"></script>
</body>
</html>
