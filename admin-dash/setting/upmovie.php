<?php
session_start();
require './acc.php';
if (isset($_POST['up'])) {

  include '../../dbh.php';

  $target = "../../uploads/".basename($_FILES['image']['name']);
  $targetsub = "../../subs/".basename($_FILES['subtitle']['name']);
  $targetvid = "../../video-uploads/".basename($_FILES['video']['name']);
  $name = strtolower($_POST['mname']);
  $genre = strtolower($_POST['genre']);
  $rdate = $_POST['release'];
  $rtime = $_POST['rtime'];
  $desc = $_POST['desc'];
  $image = $_FILES['image']['name'];
  $video = $_FILES['video']['name'];
  $subs = $_FILES['subtitle']['name'];
  
  $sql = "INSERT INTO movies(name, genre, rdate, runtime, decription, imgpath, videopath,subs)
    VALUES ( ? , ? , ? , ? , ? , ? , ? , '$subs' )";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$stmt = $conn->prepare($sql);

$stmt->bind_param("sssssss", $name, $genre, $rdate, $rtime, $desc, $image, $video);

$stmt->execute();
  move_uploaded_file($_FILES['subtitle']['tmp_name'],$targetsub);
  if (move_uploaded_file($_FILES['image']['tmp_name'],$target) && move_uploaded_file($_FILES['video']['tmp_name'],$targetvid)){
    header("Location: editmovies.php");
  }else {
    echo "خطأ في الرفع";
  }
}

?>
