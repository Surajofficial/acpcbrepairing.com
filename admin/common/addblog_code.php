<?php
include "./secure.php";
$city2 = array_unique($_POST['city']);
// print_r($city2);
// exit();
include "data.php";
$i=0;
foreach ($city2 as $c) {
    $city_id = $c;
    $cat_id = $_POST['cat_name'];
    $query = "SELECT * from city  where id = $city_id";
    $result = mysqli_query($conn, $query);
    // echo $query;
    $row = mysqli_num_rows($result) > 0 ? mysqli_fetch_assoc($result) : exit();
    $city = $row['city'];
    $state_id = $row['state_id'];
    $query = "SELECT c.cat_name as cat_name,m.id as meta_id FROM category as c JOIN meta as m on c.id = m.cat_id    where c.id = $cat_id";
    // echo  $query;
    // exit();
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result) > 0 ? mysqli_fetch_assoc($result) : exit();
    $cat = $row['cat_name'];
    $url = str_replace(" ", "-", strtolower($cat)) . '-in-' . str_replace(" ", "-", strtolower($city));
    $short_data = substr(str_replace('"',"'",$data2[$i]),0,300);
    $data = "<h1>$cat in $city</h1> ". str_replace("{city}",$city, str_replace('"',"'",$data2[$i]));
    $meta_id = $row['meta_id'];
    $query = "INSERT INTO `blog` (`url`,`city_id`,`meta_id`,`short_data`,`data`,`cat_id`,`state_id`) 
VALUE('$url','$city_id','$meta_id',\"$short_data\",\"$data\",'$cat_id',$state_id)";
    // echo $query;
    // exit();
    if (!mysqli_query($conn, $query)) {
        header("Location:../blogs.php");
        break;
    }
    $i++;
}
header("Location:../edit_blog.php?url='$url'");
