<?php
include 'conn.php';
$banner_dir = "../../assets/blog/image/banner/";
$youtube_dir = "../../assets/blog/image/youtubebanner/";
$result = [False];
if ($_FILES['headerBanner']['error'] == '0') {
    $result = fileUpload($_FILES['headerBanner'], $banner_dir);
    if ($result[0]) {
        $headerBanner = $result[1];
    } else {
        echo "Banner " . $result[1];
        exit();
    }
} else {
    $headerBanner = $_POST['headerBanner2'];
}
if ($_FILES['youtubeBanner']['error'] == '0') {
    $result =  fileUpload($_FILES['youtubeBanner'], $youtube_dir);
    if ($result[0]) {
        $youtubeBanner = $result[1];
    } else {
        echo "Youtube Banner " . $result[1];
        exit();
    }
} else {
    $youtubeBanner = $_POST['youtubeBanner2'];
}


$url = $_POST['url'];
$short_data =str_replace('"',"'", $_POST['blogShort']);
$data = str_replace('"',"'",$_POST['blogData']);
$youtube_url = $_POST['youtubeurl'];
$query = "UPDATE `blog` SET `short_data`=\"$short_data\",`data`=\"$data\",`banner_url`='$headerBanner',`youtube_url`='$youtube_url',`youtube_banner`='$youtubeBanner' WHERE `url`='$url'";
if (mysqli_query($conn, $query)) {
    header("location:../blogs.php?url='$url'");
} else {
    echo "Somthing Went Wrong:" . mysqli_error($conn);
}

function fileUpload($file, $path_dir)
{
    $vaildImg = ['png', 'webp', 'jpeg', 'jpg'];
    if ($file['size'] > '1066052 ') {
        return [False, "Image Size More Then 1 MB"];
    } else {
        $file_Name = basename($file["name"]);
        $imageFileType = strtolower(pathinfo($file_Name, PATHINFO_EXTENSION));
        $file_Name = "img-" . date('d-m-Y-h-i-s') . '.' . $imageFileType;
        $path = $path_dir . $file_Name;
        if (in_array($imageFileType, $vaildImg)) {
            if (move_uploaded_file($file["tmp_name"], $path)) {
                return [True, $file_Name];
            } else {
                return [False, "Image Not Uploded"];
            }
        } else {
            return [False, "Image is Not Vaild, Please Upload " . implode(', ', $vaildImg) . " format Only"];
        }
    }
}
