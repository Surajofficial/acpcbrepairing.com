<?php
define('FILE_NAME', 'AC PCB Repairing syllabus.pdf');
$title = "Iphone Repairing Course";
$page = 'Iphone Repairing Course';
$metaData = array(
    'title'          => 'Iphone Repairing Course | Iphone Repairing Institute in Delhi',
    'description' => 'The use of Iphone is very high now a days and an Iphone Repairing Course can be helpful only if you find best Iphone Repairing Institute in Delhi',
    'keywords'      => 'Iphone repair Course near me, Iphone repairing Course, Iphone repairing Course fees, Iphone technician Course near me, Iphone repairing Course in delhi, Iphone repairing Course online, Iphone repair training centers near me, Iphone repairing Course near me, Iphone mechanic Course fees, Iphone mechanic Course, Iphone technician Course fees, Iphone technician Course, Iphone repairing Course',
);
include('common/header.inc.php');
?>
<div class="header_inner">
    <div class="container-fluid pb-4">
        <h1>

            <?= $title; ?>
        </h1>
    </div>
</div>
<?php include("common/breadcrumb.inc.php"); ?>
<section class="page-wrapper">
    <div class="container-fluid">
        <div class="row  mt-5">
            <div class="col-lg-8">
                <div class="single-course-details">

                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione ex nostrum corporis facilis eum sapiente numquam in omnis distinctio suscipit. Nemo est quaerat laudantium, maiores vero placeat dignissimos aliquam, voluptas tempore ducimus iusto fuga alias qui, incidunt consectetur aperiam quibusdam totam quos? Labore, quia explicabo tenetur nam tempora tempore modi sit doloremque soluta illo ex, placeat excepturi quam deleniti quibusdam vero qui esse, officia fugiat amet porro delectus reprehenderit voluptatum! Minima explicabo repudiandae eligendi harum, minus, illum eum pariatur corrupti, aspernatur eaque non beatae ipsam voluptatum cum quisquam deleniti ut! Sint dolor fugiat est illo quidem dolorum beatae hic corrupti!
                    <?php include('common/enq_popup.php'); ?>
                </div>
            </div>
            <div class="col-lg-4 ">
                <?php include("common/related_courses.inc.php"); ?>
                <?php include("common/enquiry.inc.php"); ?>
            </div>
        </div>
    </div>
</section>
<?php include("common/enroll.inc.php"); ?>
<?php include("common/bottom_content.inc.php"); ?>
<?php include("common/footer.inc.php"); ?>