<?php
include 'secure.php';
$query = "SELECT * FROM blog order by sno desc ";
$id = 0;
$result = mysqli_query($conn,$query);
$total = mysqli_num_rows($result);
$state = [];
if($total>0){
 echo $total;
    while($row=mysqli_fetch_assoc($result)){
        $s = trim(str_replace(".","",explode(",",$row['dec'])[1])," ");
        array_push($state,$s);
        $sno = $row['sno'];
        $query2 = "UPDATE `blog` SET `state`= '$s' WHERE `sno`= $sno";
      if(mysqli_query($conn,$query2)){
        echo $query2;
      }
      else{
          echo"fail";
      }
    }
}
print_r(array_unique($state));
?>