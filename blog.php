<?php
$metaData = array(
    'title'          => 'Blogs',
    'description' => 'Multitech Institute is the best Laptop repairing institute in Delhi. We give practical based classes for LED TV repairing course and Mobile repairing course also.',
    'keywords'      => 'laptop repairing course, Laptop repairing institute, best laptop repairing course in india, Mobile repairing institute, Mobile repairing course, led tv repairing course, led tv repairing institute, best lcd led training institute, led tv training institute, led repairing institute in delhi, led repairing course, laptop repairing institute in tilak nagar, laptop repairing institute in uttam nagar',
);
$Course_Json = file_get_contents('data/blog.json');
$Courses =  json_decode($Course_Json, true);
include('common/header.inc.php');

?>
<div class="header_inner">
    <div class="container-fluid pb-4">
        <h1><?= $metaData['title']; ?></h1>
    </div>
</div>
<section class="bg-service pt-md-5 pb-1">
    <center class="pb-md-5">
        <h1 class="whychoose">Our Blogs</h1>
    </center>
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($Courses as $cours) { ?>
                <div class="col-md-4 pb-5 pb-3 px-3">
                    <?php include("common/blog_card.php"); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>




</div>


<?php include("common/subscribe.inc.php"); ?>
<?php include('common/footer.inc.php'); ?>