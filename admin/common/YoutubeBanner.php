<?php
include 'conn.php';
$url = $_POST['url'];
$type = $_POST['type'];
$img = $_POST['img'];
if ($img != NULL) {
    $banner_dir = "../../assets/blog/image/banner/" . $img;
    $youtube_dir = "../../assets/blog/image/youtubebanner/" . $img;
    if ($type == 'banner_url') {
        unlink($banner_dir);
    } else {
        unlink($youtube_dir);
    }
    $query = "UPDATE `blog` SET `$type`=NULL WHERE `url`='$url'";
    if (mysqli_query($conn, $query)) {
        header("location:../edit_blog.php?url='$url'");
    } else {
        echo "Somthing Went Wrong:" . mysqli_error($conn);
    }
}
