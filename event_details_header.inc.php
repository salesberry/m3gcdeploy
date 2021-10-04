<?php

function event_details()
{
    if (isset($_GET['id']) && $_GET['id'] != 0) {

        $id = $_GET['id'];
        require('app/connection.inc.php');

        $sql = "SELECT * FROM event_details WHERE id = ?";

        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "STMP FAILED";
            header("Location: index.php");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            header("Location: index.php");
            exit();
        }

        mysqli_stmt_close($stmt);
    } else {
        header("Location: index.php");
        exit();
    }
}

$event_details = event_details();

require('includes/header.inc.php');


?>



<!-- Feature -->
<div class="about-area">
    <div class="container" style="padding-top: 100px;">
        <div class="section-title" style="z-index:-1;height:350px;background-image:url(assets/uploads/<?php echo $event_details['cover_main_image']; ?>); background-repeat:no-repeat; background-position: center; background-size: auto; background-size: cover;">

        </div>
        <div style="margin: -100px 20px 0px 20px;">
            <div style="width: 150px;height: 150px; overflow: hidden; z-index:1; border-radius:5px; margin-right:10px !important">
                <img style="object-fit:cover; height:100%; width:100%" src="assets/uploads/<?php echo $event_details['profile_icon_image']; ?>">
            </div>
            <div class="club_details" style="padding-left: 0px;">
                <h4 style="margin-bottom: 5px;"><?php echo $event_details['event_long_title']; ?></h4>
                <p style="margin-bottom: 0px;"><?php echo $event_details['event_city']; ?></p>
            </div>
        </div>
        <ul class="nav nav-tabs" style="margin: 20px 20px 0px 20px;">
            <?php
            echo '
            <li class="nav-item">
                <a class="nav-link club_address' . $overview_active . '" href="event_overview.php?id='.$event_details['id'].'">Overviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link club_address' . $details_active . '" href="event_details.php?id='.$event_details['id'].'">Details</a>
            </li>';
            ?>
            <?php
            if ($event_details['can_participate'] == 'yes') {
                echo '
            <li class="nav-item">
                <a class="nav-link club_address ' . $leaderboard_active . '" href="event_leaderboard.php?id='.$event_details['id'].'">Leaderboard</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link club_address' . $event_members_active . '" href="#">Members</a>
            </li>';
            }
            ?>
        </ul>