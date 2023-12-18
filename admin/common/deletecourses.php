<?php
include 'secure.php';
$banner_dir = "../../assets/services/image/banner/";
$youtube_dir = "../../assets/services/image/youtubebanner/";
$url = $_POST['url'];
$banner = $_POST['banner'];
$youtube = $_POST['youtube'];
if ($youtube != NULL) {
    unlink($youtube_dir . $youtube);
}
if ($banner  != NULL) {
    unlink($banner_dir . $banner);
}
$query = "DELETE FROM courses where url = '$url'";
if (!mysqli_query($conn, $query)) {
    echo "Somthin Went Wrong";
}
