<?php
include 'secure.php';
$url = $_POST['url'];
$status = $_POST['status'];
$id = $_POST['id'];
if ($status == '1') {
    $query = "UPDATE courses set status=NULL where url = '$url'";
    $status = '<a data-status ="NULL" data-url ="' . $url . '" data-id="' . $id . '" id ="status_' . $id . '" class="status btn btn-warning text-white btn-sm">Live</a>';
} else {
    $query = "UPDATE courses set status='1' where url = '$url'";
    $status = '<a  data-status ="1" data-url ="' . $url . '" data-id="' . $id . '" id ="status_' . $id . '"   class="status btn btn-danger text-white btn-sm">Hide</a>';
}
if (mysqli_query($conn, $query)) {
    $courses = [
        'id' => '1',
        'status' => $status,
    ];
} else {
    $courses = [
        'id' => '0'
    ];
}
echo json_encode($courses);
