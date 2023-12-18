<?php
include './conn.php';
$cat = $_POST['cat'];
$city = $_POST['city'];
$query = "select * from courses where cat_id='$cat' and `city_id` = '$city'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo 1;
} else {
    echo 0;
}
