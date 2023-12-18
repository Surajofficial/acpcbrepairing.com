<!doctype html>
<html lang="en" dir="ltr">

<?php include 'head.php';
include './secure.php';
?>

<body class="">
    <div class="page">
        <div class="page-main">
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


                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-12 ml-5 ">
                            <?php
                            $num = (int)$_POST['num'];
                            $query = "SELECT * FROM blog where status = 'live'";

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
                                    echo " <tr>
                            <td>" . $i . "</td>
                            <td>" . $row['title'] . "</td>
                            <td>https://www.multitechinstitute.in/blog/" . $row['url'] . "</td>
                <td>" . $row['key'] . "</td>
                <td>" . $row['dec'] . "</td>
                  <td>" . $row['state'] . "</td>
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
</body>

</html>