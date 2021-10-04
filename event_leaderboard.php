<?php

$page = 'leaderboard';
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
        <div style="overflow-x:auto;">                          
                            <table class="table-striped table">
                                <tr style="background-color: #ffffff;">
                                    <th class="club_member_header" style="width: 5%">S no</th>
                                    <th class="club_member_header" style="width: 20%">NAME</th>
                                    <th class="club_member_header" style="width: 10%">3Gc id</th>
                                    <th class="club_member_header" style="width: 10%">Distance (Kms)</th>                                    
                                    <th class="club_member_header" style="width: 15%">City</th>    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>wajahath khan</td>
                                    <td>1234</td>
                                    <td>120</td>                                    
                                    <td>Chattisgarh</td>   
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>wajahath khan</td>
                                    <td>1234</td>
                                    <td>120</td>                                    
                                    <td>Chattisgarh</td>   
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>wajahath khan</td>
                                    <td>1234</td>
                                    <td>120</td>                                    
                                    <td>Chattisgarh</td>   
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>wajahath khan</td>
                                    <td>1234</td>
                                    <td>120</td>                                    
                                    <td>Chattisgarh</td>   
                                </tr>
                            </table>
                        </div>
        </div>
        <?php

        require('event_details_footer.inc.php');

        ?>