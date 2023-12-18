<?php
$txt = ' <?php
include "../admin/conn.php";
$query = "SELECT * from blog where url = ' . "'$url'" . '";

$result = mysqli_query($conn,$query);
if($row = mysqli_fetch_assoc($result)){
    $data = $row["data"];
    $url = $row["url"];
    $dec= $row["dec"];
    $cat= $row["category"];
    $key = $row["key"];
    $title = $row["title"];
    $data = $row["data"];
}
'
    . "
define('FILE_NAME','Laptop-Repairing-syllabus-HO.docx');
" . '$page="$url";
$metaData' . "= array(
'title'		  =>" . '"$title"' . ",
'description' =>" . '"$dec"' . ",
'keywords'	  =>" . '"$key"' . ",
'canonical'	=> 'https://www.multitechinstitute.in'	,
);
" . 'include("common/header.inc.php");
?>
<div class="header_inner">
    <div class="container pb-4">
        <h1>
            <?=$title;?>
        </h1>
    </div>
</div>
<?php include("common/blog-bread.php");?>
<section class="page-wrapper">
    <div class="container">
        <div class="row  mt-5">
            <div class="col-lg-8">
                <div class="single-course-details">
                <?php echo $data;?>
                </div>
            </div>
            <div class="col-lg-4 ">
                <?php include("common/related_blog.php");?>
            </div>
        </div>
    </div>
</section>

<?php include("common/enroll.inc.php");?>
<?php include("common/bottom_content.inc.php");?>
<?php include("common/footer.inc.php");?>';
include("./data.php");
$in = $i - 1;
$para = str_replace("<strong>$title<strong>", $title, $data[$in]);
$content = "
 <h2>  $title </h2>
 <p>$para .</p> $ben
";
$short = "$data[$in]";
include("./key.php");
