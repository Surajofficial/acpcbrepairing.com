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
$content = "
 <h2>  $title </h2>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem nisi non ipsum nemo commodi explicabo voluptatem eligendi voluptate culpa aut alias minus quam repudiandae nihil repellat ipsam, maiores labore hic aliquam nulla nobis id praesentium! Dolorum accusamus veniam perferendis est quia dicta distinctio quisquam doloribus, mollitia quas iusto qui cum nostrum rerum maiores, laborum perspiciatis a quos eligendi quidem cupiditate temporibus! Explicabo accusantium modi nisi quos saepe facilis aspernatur. Suscipit quas tempora, ut dignissimos assumenda obcaecati minus a eveniet vitae minima amet autem! Nostrum soluta non et itaque officia perspiciatis in cum incidunt? Hic totam esse ex modi vero beatae perspiciatis deleniti! Corporis commodi perspiciatis eligendi beatae. Praesentium vero corrupti laborum fugiat quia perferendis ullam cumque voluptas ipsum deserunt aperiam temporibus dolor cupiditate magnam, tenetur ratione? Ut, provident voluptatibus. Mollitia, repellendus, nisi labore blanditiis vitae, praesentium itaque autem quae fugit at dolores voluptatibus sit laudantium ipsam illum tempora quos! Illum illo voluptates vel eius facere! Placeat quis praesentium quos sed necessitatibus maiores facere eum eveniet laboriosam blanditiis. In repudiandae, possimus eos velit at dolores officia animi nemo molestias architecto minus aliquid corrupti ipsum illo saepe magni laboriosam? At perspiciatis consequatur distinctio eligendi ullam quo, soluta, veniam accusamus, incidunt laboriosam ratione assumenda. Magnam minima blanditiis, sit ipsa, ipsam eveniet voluptas rem dolore doloribus sint eaque voluptate rerum, eius accusamus laudantium libero. Ipsum non vitae modi voluptates fuga laudantium natus, earum beatae quasi magni iure dolores exercitationem, ad laborum autem optio totam dicta sunt debitis molestiae officia voluptatum esse excepturi! Repellendus deserunt dolorem dolorum quas ducimus corporis reiciendis molestiae quam! Aliquid quidem commodi vitae voluptate maxime nisi quam, reiciendis illo necessitatibus consectetur? Doloremque est laboriosam vel quis quia accusantium quam qui reprehenderit. Mollitia, omnis error eos assumenda provident nisi quae eaque corrupti, reiciendis architecto molestias reprehenderit debitis voluptatem, porro velit sunt dicta.";
$short = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem maxime et sapiente laboriosam? Nobis cupiditate quisquam placeat. Nobis explicabo eaque harum quidem ab! Laboriosam, minima velit doloribus molestias inventore aliquid placeat! Quo, cumque mollitia magni sunt nobis eum dignissimos nihil nemo consequuntur ipsum tempore libero numquam accusantium molestiae perspiciatis provident.";
$state = "Meghalaya";
if (strtolower(trim($place)) == strtolower(trim($state))) {
    $key = "AC Repairing Course In $place, AC PCB Repairing Course In $place, AC Repairing Institute In $place, AC PCB Repairing Institute In $place, AC Repairing Course, AC Repairing Course In India, AC PCB Repairing Course, AC PCB Repairing Course In India, AC PCB Repairing Course Near Me, AC Repairing Course Near Me, Inverter AC Repairing Course, Non-Inverter AC Repairing Course, AC Repairing Institute, AC Repairing Institute In India, AC PCB Repairing Institute, AC PCB Repairing Institute In India, AC Repairing Institute Near Me, AC PCB Repairing Institute Near Me, Inverter AC Repairing Institute, Non-Inverter AC Repairing Institute";
    $dec = "Multitech Institute is the best $device repairing institute in $place. We give practical-based classes for $device repairing course in $place";
} else {
    $key = "
        AC Repairing Course In $place, AC PCB Repairing Course In $place, AC Repairing Institute In $place, AC PCB Repairing Institute In $place, AC Repairing Course In $state, AC PCB Repairing Course In $state, AC Repairing Institute In $state, AC PCB Repairing Institute In $state, AC Repairing Course, AC Repairing Course In India, AC PCB Repairing Course, AC PCB Repairing Course In India, AC PCB Repairing Course Near Me, AC Repairing Course Near Me, Inverter AC Repairing Course, Non-Inverter AC Repairing Course, AC Repairing Institute, AC Repairing Institute In India, AC PCB Repairing Institute, AC PCB Repairing Institute In India, AC Repairing Institute Near Me, AC PCB Repairing Institute Near Me, Inverter AC Repairing Institute, Non-Inverter AC Repairing Institute";
    $dec = "Multitech Institute is the best $device repairing institute in $place. We give practical-based classes for $device repairing course in $place, $state";
};
