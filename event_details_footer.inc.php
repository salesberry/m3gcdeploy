<div class="col-sm-12 col-lg-3 pt-4">
    <?php

    if ($event_details['can_participate'] == 'yes') {
        echo '
                    <div class="rules-item pb-5" style="border-bottom:1px solid #dfdfe8">
                        <h5>Event Stats</h5>
                        <p class="pb-3"> Based on the calculative figure of all participant</p>
                        <div>
                            <span style="color: #000000; margin-top:10px; display:block">Time / Week</span>
                            <p>' . $event_details['event_time'] . '</p>
                            <span style="color: #000000; margin-top:10px; display:block">All time Distance</span>
                            <p>' . $event_details['event_distance'] . '</p>
                        </div>
                        <h5>Event Participation</h5>
                        <span style="color: #000000; margin-top:20px !important; display:block">Participated</span>
                        <p>' . $event_details['participated'] . '</p>
                        <a class="common-btn" style="border-radius:8px; padding:8px 12px " href="#">Participate Now</a>
                        <span style="color: #000000; margin-top:20px !important; display:block">Leader</span>
                        <a href="#" style="display:block; color:#007FB6">Wajahath Khan</a>
                        <p>Miles Cover: 23m</p>
                        <span style="color: #000000; margin-top:20px !important; display:block">Top 5 on Leaderboard</span>

                        <a href="#" style="display:block; color:#007FB6">Wajahath Khan</a>
                        <p>Miles Cover: 23m</p>
                        <a href="#" style="display:block; color:#007FB6">Wajahath Khan</a>
                        <p>Miles Cover: 23m</p>
                        <a href="#" style="display:block; color:#007FB6">Wajahath Khan</a>
                        <p>Miles Cover: 23m</p>
                        <a href="#" style="display:block; color:#007FB6">Wajahath Khan</a>
                        <p>Miles Cover: 23m</p>
                        <a href="#" style="display:block; color:#007FB6">Wajahath Khan</a>
                        <p>Miles Cover: 23m</p>
                    </div>
                    ';
    } else {
        echo '';
    }
    ?>
    <div class="rules-item pb-5 pt-5">
        <h5>Social Connection</h5>
        <a href="<?php echo $event_details['facebook'] ?>" target="_blank" style="margin-top:20px !important; display:block; color:#007FB6">Facebook</a>
        <p>Connect with Facebook and Get Our Latest Updates directly on Facebook</p>
        <a href="<?php echo $event_details['instagram'] ?>" target="_blank" style="margin-top:20px !important; display:block; color:#007FB6">Instagram</a>
        <a href="<?php echo $event_details['twitter'] ?>" target="_blank" style="margin-top:20px !important; display:block; color:#007FB6">Twitter</a>
        <p>Connect with Twitter and Get Automatic Update and Stay Connected</p>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- End Feature -->




</div>
</div>
</section>
<!-- End Team -->

<?php

require('includes/footer.inc.php');

?>