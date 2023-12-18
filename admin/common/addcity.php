<?php
include 'secure.php';
$city = trim($_POST['city']);
$state_id = $_POST['state_id'];
$id = 0;
$data_id = null;
if (isset($_POST['city']) &&  $_POST['city'] != '') {
    $query = "SELECT * from `city` where `city` = '$city'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) <= 0) {
        $query = "INSERT INTO `city` (`city`,`state_id`) VALUE ('$city','$state_id')";
        if (!mysqli_query($conn, $query)) {
            $data =  "Somthing Went Wrong";
        } else {
            $id = 1;
            $query = "SELECT c.id as city_id ,c.city as city, s.state as state from city as c join state as s on c.state_id = s.id where c.city = '$city'";
            $result =  mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $data = "
            <td>" . $row['state'] . "</td>
            <td>" . $row['city'] . '</td>
            <td>
            <a class="btn btn-green btn-sm" href="edit_city.php?id=' . $row['city_id'] . '">Edit</a> 
            <a href="##" class="delete btn btn-danger btn-sm" data-id="' . $row['city_id'] . '">Delete</a> 
           </td>
            ';
            $data_id = "data_" . $row['city_id'];
        }
    } else {
        $data =  'Already Exist';
    }
} else {
    $data =  'Please Fill State';
}

$data2 = [
    'id' => $id,
    'data' => $data,
    'data_id' => $data_id
];
echo json_encode($data2);
