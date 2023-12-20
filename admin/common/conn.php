<?php
// Connect to the Database 
date_default_timezone_set("Asia/Calcutta");
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "mobileorg2";
$servername = "119.18.54.59";
$username = "cloudbik_acpcb";
$password = "TbC&{?Ebn^o=";
$database = "cloudbik_acpcb";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
