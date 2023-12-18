<?php
include "secure.php";
$num = $_POST['num'];
$stateType = $_POST['state_type'];
$id = " ";
for ($i = 1; $i <= $num; $i++) {
    if ($stateType == "same") {
        $state = $_POST['state'];
    } else {
        $state = $_POST["state_$i"];
    }
    $place = $_POST["city_$i"];
    $cat = $_POST['cat_name'];
    $url = $cat . " in " . $place;
    $url = str_replace(" ", "-", trim(strtolower($url)));
    //  echo $url;
    $x1 = explode("-", $url)[0];
    $x2 = explode("-", $url)[1];
    $device = $x1 == "ac" || $x1 == "led" ? "$x1 $x2" : $x1;
    $d = explode(" ", $device);
    $y = " ";
    foreach ($d as $v) {
        $j = ucfirst($v);
        $y = "$y $j";
    };
    $device = trim($y);
    if (strtolower($device) == "ac pcb") {
        $device = strtoupper($device);
    };
    $title = "$device Repairing Course In $place | $device Repairing Institute In $place";
    $path = "../blog/" . $url;
    $place = str_replace("-", " ", explode(".", explode("-in-", $url)[1])[0]);
    $x = explode(" ", $place);
    $y = " ";
    foreach ($x as $v) {
        $j = ucfirst($v);
        $y = "$y $j";
    };
    $place = trim($y);
    $course = str_replace("-", " ", explode("-in-", $url)[0]);
    include "write2.php";
    $query = "SELECT * FROM blog WHERE url='$url'";
    $result = mysqli_query($conn, $query);
    if ($url == ".php") {
        echo $url;
        //  continue;
    } else if (mysqli_num_rows($result) > 0) {
        echo "\t" . $url . ": Already Exit!</br>";
        continue;
    }

    $myfile = fopen($path, "w") or die("Unable to open file!");

    fwrite($myfile, $txt);
    fclose($myfile);
    $query = "INSERT INTO `blog`(`category`,`key`,`dec`, `url`, `title`, `data`, `short`,`state`) VALUES (\"$cat\",\"$key\",\"$dec\",\"$url\",\"$title\",\"$content\",\"$short\",\"$state\")";
    if (mysqli_query($conn, $query)) {

        echo $url . "</br>";
    } else {
        echo "\t\t $url : Created! </br>";
    }
}
echo "<a href='./blogs.php'>Go to blog</a>";
