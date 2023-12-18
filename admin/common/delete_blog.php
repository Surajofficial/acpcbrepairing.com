<?php
include 'conn.php';
$url = $_POST['url'];
$query  = "select * from blog where url = '$url'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$dir1 = "../blog/";
$data1=$row['url'];
unlink($dir1."/".$data1);//give correct path,
$query2 = "DELETE FROM `blog` WHERE url = '$url'";
$result = mysqli_query($conn, $query2);
