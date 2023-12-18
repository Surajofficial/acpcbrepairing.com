<?php
include 'secure.php';
$banner_dir = "../../assets/blog/image/banner/";
$youtube_dir = "../../assets/blog/image/youtubebanner/";
$url = $_POST['url'];
$banner = $_POST['banner'];
$youtube = $_POST['youtube'];
if ($youtube != NULL) {
    unlink($youtube_dir . $youtube);
}
if ($banner  != NULL) {
    unlink($banner_dir . $banner);
}
$query = "DELETE FROM blog where url = '$url'";
if (!mysqli_query($conn, $query)) {
    echo "Somthin Went Wrong";
}
