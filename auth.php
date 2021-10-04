<?php require('includes/header.inc.php'); ?>

<div class="about-area user-form-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-5">
                <div class="user-content">
                    <div>
                        <div>
                            <div class="user-content-inner">
                                <div class="top">
                                    <h2>Sign In</h2>
                                </div>
                                <form id="login_form" name="form1" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group inner-addon right-addon">
                                                <img class="glyphicon" style="width: 61px" src="assets/img/india.svg">
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" maxlength="10" required pattern="[6-9]{1}[0-9]{9}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button id="login_btn" type="submit" name="submit" class="btn common-btn d-flex flex-row align-items-center">
                                                <i class="fa fa-circle-o-notch fa-spin me-1" id="loading_spinner"></i> Sign in
                                            </button>
                                        </div>

                                    </div>
                                </form>
                                <div class="bottom">
                                    <p>Forget Password?<a href="sign-up.html"> Click Here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 p-5">
                <div class="user-content">
                    <div>
                        <div>
                            <div class="user-content-inner">
                                <div class="top">
                                    <h2>Register with us</h2>
                                </div>
                                <form method="post" id="register_form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group inner-addon right-addon">
                                                <img class="glyphicon" style="width: 61px" src="assets/img/india.svg">
                                                <input type="text" name="phone" id="register_phone" class="form-control" placeholder="Phone Number" maxlength="10" required pattern="[6-9]{1}[0-9]{9}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <select name="gender" id="gender" class="form-control mb-4" required>
                                                    <option value="" selected> Select your Gender </option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="Date of Birth" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password" name="password" id="register_password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Retype Password" name="retype_password" id="retype_password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <p style="text-align: left !important;">By Clicking on Submit Button you are aggree with our <a href="sign-up.html">Privacy Policy</a> </p>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button id="register_btn" type="submit" name="submit" class="btn common-btn d-flex flex-row align-items-center">
                                                <i class="fa fa-circle-o-notch fa-spin me-1" id="loading_spinner_register"></i> Register
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



        $('#register_form').submit(function(e) {

            e.preventDefault();

            var full_name = $('#full_name').val();
            var phone = $('#register_phone').val();
            var password = $('#register_password').val();
            var retype_password = $('#retype_password').val();
            var date_of_birth = $('#date_of_birth').val();
            var gender = $('#gender').val();
            var type = 1;
            var submit = document.getElementById("register_btn").name;


            if (full_name != "" && phone != "" && password != "" && retype_password != "" && date_of_birth != "" && gender != "") {

                $("#loading_spinner_register").css({
                    "display": "block",
                    "padding": "4px"
                });

                mydata = {
                    type: type,
                    full_name: full_name,
                    phone: phone,                    
                    password: password,
                    retype_password: retype_password,
                    date_of_birth: date_of_birth,
                    gender: gender,                    
                    submit: submit
                };                

                $.ajax({
                    url: "app/authentication.php",
                    type: "POST",
                    data: JSON.stringify(mydata),

                    success: function(dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            alert('Something Went Wrong');
                            $("#loading_spinner_register").css({
                                "display": "none"
                            });
                        } else if (dataResult.statusCode == 201) {
                            alert('Password is Not Match ');
                            $("#loading_spinner_register").css({
                                "display": "none"
                            });
                        } else if (dataResult.statusCode == 203) {
                            alert('phone Already Exist Please Login');
                            $("#loading_spinner_register").css({
                                "display": "none"
                            });
                        } else if (dataResult.statusCode == 207) {
                            alert('You are Register Now Please Login to Access your Panel');
                            window.location.href = "auth.php";
                            $("#register_form")[0].reset();
                        } else if (dataResult.statusCode == 205) {
                            alert('STMT FAILED');
                            $("#loading_spinner_register").css({
                                "display": "none"
                            });
                        }
                    }
                });


               
            } else {
                alert('Please fill all the field !');
            }
        });
        $('#login_form').submit(function(e) {

            e.preventDefault();
            var phone = $('#phone').val();
            var password = $('#password').val();
            var type = 2;
            var submit = document.getElementById("login_btn").name;


            if (phone != "" && password != "") {

                $("#loading_spinner").css({
                    "display": "block",
                    "padding": "4px"
                });

                mydata = {
                    type: type,
                    phone: phone,
                    password: password,
                    submit: submit
                };

                $.ajax({
                    url: "app/authentication.php",
                    type: "POST",
                    data: JSON.stringify(mydata),

                    success: function(dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        if (dataResult.statusCode == 200) {
                            alert('Something Went Wrong');
                            $("#loading_spinner").css({
                                "display": "none"
                            });
                        } else if (dataResult.statusCode == 201) {
                            alert('Phone number is Not Exist');
                            $("#loading_spinner").css({
                                "display": "none"
                            });
                        } else if (dataResult.statusCode == 202) {
                            alert('Password is Wrong');
                            $("#loading_spinner").css({
                                "display": "none"
                            });
                        } else if (dataResult.statusCode == 205) {
                            alert('STMT FAILED');
                            $("#loading_spinner").css({
                                "display": "none"
                            });
                        } else if (dataResult.statusCode == 206) {
                            window.location.href = "index.php";
                            $("#login_form")[0].reset();

                        }
                    }
                });



            } else {
                alert('Please fill all the field !');
            }
        });

    });
</script>


<?php require('includes/footer.inc.php'); ?>