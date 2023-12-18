<?php
$query = "select DISTINCT state_id,state  from courses cr inner join city as c on cr.city_id = c.id inner join state as s on c.state_id = s.id where `cat_id` = '$cat' and status = '1'";
$result = mysqli_query($conn, $query);
?>
<div class="row main-footer wow  fadeInDown footer">
    <div class="col-12">
        <h6 class="text-white">Related Course In India</h6>
        <hr>
    </div>
    <style>
        .state {
            display: block;
            width: 50%;
        }

        @media only screen and (min-width:740px) {
            .state {
                display: block;
                width: 30%;

            }

        }

        @media only screen and (min-width:940px) {
            .state {
                display: block;
                width: 20%;
            }

        }





        .state2 {
            width: auto;
            max-width: 200px;
        }
    </style>
    <div class="col-12 accordion2 res-991-pb-30" id="link-widget">
        <ul class="toggle row ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="state">
                        <div class="collapsible state2"><?= $row['state'] ?></div>
                        <div class="content" style="width: auto;">
                            <ul>
                                <?php
                                $id = $row['state_id'];
                                $query =  "select *  from courses cr inner join city as c on cr.city_id = c.id inner join state as s on c.state_id = s.id inner join category as cat on cr.cat_id = cat.id where `cat_id` = '$cat' and status = '1' and `state_id` = $id";
                                $result2 = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result2) > 0) {
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                ?>
                                        <li><a href="<?= URL . $row2['url'] ?>"><?= $row2['cat_name'] . " In " . $row2['city'] ?></a></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
        </ul>
    </div>
</div>