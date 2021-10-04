<?php
require('includes/header.inc.php');
?>


<!-- Feature -->
<div class="about-area pt-100">
    <div class="container pt-5">
    <div class="section-title">
            <span class="sub-title">Small page title</span>
            <h2>Clubs List</h2>
            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-3 pb-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select City</option>
                    <option value="1">Hyderabad</option>
                    <option value="2">Pune</option>
                    <option value="3">Mumbai</option>                    
                </select>
            </div>
            <div class="col-sm-6 col-lg-3 pb-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Sort By</option>
                    <option value="1">Popular</option>
                    <option value="2">Latest</option>
                    <option value="3">Oldest</option>                    
                </select>
            </div>            
            <div class="col-sm-6 col-lg-3 pb-2"><input type="text" name="full_name" style="padding: 14px;" id="full_name" class="form-control" placeholder="Search Club" required></div>
            <div class="col-sm-6 col-lg-3 pb-2"><button class="btn_filter btn">Update</button></div>
        </div>
    </div>
</div>
<!-- End Feature -->
<!-- About -->
<div class="about-area pt-2 pb-70">
    <div class="container">        
        <div class="row align-items-left">
            <div style="overflow-x:auto;">
                <table class="table-striped table">
                    <tr>                        
                        <th style="width: 20%">Club Name</th>
                        <th style="width: 10%">Members</th>
                        <th style="width: 10%">Type</th>     
                    </tr>
                    <tr>
                        
                        <td class="d-flex p-2">                            
                            <div style="width: 70px;height: 70px;overflow: hidden; border-radius:5px; margin-right:10px !important">
                                <img style="object-fit:cover; height:100%; width:100%" src="https://dgalywyr863hv.cloudfront.net/pictures/clubs/196654/4628503/5/large.jpg">
                            </div>
                            <div class="club_details">
                                <a href="club_details.php">
                                <h3 class="club_title">PCMCRunners</h3>
                                </a>   
                                <p class="club_address">Pimpri-Chinchwad, Maharashtra, India</p>
                            </div>
                           
                        </td>     
                                       
                        <td>
                            <div class="club_details" style="padding-left:0px;">                                
                                <p class="club_address">250,000 Members</p>
                            </div>
                        </td>
                        <td>
                            <div class="club_details" style="padding-left:0px;">                                
                                <p class="club_address">Club</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex p-2">
                            <div style="width: 70px;height: 70px;overflow: hidden; border-radius:5px; margin-right:10px !important">
                                <img style="object-fit:cover; height:100%; width:100%" src="https://dgalywyr863hv.cloudfront.net/pictures/clubs/196654/4628503/5/large.jpg">
                            </div>
                            <div class="club_details">
                                <h3 class="club_title">PCMCRunners</h3>
                                <p class="club_address">Pimpri-Chinchwad, Maharashtra, India</p>
                            </div>
                        </td>                        
                        <td>
                            <div class="club_details" style="padding-left:0px;">                                
                                <p class="club_address">250,000 Members</p>
                            </div>
                        </td>
                        <td>
                            <div class="club_details" style="padding-left:0px;">                                
                                <p class="club_address">Club</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex p-2">
                            <div style="width: 70px;height: 70px;overflow: hidden; border-radius:5px; margin-right:10px !important">
                                <img style="object-fit:cover; height:100%; width:100%" src="https://dgalywyr863hv.cloudfront.net/pictures/clubs/196654/4628503/5/large.jpg">
                            </div>
                            <div class="club_details">
                                <h3 class="club_title">PCMCRunners</h3>
                                <p class="club_address">Pimpri-Chinchwad, Maharashtra, India</p>
                            </div>
                        </td>                        
                        <td>
                            <div class="club_details" style="padding-left:0px;">                                
                                <p class="club_address">250,000 Members</p>
                            </div>
                        </td>
                        <td>
                            <div class="club_details" style="padding-left:0px;">                                
                                <p class="club_address">Club</p>
                            </div>
                        </td>
                    </tr>
                    
                </table>
            </div>

        </div>
    </div>
</div>
<!-- End About -->



</div>
</div>
</section>
<!-- End Team -->

<?php

require('includes/footer.inc.php');

?>