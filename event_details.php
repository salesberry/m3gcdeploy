<?php

$page = 'details';
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
            

            
            <div class="pb-3" style="margin-top:30px">
               
                <h5 class="pb-3">Details & Eligibility</h5>                
                <?php if (!$event_details['reward_details'] == '') {
                    echo '<span class="pb-2 pt-2" style="color: #000000; margin-top:20px; display:block">Rewards</span>
                        <p>' . $event_details['reward_details'] . '</p>';
                } ?>
                <?php if (!$event_details['additional_info'] == '') {
                    echo '<span class="pb-2 pt-2" style="color: #000000; margin-top:20px; display:block">Additional Info</span>
                        <p>' . $event_details['additional_info'] . '</p>';
                } ?>
                <?php if (!$event_details['rules'] == '') {
                    echo '<span class="pb-2 pt-2" style="color: #000000; margin-top:20px; display:block">Rules</span>
                        <p>' . $event_details['rules'] . '</p>';
                } ?>
                                
            </div>
            
        </div>
        <?php

        require('event_details_footer.inc.php');

        ?>