<?php require('includes/header.inc.php'); ?>

<div class="about-area user-form-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-5">
                <div class="user-content">
                    <div>
                        <div>
                            <div class="user-content-inner">
                                <?php 

                                if (isset($_GET['error'])) {
                                    switch($_GET['error']) {
                                       case 1:
                                           echo '<div class="alert1" >
                                           Club is Already Registered
                                           </div>';
                                           break;
                                       case 2:
                                        echo '<div class="alert1" >
                                        Something Went wrong
                                        </div>';
                                           break;
                                       case 3:
                                        echo '<div class="alert1" >
                                        STMP FAILED
                                        </div>';
                                           break;
                                    }
                                  }   

                                ?>
                                <div class="top">
                                    <h2>Cycling Club Application</h2>
                                </div>
                                <form id="club_form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="club_name" id="club_name" class="form-control" placeholder="Cycling Club Name*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="text" name="club_admin" id="club_admin" class="form-control" placeholder="Official Contact Persons*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group inner-addon right-addon">
                                                <img class="glyphicon" style="width: 61px" src="assets/img/india.svg">
                                                <input type="text" name="club_phone" id="club_phone" class="form-control" placeholder="Admin Contact No*" maxlength="10" required pattern="[6-9]{1}[0-9]{9}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="email" name="club_email" id="club_email" class="form-control" placeholder="Admin / Club Email Id *" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <select name="city" id="gender" class="form-control mb-4" required>
                                                    <option value="" selected> Select your City </option>
                                                    <option value="1">Hyderabad</option>
                                                    <option value="2">Pune</option>
                                                    <option value="3">Mumbai</option>
                                                </select>
                                            </div>
                                        </div>                                       
                                        <div class="col-lg-6">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="number" name="pincode" id="pincode" class="form-control" placeholder="Pincode*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="text" name="state" id="state" class="form-control" placeholder="State*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="club_meeting_location" id="club_meeting_location" class="form-control" placeholder="Common Meeting location for Club Rides *" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="text" name="club_latitude" id="club_latitude" class="form-control" placeholder="Latitude" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="text" name="club_longitude" id="club_longitude" class="form-control" placeholder="Longitude" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="club_facebook" id="club_facebook" class="form-control" placeholder="Club Facebook Page link *" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="club_instagram" id="club_instagram" class="form-control" placeholder="Club Instagram Link">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="club_twitter" id="club_twitter" class="form-control" placeholder="Club Twitter Link">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <div class="form-group text-left" style="text-align: left; font-size:15px">
                                                <label for="formFileSm" class="form-label">Club Official Logo *</label>
                                                <input type="file" style="padding: 12px;" required name="club_logo" id="club_logo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <div class="form-group text-left" style="text-align: left; font-size:15px">
                                                <label for="formFileSm" class="form-label">A Brief Introduction of your Club *</label>
                                                <textarea class="w-100 form-group" id="club_desc" name="club_desc" rows="4" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <p style="text-align: left !important;">By Clicking on Submit Button you are aggree with our <a href="sign-up.html">Privacy Policy</a> </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button id="club_register_btn" type="submit" name="submit" id="submit" class="btn common-btn d-flex flex-row align-items-center">
                                                <i class="fa fa-circle-o-notch fa-spin me-1" id="loading_spinner_register"></i> Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $("#club_form").on("submit", function(e) {

            e.preventDefault();

           var formData = new FormData(this);

           $.ajax({
                    url: "app/bycycle_club_register.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,

                    success: function(dataResult) {                        
                        if(dataResult == 2){
                            alert('Club is Registered');
                            window.location.href = "index.php";
                        } else{
                            alert(dataResult);
                        }
                    }
                });

        });

    });
</script>

<?php require('includes/footer.inc.php'); ?>