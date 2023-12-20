<?php
$metaData = array(
    'title'          => 'Our Courses',
    'description' => 'Multitech Institute is the best Laptop repairing institute in Delhi. We give practical based classes for LED TV repairing course and Mobile repairing course also.',
    'keywords'      => 'laptop repairing course, Laptop repairing institute, best laptop repairing course in india, Mobile repairing institute, Mobile repairing course, led tv repairing course, led tv repairing institute, best lcd led training institute, led tv training institute, led repairing institute in delhi, led repairing course, laptop repairing institute in tilak nagar, laptop repairing institute in uttam nagar',
    'canonical'    => 'https://www.multitechinstitute.in',
);
include '../admin/common/conn.php';
$querry = "select * from courses as b inner join category as c on b.cat_id = c.id where `status` = 1 ";
if (isset($_GET['cat'])) {

    $cat = $_GET['cat'];
    $querry .= " and `cat_name` = '$cat'";
}
$querry .= " LIMIT 9";
$result = mysqli_query($conn, $querry);
$count = mysqli_num_rows($result);
include('../common/header.inc.php');
?>
<div class="header_inner">
    <div class="container-fluid pb-4">
        <h1><?= $metaData['title']; ?></h1>
    </div>
</div>
<section class="bg-service pt-md-5 pb-1">
    <center class="pb-md-5">
        <h1 class="whychoose">Our Courses</h1>
    </center>
    <div class="container-fluid">
        <div class="row">
            <?php
            if ($count > 0) {
                while ($cours = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-md-4 pb-5 pb-3 px-3">
                        <?php include("../common/courses.php"); ?>
                    </div>
                <?php }
            } else {
                ?>
                <p class="text-center">No Data Found</p>
            <?php
            } ?>
        </div>
    </div>
</section>




</div>


<?php include("../common/subscribe.inc.php"); ?>
<?php include('../common/footer.inc.php'); ?>