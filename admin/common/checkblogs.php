<?php
include './conn.php';
$cat = $_POST['cat_name'];
$city = array_unique($_POST['city']);
// print_r($city);
if ((count($city) > 0)) {
    $query = "select city from blog as b INNER JOIN city as c on b.city_id=c.id where cat_id='$cat' and `city_id` in (" . implode(',', $city) . ")";
    // echo $query;
    // exit();
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $data = [];
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $data[$i] = $row['city'];
            $i++;
        }
        echo json_encode($data);
    } else {
        echo 0;
    }
} else {
    echo 0;
}
