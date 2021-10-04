<?php
$page = 'myaccount';
require('profile-leftside.inc.php');
?>
<div class="col-10">
    <div class="row gx-4">
        <div class="col-lg-9">
            <div class="pb-3" style="border-bottom:1px solid #dfdfe8">               
                <h4 style="margin-bottom: 5px;">My Account</h4>
                <p>You can Change or Update your details and check all information here</p>
                <a class="common-btn mt-2 mb-3" style="border-radius:8px; border:2px solid #fc5200; color:#fc5200; background-color:#ffffff; padding:8px 12px " href="#">Edit Profile</a>
            </div>
            <div class="pb-3" style="border-bottom:1px solid #dfdfe8; margin-top:30px">
                <h5 class="pb-3">Overview</h5>
                <span style="color: #000000; margin-top:10px; display:block">Full Name</span>
                <p>Mohammed Wajahath Ali Khan</p>
                <span style="color: #000000; margin-top:10px; display:block">Birthday</span>
                <p>March 3, 1999</p>
                <span style="color: #000000; margin-top:10px; display:block">Gender</span>
                <p>Male</p>
                <span style="color: #000000; margin-top:10px; display:block">Location</span>
                <p>Pune, Maharashtra</p>
                <span style="color: #000000; margin-top:10px; display:block">Weight</span>
                <p>75 lbs</p>
                <span style="color: #000000; margin-top:10px; display:block">Blood Group</span>
                <p>Ab +</p>
                <span style="color: #000000; margin-top:10px; display:block">Email</span>
                <p>wajahathkhan@gmail.com</p>
                <span style="color: #000000; margin-top:10px; display:block">Phone</span>
                <p>+91 9032328512</p>
                <span style="color: #000000; margin-top:10px; display:block">Primary Club</span>
                <a href="#" style="display:block; color:#007FB6">Pune Pmr Club</a>
                <span style="color: #000000; margin-top:10px; display:block">Vanity Url</span>
                <a href="#" style="display:block; color:#007FB6">http://www.m3gc.com/wajahath_khan</a>
            </div>
            <div class="pb-3" style="border-bottom:1px solid #dfdfe8; margin-top:30px">
                <h5 class="pb-3">Stats</h5>
                <span style="color: #000000; margin-top:10px; display:block">Connect Strava to Get this Details</span>
                <img style="width:100px" src="assets/img/strava.png"> <br>
                <a class="common-btn mt-2 mb-3" style="border-radius:8px; background-color:#fc5200; padding:8px 12px " href="#">Connect Now</a>
                <div class="disable">
                    <span style="color: #000000; margin-top:10px; display:block">Avg Distance / Week</span>
                    <p>0 mi</p>
                    <span style="color: #000000; margin-top:10px; display:block">Avg Time / Week</span>
                    <p>0h 0m</p>
                    <span style="color: #000000; margin-top:10px; display:block">All time Distance</span>
                    <p>0 mi</p>
                </div>
            </div>            
        </div>
        <?php
        require('profile-rightside.inc.php'); ?>