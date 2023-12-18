<?php
include "./secure.php";
$city_id = $_POST['city_id'];
$cat_id = $_POST['cat_id'];
$state =  $_POST['state'];

$query = "SELECT * from city where id = $city_id";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result) > 0 ? mysqli_fetch_assoc($result) : exit();
$city = $row['city'];
$query = "SELECT c.id as city_id,c.cat_name as cat_name,m.dec as dec1  FROM category as c JOIN meta as m on c.id = m.cat_id where c.id = $cat_id";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result) > 0 ? mysqli_fetch_assoc($result) : exit();
$cat = $row['cat_name'];
$title = $cat . ' In ' . $city;
$url = str_replace(" ", "-", strtolower($cat)) . '-in-' . str_replace(" ", "-", strtolower($city));
$short_data = "short data";
$data = "data";
$key_feture = [
    1 => [
        'title' => 'test title',
        'dec' => 'test dec'
    ],
    1 => [
        'title' => 'hello',
        'dec' => 'hello'
    ],
];
$key = json_encode($key_feture);
$dec = $row['dec1'];
$query = "SELECT * FROM `courses` WHERE `url` = '$url'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo "courses Already Exist";
} else {
    $query = "INSERT INTO `courses` (`url`,`city_id`,`dec`,`short_data`,`data`,`cat_id`,`key_feature_left`,`key_feature_right`,`title`) 
    VALUE('$url','$city_id','$dec','$short_data','$data','$cat_id','$key','$key','$title')";
    $result = mysqli_query($conn, $query);
    header("Location:../edit_courses.php?url='" . $url . "'");
}
