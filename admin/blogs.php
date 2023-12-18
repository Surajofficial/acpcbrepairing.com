<!doctype html>
<html lang="en" dir="ltr">

<?php include './common/head.php'
?>
<title>Bolgs</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';
            include './common/check_blog.php'; ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Blogs
                        </h1>
                        <div class="page-options d-flex">
                            <a href="add_blog.php" id="add" class="btn btn-green btn-sm <?= $u_mail != 'suraj12gonda@gmail.com'?'d-none':'' ?>">Add Blogs</a>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-2">
                            <div class="col-md-12 mb-3">
                                <label for="catagry">
                                    <h6>Catagry</h6>
                                </label>
                                <select class="custom-select" id="cat">
                                    <option value="all" selected>All</option>
                                    <?php
                                    $query = "SELECT * FROM category";
                                    if ($result = mysqli_query($conn, $query)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $row['id'] . '" >' . $row['cat_name'] . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-2 ml-auto">
                            <div class="col-12 mb-3">
                                <label for="state">
                                    <h6>State</h6>
                                </label>
                                <select class="custom-select" id="state">
                                    <option value="all" selected>All</option>
                                    <?php
                                    $query = "SELECT * FROM state";

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
                    <div class="row row-cards spotlight-group" data-fit="contain" data-autohide="all" id="load_data">
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

        .loadmore {
            cursor: pointer;
            background-color: blue;
            text-align: center;
            color: white !important;
            height: 50px;
            display: flex !important;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
        }
    </style>


    <script>
        $(document).ready(function() {

            var cat = $("#cat").find('option:selected').val();
            var state = $("#state").find('option:selected').val();
            var id = 0
            var total_page = 0
            var page_number = 0
            var count_blog = 1
            var total = 0

            function load(cat_id = cat, state_id = state, blog_id = id) {
                page_number = page_number + 1
                if (count_blog != 0 && count_blog != total) {
                    $.ajax({
                        url: './common/blog_load.php',
                        type: 'POST',
                        data: {
                            cat_id: cat_id,
                            state_id: state_id,
                            blog_id: blog_id,
                            count_blog: count_blog
                        },
                        success: function(data) {
                            data = $.parseJSON(data);
                            if (data['total'] != 0) {
                                $('#total').html(data['total'])
                                $('#load_data').append(data['data']);
                                total = data['total'];
                                total_page = Math.ceil(data['total'] / 5)
                                id = data['id'];
                                count_blog = data['count_blog'];
                            } else {
                                $('#total').html(data['total'])
                                count_blog = 0
                            }
                        }
                    })
                }
            }
            load()
            // $(window).scroll(function() {
            //     if ($(window).scrollTop() + $(window).height() + 2 >= $(document).height()) {
            //         console.log(page_number)
            //         console.log(total_page)
            //         if (page_number < total_page) {
            //             load(cat, state, id);
            //         }
            //     }
            // });
            $(document).on('click', '.loadmore', function() {
                id = $(this).data('id')
                $(this).remove()
                load(cat, state, id);
            })

            $(document).on('click', '.delete', function(e) {
                banner = $(this).data('banner')
                url = $(this).data('url')
                youtube = $(this).data('youtube')
                var conf = confirm('Do You Want to delet this Blog');
                if (conf) {
                    $.ajax({
                        type: "POST",
                        url: './common/deleteBlog.php',
                        data: {
                            url: url,
                            youtube: youtube,
                            banner: banner
                        },
                        success: function() {
                            location.reload()
                        }
                    })
                }
            })
            $(document).on("click", ".status", function() {
                $(this).preventDefault;
                var status = $(this).data("status");
                var url = $(this).data("url");
                var id = $(this).data("id");
                $.ajax({
                    url: './common/status_blog.php',
                    type: 'POST',
                    data: {
                        url: url,
                        status: status,
                        id: id
                    },
                    success: function(data) {
                        data = $.parseJSON(data);
                        if (data['id'] == '1') {
                            $('#status_' + id).replaceWith(data['status'])
                        }
                    }
                })

            })
            $(document).on("change", "#cat", function() {
                $('#load_data').html('');
                cat = $("#cat").find('option:selected').val();
                state = $("#state").find('option:selected').val();
                id = 0
                total_page = 0
                page_number = 0
                count_blog = 1
                load()
            })
            $(document).on("change", "#state", function() {
                $('#load_data').html('');
                cat = $("#cat").find('option:selected').val();
                state = $("#state").find('option:selected').val();
                id = 0
                total_page = 0
                page_number = 0
                count_blog = 1
                load()
            })
            // jQuery END BRACEC 
        });
    </script>
</body>

</html>