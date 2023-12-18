<?php
include './admin/common/conn.php';
if (!isset($_GET['url'])) {
    echo "404";
    exit();
}
$url2 = $_GET['url'];
$query = "SELECT * FROM `courses` where `url` = '$url2'  and `status` = 1 ";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $query = "SELECT * FROM `courses` as b  where b.url = '$url2'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $cat = $row['cat_id'];
    $data = $row['data'];
    $title = $row['title'];
    $dec = $row['dec'];
    $faq_left = $row['key_feature_left'];
    $faq_right = $row['key_feature_right'];
    include './courses.php';
} else {
    $type = explode('/', $url2);
    if ($type[0] == "blog" && count($type) == 2) {
        $url2 = $type[1];
        $query = "SELECT * FROM `blog` where `url` = '$url2'  and `status` = 1 ";
        // echo $query;
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $query = "SELECT * FROM `blog` as b INNER JOIN `meta` as m on b.meta_id = m.id INNER JOIN `city` as c ON b.city_id = c.id INNER JOIN `state` as s on s.id = c.state_id INNER JOIN category as cat on b.cat_id = cat.id where b.url = '$url2'";

            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $cat = $row['cat_name'];
            $city = $row['city'];
            $title = $cat . ' In ' . $city . " | For Demo Call 9599704405";
            $data = $row['data'];
            // $banner_url = $row['banner_url'] != NULL ? $row['banner_url'] : 'banner.webp';
            // $youtube_url = $row['youtube_url'] != NULL ? $row['youtube_url'] : "https://www.youtube.com/embed/OQS1JKG_DH0";
            // $youtube_banner = $row['youtube_banner'];
            // $title = strtoupper($title);
            $state = $row['state'];
            $dec = str_replace('{city}', $city, $row['dec']);
            $key = "null";
            include './blogs.php';
        } else {
            http_response_code(404);
            include('404.php');
        }
    } else {
        http_response_code(404);
        include('404.php');
    }
}
