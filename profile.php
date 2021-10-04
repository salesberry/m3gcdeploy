<?php
$page = 'profile';
require('profile-leftside.inc.php');
?>
<div class="col-10">
    <div class="row gx-4">
        <div class="col-lg-9">
            <div class="pb-3" style="border-bottom:1px solid #dfdfe8">
                <div style="width: 140px;height: 140px;overflow: hidden; border-radius:300px; margin:0px 10px 10px 0px !important; border:3px solid #dddddd">
                    <img style="object-fit:cover; height:100%; width:100%" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80">
                </div>
                <h4 style="margin-bottom: 5px;">Wajahath Khan <i class="icofont-crown"></i></h4>
                <p>Pune, Maharashtra 500053</p>
            </div>
            <div class="pb-3" style="border-bottom:1px solid #dfdfe8; margin-top:30px">
                <h5 class="pb-3">Overview</h5>
                <span style="color: #000000; margin-top:10px; display:block">Birthday</span>
                <p>March 3, 1999</p>
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
            <div class="pb-3" style="border-bottom:1px solid #dfdfe8; margin-top:30px">
                <h5 class="pb-3">Carbon Foot Print Index</h5>                
                <div >
                    <span style="color: #000000; margin-top:10px; display:block">Trees Save</span>
                    <p>10 trees</p>
                    <span style="color: #000000; margin-top:10px; display:block">Carbon footprint</span>
                    <p>100</p>
                </div>
            </div>
            <div class="pb-3" style="border-bottom:1px solid #dfdfe8; margin-top:30px">
                <h5 class="pb-3">Membership</h5>
                <p>Subscribe and eke out every bit of performance from your Cycling Details to your Speed and Points in more advance and in detail information</p>
                <span style="color: #000000; margin-top:10px; display:block">Member Since</span>
                <p>March 3, 2021</p>
                <span style="color: #000000; margin-top:10px; display:block">Membership Benefits</span>
                <a href="#" style="display:block; color:#007FB6">Click here</a>
            </div>
        </div>
        <?php
        require('profile-rightside.inc.php'); ?>