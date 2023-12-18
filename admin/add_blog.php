<!doctype html>
<html lang="en" dir="ltr">

<?php include './common/head.php';
include './common/secure.php';
?>
<title> Create Blog</title>

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
                            Create Blog Link
                        </h1>


                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-6 ml-5 ">
                            <form id="form" action="./common/addblog_code.php" method="POST">
                                <div class='mb-3 state2'>
                                    <label class='form-label required'>State</label><input type="hidden" name="state_type" value="same">
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
                                <div class='mb-3'>
                                    <label class='form-label required'>City</label>
                                    <select id='city' name='city[]' class='form-control city'>

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="catagry">
                                        <h6>Catagry</h6>
                                    </label>
                                    <select class="custom-select" id="cat" name="cat_name">
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
                                    <span class="error"></span>
                                    <input type="submit" class="form-control btn-green" id="submitbtn" style="cursor: pointer;" value="Create url" autocomplete="off">
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var state = $("#state").find('option:selected').val();
            $("#state").change(function() {
                state = $("#state").find('option:selected').val();
                // alert(state);
                load(state)

            })

            function load(states = state) {
                $.ajax({
                    url: './common/get_city.php',
                    type: 'POST',
                    data: {
                        state: state,
                    },
                    success: function(data) {
                        $('#city').html(data)
                        checkblog()
                    }
                })
            }
            load(state)
            $(document).on('change', ".city", () => checkblog())
            $(document).on('change', '#cat', () => checkblog())


            function checkblog() {
                data = $('form').serialize();
                $.ajax({
                    url: './common/checkblogs.php',
                    type: 'POST',
                    data: data,
                    success: function(data) {
                        // data = JSON.parse(data)
                        if (data != 0) {
                            $("#submitbtn").attr('disabled', true)
                            $("#submitbtn").css('cursor', 'not-allowed')
                            $('.error').html("These City blogs Already Exits" + data)
                        } else {
                            $("#submitbtn").attr('disabled', false)
                            $("#submitbtn").css('cursor', 'pointer')
                            $('.error').html("")
                        }
                    }
                })
            }
            // $('#form').submit(function(e) {
            //     e.preventDefault();
            //     formData = new FormData(this);
            //     var el = $(this)
            //     $.ajax({
            //         url: './common/checksame.php',
            //         type: 'POST',
            //         data: data,
            //         success: function(data) {
            //             // data = JSON.parse(data)
            //             if (data == 0) {
            //                 $('.error').html("Its Seem Some blog are Repeted")
            //             } else {
            //                 el.unbind('submit').submit()
            //             }
            //         }
            //     })
            // });
            // $('#submitbtn').click(function (e) {
            //     e.preventDefault();
            //     $.ajax({
            //         url: 'create_blog_titles_code.php',
            //         type: 'post',
            //         data: $('#form').serialize(),
            //         success: function (response) {
            //             // console.log(response)
            //             if (response == 1) {
            //                 $('#priview').html("Somthing Went Wrong");
            //             } else {
            //                 // $('#err').fadeIn();
            //                 window.location.replace("blogs.php?url='"+response+"'");
            //             }
            //         }
            //     });

            // });
            // jQuery END BRACEC 
        });
    </script>

</body>

</html>