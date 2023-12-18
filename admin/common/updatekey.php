<!doctype html>
<html lang="en" dir="ltr">

<?php include 'head.php';
include './secure.php';
?>

<title>All Link</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include 'header1.php';
            ?>
            <style>
                #customers {
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                #customers td,
                #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
                }

                #customers tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                #customers tr:hover {
                    background-color: #ddd;
                }

                #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #04AA6D;
                    color: white;
                }
            </style>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            All Link
                        </h1>

                        <div class="page-options d-flex">
                            <a href="download.php" id="add" class="btn btn-green btn-sm">Download</a>
                        </div>
                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset id="loading" class="form-fieldset col-12 ml-5 ">
                            <?php
                            include 'secure.php';

                            $query = "SELECT * FROM blog where `state` = 'Arunachal Pradesh' order by sno desc";

                            $result = mysqli_query($conn, $query);
                            $total = mysqli_num_rows($result);
                            if ($total > 0) {
                                $i = 0;
                                echo '<table id="customers">
        <tr>
        <th>sno</th>
        <th>Title</th>
        <th>Link</th>
        <th>Keyword</th>
        <th>Description</th>
        </tr>
        
        ';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $i = $i + 1;
                                    // $url = str_replace("mobile-repairing-course-in-","",$row['url']);
                                    // $url = str_replace(".php","",$url);
                                    // $url = str_replace("mobile-repairing-course-","",$url);
                                    // $url = str_replace("mobile-repairing-institute-in-","",$url);
                                    // $url = str_replace("mobile-repairing-curse-","",$url);
                                    // $url = trim(str_replace("-"," ",$url));
                                    // $url = explode(" ",$url);
                                    $xurl = [];
                                    // $iu = 0;
                                    // foreach($url as $ur){
                                    //   $xurl[$iu]=ucfirst($ur); 
                                    //   $iu++;
                                    // }
                                    // $url = ;
                                    // $place =trim(implode(" ",$xurl));
                                    // $state = $row['state'];
                                    // $device = "Mobile";
                                    // include 'key.php';
                                    // $title2 = "Mobile Repairing Course in $place | Mobile Repairing Institute in $place";
                                    // $title = "Mobile Repairing Course In $place | Mobile Repairing Institute In $place";
                                    //   $ben = 
                                    // "
                                    // <p>
                                    //   </p><h3>KEY BENEFITS OF LED TV REPAIRING COURSE :</h3><ul><li>Since a large number of LED TVs need to be repaired at the present and LED TV Repairing courses can give you a reliable source of earnings.</li><li>The LED TV repairing classes offered are designed specifically for short-term training that offers the advantages of having a budget-friendly, and you can pick an online or full-time course that best suits your requirements.</li><li>A LED TV repairing training course will not just show you how to fix LED TVs and repair them, but also turn you into a skilled technician who can start the doors of your business.</li><li>The LED TV repairing training course covers the entire technical aspects and also the methods to repair different models of LED TVs.</li></ul><p>
                                    // </p>";
                                    // $ben2  = 
                                    // "
                                    // <h3>KEY BENEFITS FROM MOBILE REPAIRING CLASSES :</h3><ul><li>There are many Mobiles that need to be repaired right now, so Mobile Repairing courses can provide a steady source of income.</li><li>These classes are specifically designed for mobile repairing. They can be used as a short-term training option. You can also choose an online or full time course to best suit your needs.</li><li>The Mobile Repairing Training Course will teach you not only how to repair and fix Mobiles but also how to become a skilled technician that can open the doors to your business.</li><li>This course covers all technical aspects of Mobile Repairing and the techniques to repair various models.</li></ul>";
                                    $data = str_replace("Andhra Pradesh", "Arunachal Pradesh", $row['data']);
                                    $dec = str_replace("Andhra Pradesh", "Arunachal Pradesh", $row['dec']);
                                    $key = str_replace("Andhra Pradesh", "Arunachal Pradesh", $row['key']);
                                    $short = str_replace("Andhra Pradesh", "Arunachal Pradesh", $row['short']);
                                    $title = str_replace("Andhra Pradesh", "Arunachal Pradesh", $row['title']);
                                    //     $data = "<h2>Mobile Repairing Course In $place</h2>".str_replace("$title2","<b>$title</b>",$row['short'])."<h3>
                                    //  KEY BENEFITS OF Laptop REPAIRING COURSE :
                                    // </h3>
                                    // <ul>
                                    //  <li>
                                    //   Because a lot of Laptop must be repaired at present and repair courses for Laptop can provide you with a reliable source of income.
                                    //  </li>
                                    //  <li>
                                    //   The repair classes for Laptop provided are designed especially for short-term instruction that gives the benefits of being affordable price, and you can choose the online or full-time program that is best suited to your needs.
                                    //  </li>
                                    //  <li>
                                    //   The Laptop repair training course won't just teach you how to fix laptops and fix them, but will also transform you into a proficient technician that can help you open the doors to your business.
                                    //  </li>
                                    //  <li>
                                    //   The Laptop repair training course covers all technical aspects and ways to fix various types of laptops.
                                    //  </li>
                                    // </ul>";
                                    $url2 = $row['url'];
                                    $sno = $row["sno"];
                                    $query2 = "UPDATE `blog` SET `data`= \"$data\",`dec`= \"$dec\",`key`= \"$key\",`short`= \"$short\",`title`= \"$title\" WHERE `sno` = '$sno'";
                                    // $result2 = mysqli_query($conn,$query2);
                                    echo " <tr>
    <td>" . $i . "</td>
    <td>" . $row['title'] . "</td>
    <td>" . $url . "</td>
     <td>" . $row['data'] . "</td>
     <td>" . $data . "</td>
    </tr>";
                                };
                            };

                            ?>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./ckeditor_4.17.1_full/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>

</body>

</html>