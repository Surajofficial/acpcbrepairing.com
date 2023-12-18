<!doctype html>
<html lang="en" dir="ltr">

<?php include './common/head.php' ?>
<title>Bolgs</title>

<body class="">
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

        .btn-danger {
            color: #fff !important;
            background-color: #cd201f;
            border-color: #cd201f;
        }
    </style>
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';
            include './common/check_cat.php' ?>
            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            All Keywords
                        </h1>



                    </div>
                    <p class='col-11'>Total : <span id="total"></span> </p><br>
                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-12 ml-5 ">
                            <table id="customers">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Description For City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="load_data">

                                    <?php
                                    include './common/secure.php';
                                    $query = "SELECT m.id as id,c.cat_name as cat_name,m.dec as dec1 from meta as m INNER JOIN category as c on c.id = m.cat_id   ORDER BY `id` DESC";
                                    // echo $query;
                                    // exit();
                                    $result = mysqli_query($conn, $query);

                                    $id = 1;
                                    if (mysqli_num_rows($result) > 0) {


                                        while ($row = mysqli_fetch_assoc($result)) {

                                            echo ' 
                                            <tr>
                                                    <td data-id="' . $row['id'] . '">' . $id . '</td>
                                                    <td>
                                                         ' . $row['cat_name'] . '
                                                     </td>
                                                    <td>
                                                         ' . $row['dec1'] . '
                                                     </td>
                                                     <td>
                                                         <a href="./edit_key.php?id=' . $row['id'] . '" id="delet"  data-id ="' . $row['id'] . '" class="btn btn-success btn-sm">Edit</a>
                                                     </td>
                                            </tr> ';
                                            $id = $id + 1;
                                        }
                                    } else {
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            height: 100vh !important;
            overflow: scroll !important;
        }
    </style>



</body>

</html>