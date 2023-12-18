<!doctype html>
<html lang="en" dir="ltr">
<?php include './common/head.php';
include './common/secure.php';
$id = $_GET['id'];
$getcity = "SELECT s.id as id,s.state as state,c.id as city_id,c.city as city, c.state_id as state_id FROM state as s inner join city as c on s.id = c.state_id where c.id = '$id'";
$result = mysqli_query($conn, $getcity);
$row2 = mysqli_fetch_assoc($result);
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
                            Update City Name
                        </h1>


                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-6 ml-5 ">
                            <form id="form" action="create_blog_titles_code.php" method="POST">
                                <div class="mb-3">
                                    <input type="hidden" id="city_id" name="city_id" value="<?php echo $_GET['id'] ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class='mb-3 state2'>
                                    <label class='form-label required'>State</label>
                                    <select id='state' name='state_id' class='form-control'>
                                        <?php
                                        $query = "SELECT * FROM state";

                                        if ($result = mysqli_query($conn, $query)) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                if ($row['id'] == $row2['state_id']) {
                                                    echo '<option value="' . $row['id'] . '" selected >' . $row['state'] . '</option>';
                                                } else {
                                                    echo '<option value="' . $row['id'] . '"  >' . $row['state'] . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class='mb-3'>
                                    <label class='form-label required'>City</label>
                                    <input type='text' id='city' name='city' value="<?= $row2['city'] ?>" placeholder='Enter City Name' class='form-control' autocomplete='off'>
                                </div>
                                <div class="mb-3">
                                    <p id="priview" class="text-danger"></p>
                                    <input type="submit" class="form-control btn-green" id="submitbtn" style="cursor: pointer;" value="Update" autocomplete="off">
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
            $(".state").hide();
            $("#stateType").change(function() {
                var state = $("#stateType").find('option:selected').val();
                if (state == "same") {
                    $(".state").hide();
                    $(".state2").show();
                } else {
                    $(".state").show();
                    $(".state2").hide();
                }

            })
            $('#submitbtn').click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: './common/updatecity.php',
                    type: 'post',
                    data: $('#form').serialize(),
                    success: function(response) {
                        // console.log(response)
                        if (response == 1) {
                            $('#priview').html("Somthing Went Wrong");
                        } else {
                            // $('#err').fadeIn();
                            // alert(response)
                            window.location.replace("allcity.php");
                        }
                    }
                });

            });
            // jQuery END BRACEC 
        });
    </script>

</body>

</html>