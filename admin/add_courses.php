<!doctype html>
<html lang="en" dir="ltr">

<?php include './common/head.php';
include './common/secure.php';
?>
<title> Create services</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';
            include './common/check_cat.php';
            ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Create Courses Link
                        </h1>


                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-6 ml-5 ">
                            <form id="form" action="./common/addcourse_code.php" method="POST">
                                <div class='mb-3 state2'>
                                    <label class='form-label required'>State</label>
                                    <select id='state' name='state' class='form-control'>
                                        <?php
                                        $query = "SELECT * FROM state";

                                        if ($result = mysqli_query($conn, $query)) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $row['state'] . '" >' . $row['state'] . '</option>';
                                            }
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class='mb-3 city_box'>
                                    <label class='form-label required'>City</label>
                                    <select id='city' name='city_id' class='form-control city'>

                                    </select>
                                    <span class="error"></span>

                                </div>
                                <div class="mb-3 cat_box">
                                    <label for="catagry">
                                        <h6>Catagry</h6>
                                    </label>
                                    <select class="custom-select cat" id="cat" name="cat_id">
                                        <?php
                                        $query = "SELECT * FROM category order by id";

                                        if ($result = mysqli_query($conn, $query)) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $row['id'] . '" >' . $row['cat_name'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <p id="priview" class="text-danger"></p>
                                    <input type="submit" class="form-control btn-green" id="submitbtn" style="cursor: pointer;" value="Create url" autocomplete="off">
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .error {
            color: red;

        }
    </style>
    <script>
        $(document).ready(function() {
            var state = $("#state").find('option:selected').val();
            // var city = $('.city').find('option:selected').val()
            var result
            $(document).on('change', ".city", function(e) {
                let city = $(this).find('option:selected').val();
                let cat = $($(this).parent()).nextUntil('.cat_box .cat').find('option:selected').val();
                checkblog(city, cat)
            })

            $("#state").change(function() {
                state = $("#state").find('option:selected').val();
                // alert(state);
                load(state)

            })

            function checkblog(city, cat) {
                $.ajax({
                    url: './common/checkcourse.php',
                    type: 'POST',
                    async: false,
                    data: {
                        city: city,
                        cat: cat,
                    },
                    success: function(data) {
                        if (data != '0') {
                            $('.error').html('Already Exit')
                        } else {
                            $('.error').html('')
                        }
                    },

                })
            }

            function load(states = state) {
                $.ajax({
                    url: './common/get_city.php',
                    type: 'POST',
                    data: {
                        state: state,
                    },
                    success: function(data) {
                        $('#city').html(data)
                        let city = $('#city').find('option:selected').val();
                        let cat = $('#cat').find('option:selected').val();
                        checkblog(city, cat)
                    }
                })
            }
            load(state)
            // $('#submitbtn').click(function (e) {
            //     e.preventDefault();
            //     $.ajax({
            //         url: 'create_services_titles_code.php',
            //         type: 'post',
            //         data: $('#form').serialize(),
            //         success: function (response) {
            //             // console.log(response)
            //             if (response == 1) {
            //                 $('#priview').html("Somthing Went Wrong");
            //             } else {
            //                 // $('#err').fadeIn();
            //                 window.location.replace("servicess.php?url='"+response+"'");
            //             }
            //         }
            //     });

            // });
            // jQuery END BRACEC 
        });
    </script>

</body>

</html>