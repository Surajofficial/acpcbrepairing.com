<!doctype html>
<html lang="en" dir="ltr">
<?php include './common/head.php';
include './common/secure.php';
?>
<title>Update City</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';
            ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Add City
                        </h1>
                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-6 ml-5 ">
                            <form id="form" action="create_blog_titles_code.php" method="POST">
                                <div class='mb-3 state2'>
                                    <label class='form-label required'>State</label>
                                    <select id='state' name='state_id' class='form-control'>
                                        <?php
                                        $query = "SELECT * FROM state";

                                        if ($result = mysqli_query($conn, $query)) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $row['id'] . '"  >' . $row['state'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class='mb-3'>
                                    <label class='form-label required'>City</label>
                                    <input type='text' id='city' name='city' placeholder='Enter City Name' class='form-control' autocomplete='off'>
                                </div>
                                <div class="mb-3">
                                    <p id="priview" class="text-danger"></p>
                                    <input type="submit" class="form-control btn-green" id="submitbtn" style="cursor: pointer;" value="Add City" autocomplete="off">
                                </div>
                            </form>
                        </fieldset>
                    </div>
                    <h4>New Added City</h4>
                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-12 ml-5 ">
                            <table id="customers">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="load_data">

                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script>
        $(document).ready(function() {
            var id = 1;
            $('#submitbtn').click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: './common/addcity.php',
                    type: 'post',
                    data: $('#form').serialize(),
                    success: function(response) {
                        data = $.parseJSON(response);
                        if (data['id'] == 1) {
                            $('#priview').html('');
                            data = "<tr id='" + data['data_id'] + "'><td>" + id + "<\/td>" + data['data'] + "</tr>";
                            id = id + 1;
                            $('#load_data').append(data);
                        } else {
                            // $('#err').fadeIn();
                            $('#priview').html(data['data']);
                            // window.location.replace("allcity.php");
                        }
                    }
                });

            });
            $(document).on("click", ".delete", function(e) {
                $(this).preventDefault;
                var id = $(this).data("id");
                // alert(url);
                var conf = confirm('Do You Want to delet this City');
                if (conf) {
                    $.ajax({
                        url: './common/delete_city.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(data) {
                            // console.log(data);
                            if (data == 1) {
                                // alert(id);
                                data = '#data_' + id;
                                // $(this).closest('data').remove();
                                $(data).fadeOut();
                            } else {
                                alert(data)
                            }
                        }
                    })
                }
            })
            // jQuery END BRACEC 
        });
    </script>

</body>

</html>