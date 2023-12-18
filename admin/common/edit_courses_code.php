<?php
include 'conn.php';
$banner_dir = "../../assets/courses/image/banner/";
$youtube_dir = "../../assets/courses/image/youtubebanner/";
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
$short_data = $_POST['coursesShort'];
$data = $_POST['coursesData'];
$youtube_url = $_POST['youtubeurl'];
$left_key_title = $_POST['title_left'];
$left_key_dec = $_POST['dec_left'];
$right_key_dec = $_POST['dec_right'];
$right_key_title = $_POST['title_right'];

$key_left = [];
$key_right = [];
for ($i = 0; $i < count($left_key_title); $i++) {
    $key_left[strval($i + 1)] = [
        "dec" => $left_key_dec[$i],
        "title" => $left_key_title[$i],
    ];
}
for ($i = 0; $i < count($right_key_title); $i++) {
    $key_right[strval($i + 1)] = [
        "dec" => $right_key_dec[$i],
        "title" => $right_key_title[$i]
    ];
}
$dec = $_POST['dec'];
$title = $_POST['title'];
$key_left = json_encode($key_left);
$key_right = json_encode($key_right);
$query = "UPDATE `courses` SET `short_data`='$short_data',`data`='$data',`banner_url`='$headerBanner',`youtube_url`='$youtube_url',`youtube_banner`='$youtubeBanner',`dec` = '$dec',`key_feature_left` = '$key_left' ,`key_feature_right` = '$key_right',`title` = '$title' WHERE `url`='$url'";
// echo $query;
// exit();
if (mysqli_query($conn, $query)) {
    header("location:../courses.php?url='$url'");
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
