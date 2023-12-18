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
            $num = $_POST['num'];
            // $query = "SELECT * FROM category WHERE sno = $id";
            // $result = mysqli_query($conn,$query);
            // $row = mysqli_fetch_assoc($result);

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
                            <form id="form" action="./common/addblogs_code.php" method="POST">
                                <div class="mb-3">
                                    <label for="catagry">
                                        <h6>State Type</h6>
                                    </label>
                                    <input type="hidden" id="num" name="num" value="<?php echo $num ?>" class="form-control" autocomplete="off">
                                    <select class="custom-select" id="stateType" name="state_type">
                                        <option value="same">Same</option>
                                        <option value="def">Different</option>
                                    </select>
                                </div>
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
                                <?php
                                for ($i = 1; $i <= $num; $i++) {
                                ?>
                                    <div class='mb-3 state'>
                                        <label class='form-label required'>State</label>


                                        <select id='state_<?= $i ?>' name='state[]' class='form-control state_val' data-city="city_<?= $i ?>">
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
                                        <label class='form-label required city'>City</label>
                                        <select id='city_<?= $i ?>' name='city[]' class="form-control city_option city">

                                        </select>

                                    </div>

                                <?php
                                }
                                ?>
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
            var err = true
            $(".state").hide();
            $(".state_val").attr('disabled', true);
            getCity(state, '.city_option')
            $("#stateType").change(function() {
                var state = $("#stateType").find('option:selected').val();
                if (state == "same") {
                    $(".state").hide();
                    $(".state_val").attr('disabled', true);
                    $("#state").attr('disabled', false);
                    $(".state2").show();
                } else {
                    $("#state").attr('disabled', true);
                    $(".state_val").attr('disabled', false);
                    $(".state").show();
                    $(".state2").hide();
                }

            })
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
            var data = ""
            $("#state").change(function() {
                var state = $("#state").find('option:selected').val();
                getCity(state, '.city_option')

            })
            $(".state_val").change(function() {
                var state = $(this).find('option:selected').val();
                id = "#" + $(this).data('city')
                getCity(state, id)

            })


            function getCity(state, id) {

                $.ajax({
                    url: './common/get_city.php',
                    type: 'post',
                    data: {
                        'state': state
                    },
                    success: function(response) {
                        if (response != 1) {

                            $(id).html(response)
                            $(id).removeAttr('disabled')
                            $("#cat").attr('disabled', false)
                            $("#submitbtn").attr('disabled', false)
                            $("#submitbtn").css('cursor', 'pointer')
                            checkblog()
                        } else {
                            $(id).html("<option value=''>No City Found</option>")
                            $(id).attr('disabled', true)
                            $("#submitbtn").attr('disabled', true)
                            $("#submitbtn").css('cursor', 'not-allowed')
                            $("#cat").attr('disabled', true)
                        }
                        // return data
                    }
                });

            }
            $('#form').submit(function(e) {
                e.preventDefault();
                formData = new FormData(this);
                var el = $(this)
                $.ajax({
                    url: './common/checksame.php',
                    type: 'POST',
                    data: data,
                    success: function(data) {
                        // data = JSON.parse(data)
                        if (data == 0) {
                            $('.error').html("Its Seem Some blog are Repeted")
                        } else {
                            el.unbind('submit').submit()
                        }
                    }
                })
            });
            // jQuery END BRACEC 
        });
    </script>

</body>

</html>