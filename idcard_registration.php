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
                                    <h2>ID Card Registration</h2>
                                </div>
                                <form id="club_form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="club_name" id="club_name" class="form-control" placeholder="Full Name*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="text" name="club_admin" id="club_admin" class="form-control" placeholder="Blood Group*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="text" name="club_admin" id="club_admin" class="form-control" placeholder="Occupation*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="text" name="club_phone" id="club_phone" class="form-control" placeholder="Address Line One*" maxlength="10" required pattern="[6-9]{1}[0-9]{9}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="text" name="club_phone" id="club_phone" class="form-control" placeholder="Locality*" maxlength="10" required pattern="[6-9]{1}[0-9]{9}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="text" name="club_phone" id="club_phone" class="form-control" placeholder="City*" maxlength="10" required pattern="[6-9]{1}[0-9]{9}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group inner-addon right-addon">
                                                <input type="text" name="club_phone" id="club_phone" class="form-control" placeholder="Pincode*" maxlength="10" required pattern="[6-9]{1}[0-9]{9}">
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