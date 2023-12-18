<!doctype html>
<html lang="en" dir="ltr">

<?php
include './common/head.php';
include './common/secure.php';
?>

<title>Edit Blog</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';
            $url = $_GET['url'];
            $query = "SELECT * FROM blog WHERE url = $url";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $banner = $row['banner_url'];
            $url = $row['url'];
            ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Edit Blog
                        </h1>


                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-12 ml-5 ">
                            <form id="form" action="./common/edit_blog_code.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label required">URL</label>
                                    <input type="text" class="form-control" value="<?= $url ?>" disabled>
                                    <input type="hidden" name="url" value="<?= $url ?>">
                                </div>
                                <div class="mb-3 col-12 pr-0">
                                    <div class="row">
                                        <div class="mb-3 col-6 pl-0">
                                            <label class="form-label required">Header Banner</label>
                                            <input type="file" name="headerBanner" class="form-control" id="headerBaner">
                                            <input type="hidden" name="headerBanner2" class="form-control" value="<?= $banner ?>" id="headerBaner">
                                        </div>
                                        <div class="mb-3 col-6 pl-0">
                                            <label class="form-label required">Youtube Banner</label>
                                            <input type="file" name="youtubeBanner" id="youtube_url" class="form-control">
                                            <input type="hidden" name="youtubeBanner2" id="youtube_url" class="form-control" value="<?= $row['youtube_banner'] ?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3 col-12 pr-0">
                                    <div class="row">
                                        <div class="mb-3 col-6 pl-0">
                                            <img class="d-block" src="../assets/blog/image/banner/<?= $banner != NULL ? $banner : 'banner.webp'  ?>" id="banner_url" alt="">
                                            <a data-type="banner_url" data-img="<?= $banner ?>" data-url='<?= $url ?>' class="status btn btn-danger text-white btn-sm mt-1 deleteBanner">Set Default Banner Image</a>
                                        </div>
                                        <div class="mb-3 col-6 pl-0">
                                            <img class="d-block" src="../assets/blog/image/youtubebanner/<?= $row['youtube_banner'] != NULL ? $row['youtube_banner'] : 'banner.webp'  ?>" id="youtube_banner" alt="">
                                            <a class="status btn btn-danger text-white btn-sm mt-1 deleteBanner" data-type="youtube_banner" data-url='<?= $url ?>' data-img="<?= $row['youtube_banner'] ?>">Set default Youtube Banner Image</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Youtube URL</label>
                                    <input type="text" name="youtubeurl" class="form-control" value="<?php echo $row['youtube_url'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Blog Short</label>
                                    <textarea name="blogShort" id="blogShort" class="form-control" cols="140" rows="10"><?php echo $row['short_data'] ?></textarea>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Blog Content</label>
                                    <textarea name="blogData" class="p-3" id="editor" cols="140" rows="10"><?php echo $row['data'] ?></textarea>

                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="form-control btn-green" id="submitbtn" style="cursor: pointer;" value="Update">
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #youtube_banner,
        #banner_url {
            width: 90%;
            object-fit: cover;
        }
    </style>
    <script>
        $(' #headerBaner').change(function(e) {
            if (this.files) {
                var temp = URL.createObjectURL(this.files[0]);
                $('#banner_url').attr('src', temp)
            }
        })
        $('#youtube_url').change(function(e) {
            if (this.files) {
                var temp = URL.createObjectURL(this.files[0]);
                $('#youtube_banner').attr('src', temp)
            }
        })
        $('.deleteBanner').click(function(e) {
            // if (this.files) {
            //     var temp = URL.createObjectURL(this.files[0]);
            //     $('#youtube_banner').attr('src', temp)
            // }
            url = $(this).data('url');
            type = $(this).data('type');
            img = $(this).data('img');
            $.ajax({
                url: './common/YoutubeBanner.php',
                type: 'POST',
                data: {
                    url: url,
                    type: type,
                    img: img,
                },
                success: function(data) {
                    location.reload();
                }
            })
        })
    </script>
    <script src="./assets/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    <script>
        $("#id_100 option[value='<?php echo $scat; ?>']").attr("selected", "selected");
    </script>

</body>

</html>