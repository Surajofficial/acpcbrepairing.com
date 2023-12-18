<!doctype html>
<html lang="en" dir="ltr">

<?php include './common/head.php';
include './common/secure.php';
?>

<title>All Link</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';
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
                            include './common/secure.php';

                            $query = "SELECT * FROM state as s inner join city as c on s.id = c.state_id order by state ";

                            $result = mysqli_query($conn, $query);
                            $total = mysqli_num_rows($result);
                            if ($total > 0) {
                                echo '<table id="customers">
                                <tr>
                                <th>ID</th>
                                <th>State</th>
                                <th>City</th>
                                </tr>
                                ';
                                $i = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $i = $i + 1;
                                    echo "
                                    <tr>
                                     <td>" . $i . "</td>
                                     <td>" . $row['state'] . "</td>
                                     <td>" . $row['city']  . "</td>
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