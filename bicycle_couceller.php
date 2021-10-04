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
                                    <h2>Bicyle  Couceller</h2>
                                </div>                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<?php require('includes/footer.inc.php'); ?>