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
            <?php include './common/header1.php'; ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            All City
                        </h1>

                        <div class="page-options d-flex">
                            <a href="addcity.php" id="add" class="btn btn-green btn-sm">Add City</a>
                        </div>

                    </div>
                    <div class="row align-items-center">
                        <div class="col-2">
                            <div class="col-12 mb-3">
                                <label for="state">
                                    <h6>State</h6>
                                </label>
                                <select class="custom-select" id="state">
                                    <option value="all" selected>All</option>
                                    <?php
                                    $query = "SELECT * FROM state order by state";

                                    if ($result = mysqli_query($conn, $query)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $row['id'] . '" >' . $row['state'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p class='col-11'>Total : <span id="total"></span> </p><br>
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
        body {
            height: 100vh !important;
            overflow: scroll !important;
        }
    </style>


    <script>
        $(document).ready(function() {
            var state = $("#state").find('option:selected').val();
            var sno = 0;
            var sno2 = 0;
            load(state);

            function load(state = "all") {
                $.ajax({
                    url: './common/city_load.php',
                    type: 'POST',
                    data: {
                        state: state,
                    },
                    success: function(data) {
                        data = $.parseJSON(data);
                        $('#total').html(data['total'])
                        $('#load_data').append(data['data']);
                        sno = data['sno'];
                    }
                })
            }
            // $(window).scroll(function() {
            //     if ($(window).scrollTop() + $(window).height() + 2 >= $(document).height()) {
            //         if (sno > 0 && sno2 != sno) {
            //             sno2 = sno
            //             load(state, sno);
            //         }
            //     }
            // });

            $("#state").change(function() {
                state = $("#state").find('option:selected').val();
                sno = 0
                // alert(state)
                $('#load_data').html('');
                load(state);
            })
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