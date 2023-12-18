<?php
include 'secure.php';
$cat_id = $_POST['cat_id'];
$state_id = $_POST['state_id'];
$courses_id = $_POST['courses_id'];
$count_blog = $_POST['count_blog'];
$page = " order by b.id desc limit 5";
if ($courses_id != 0) {
    $page = " && b.id<$courses_id " . $page;
}
$query = "SELECT b.url as url,b.id as id,cat.cat_name as cat_name, b.status as status,b.short_data as short_data,c.city as city,b.banner_url as banner_url,b.youtube_banner as youtube_banner FROM courses as b INNER JOIN city as c on b.city_id = c.id INNER JOIN category as cat on b.cat_id = cat.id";
if ($cat_id != 'all' && $state_id != 'all') {
    $query .= " where b.cat_id = $cat_id && c.state_id = $state_id";
} else if ($cat_id != 'all') {
    $query .=  " where b.cat_id = $cat_id";
} else if ($state_id != 'all') {
    $query .=  " where c.state_id = $state_id";
} else {
    if ($courses_id != 0) {
        $page = " where b.id<$courses_id " . $page;
    }
}
// echo $query . $page;
// exit();
$result = mysqli_query($conn, $query);
$total = mysqli_num_rows($result);
$result = mysqli_query($conn, $query . $page);
if ($total > 0) {
    $data = '';
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $banner = $row['banner_url'];
        $youtube = $row['youtube_banner'];
        if ($row['status'] == NULL) {
            $status = '<a data-status ="NULL" data-url ="' . $row['url'] . '" data-id="' . $id . '" id ="status_' . $id . '" class="status btn btn-warning text-white btn-sm">Live</a>';
        } else {
            $status = '<a  data-status ="1" data-url ="' . $row['url'] . '" data-id="' . $id . '" id ="status_' . $id . '"   class="status btn btn-danger text-white btn-sm">Hide</a>';
        }
        $data .= '<div class="col-11">
        <div class="card" id="courses' . $id . '">
            <div class="row row-0">
                <div class="col-3">
                <div style="width:15px">' . $count_blog . '</div>
                    <img src=".\assets\images\flags/in.svg"
                        class="w-100 h-100 object-cover" alt="Card side image">
                </div>
                <div class="col">
                    <div class="card-body">
                        <h3 class="card-title">' . $row['cat_name'] . ' In ' . $row['city'] . '</h3>
                        <p>' . $row['short_data'] . '</p>
                        <a href="##" data-youtube ="' . $youtube . '" data-banner ="' . $banner . '" data-url="' . $row['url'] . '" class="delete btn btn-danger btn-sm">Delete
                            courses</a>
                        <a href="../' . $row['url'] . '" target="_blank"  class="btn btn-blue btn-sm">View
                            courses</a>
                        <a href="edit_courses.php?url=' . "'" . $row['url'] . "'" . '" id="add" class="btn btn-green btn-sm">Edit
                            courses</a>
                        ' . $status . '
                    </div>
                </div>
            </div>
        </div>
    </div>
';
        $count_blog++;
    }
    if (mysqli_num_rows($result) >= 5) {
        $data .= "<a data-id='$id' class='d-block col-4 m-auto  loadmore' > Load More </a>";
    }
    $courses = [
        'id' => $id,
        'count_blog' => $count_blog,
        'data' => $data,
        'total' => $total,
        'query' => $query
    ];

    // exit();
} else {
    $courses = [
        'total' => 0,
    ];
}
echo json_encode($courses);
