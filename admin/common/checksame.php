<?php
$city2 = array_unique($_POST['city']);
if (count($city2) != $_POST['num']) {
    echo 0;
} else {
    echo 1;
}
