<?php
include 'secure.php';
$query = "SELECT title,state FROM blog where category = 'AC PCB Repairing Course' and state = 'Haryana'";
$result = mysqli_query($conn, $query);
$total = mysqli_num_rows($result);
if ($total > 0) {
  $i = 0;
  //   echo '<table id="customers">
  // <tr>
  // <th>sno</th>
  // <th>Title</th>
  // <th>Link</th>
  // </tr>

  // ';
  $city = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $i = $i + 1;
    $title = explode("|", $row['title'])[0];
    array_push($city, strtolower(trim(str_replace("AC PCB Repairing Course In", "", $title))));
    // echo " <tr>
    // <td>".$i."</td>
    // <td>".str_replace("AC PCB Repairing Course In","",$title)."</td>
    // </tr>";

  };
  print_r($city);
};
$query2 = "SELECT title,state FROM blog where category = 'LED TV Repairing Course' and state = 'Haryana'";
$result2 = mysqli_query($conn, $query2);
$total2 = mysqli_num_rows($result2);
if ($total2 > 0) {
  $i = 0;
  echo '<table id="customers">
        <tr>
        <th>sno</th>
        <th>Title</th>
        <th>Link</th>
        </tr>
        
        ';
  while ($row2 = mysqli_fetch_assoc($result2)) {

    $title2 = explode("|", $row2['title'])[0];
    $city2 = str_replace("Led Tv Repairing Course In", "", $title2);
    echo strtolower(trim($city2, " ")) . "<br>";
    echo in_array(strtolower(trim($city2)), $city);
    if (!in_array(strtolower(trim($city2)), $city)) {
      $i = $i + 1;
      echo " <tr>
    <td>" . $i . "</td>
    <td>" . str_replace("Led Tv Repairing Course In", "", $title2) . "</td>
    </tr>";
    };
  };
};
