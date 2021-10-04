<?php

$page = 'overview';
$overview_active = '';
$details_active = '';
$leaderboard_active = '';
$event_members_active = '';

if ($page == 'overview') {
    $overview_active = ' active_details active';
} else if ($page == 'details') {
    $details_active = ' active_details active';
} else if ($page == 'leaderboard') {
    $leaderboard_active = ' active_details active';
} else if ($page == 'event_members') {
    $event_members_active = ' active_details active';
}


require('event_details_header.inc.php');

?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-9 p-4">
            <?php

            if ($event_details['can_participate'] == 'yes') {
                echo '
                    <p style="margin-bottom:4px"><i class="icofont-tasks-alt" style="margin-right: 10px;"></i>Complete the Virtual TCS New York City Marathon...</p>
                    <p style="margin-bottom:4px"><i class="icofont-calendar" style="margin-right: 10px;"></i>Oct 23, 2021 to Nov 7, 2021</p>
                    <p style="margin-bottom:4px"><i class="icofont-medal" style="margin-right: 10px;"></i>Run 26.2M and earn a digital finisher badge.</p>';
            } ?>
            <div class="pb-3" style="margin-top:30px">
                <?php if ($event_details['can_participate'] == 'yes') {
                    echo '<h5 class="pb-3">Overview</h5>';
                } ?>
                <?php if (!$event_details['address'] == '') {
                    echo '<span style="color: #000000; margin-top:10px; display:block">Address</span>
                        <p>' . $event_details['address'] . '</p>';
                } ?>
                <?php if (!$event_details['event_short_desc'] == '') {
                    echo '<span style="color: #000000; margin-top:10px; display:block">Short Description</span>
                        <p>' . $event_details['event_short_desc'] . '</p>';
                } ?>
                <span style="color: #000000; margin-top:10px; display:block">Vanity Url</span>
                <a href="#" style="display:block; color:#007FB6">http://www.m3gc.com/<?php echo $event_details['id'] ?></a>
                <?php if (!$event_details['contact_no'] == '') {
                    echo '<span style="color: #000000; margin-top:10px; display:block">Contact No</span>
                            <a href="#" style="display:block; color:#007FB6">' . $event_details['contact_no'] . '</a>';
                } ?>
            </div>
            <div class="row mt-4">
                <?php
                $status = 1;
                $event_type = 'sub_event';
                $parent_id = $_GET['id'];

                $sql = "SELECT * FROM event_details WHERE event_type = ? AND parent_event_id = ? AND status = ?";

                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "STMP FAILED";
                    exit();
                }
                mysqli_stmt_bind_param($stmt, "sii", $event_type, $parent_id, $status);
                mysqli_stmt_execute($stmt);

                $resultData = mysqli_stmt_get_result($stmt);


                while ($row = mysqli_fetch_assoc($resultData)) {
                    $start_date = date_create($row['start_date']);
                    $end_date = date_create($row['end_date']);
                    echo '

                            <div class="col-sm-6 col-lg-4">
                                <div class="blog-item">
                                    <div class="top">
                                        <a href="event_overview.php?id=' . $row['id'] . '">
                                            <img src="assets/uploads/' . $row['cover_image'] . '" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="bottom">
                                        <h3>
                                            <a href="event_overview.php?id=' . $row['id'] . '">' . $row['event_name'] . '</a>
                                        </h3>
                                        <p>' . $row['event_short_desc'] . '</p>
                                        <a class="blog-btn" href="blog-details.html">' . date_format($start_date, "d/m/Y") . ' to ' . date_format($end_date, "d/m/Y") . '</a>
                                    </div>
                                </div>
                            </div>
                        ';
                }
                mysqli_stmt_close($stmt);

                ?>
            </div>
        </div>
        <?php

        require('event_details_footer.inc.php');

        ?>