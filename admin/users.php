<?php
require('header.inc.php');
?>
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <div>
                                    <h2 class="card-title">All Users</h2>
                                        <p class="card-title-desc mb-0">Find all listed users on M3GC with there club and city details</code>.
                                        </p>
                                    </div>
                                    

                                </div> 
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
        
                                                <thead style="background-color: #eeeeee;">
                                                    <tr >                                                        
                                                        <th style="width: 30%;">Full Name</th>
                                                        <th>Gender</th>
                                                        <th>City</th>
                                                        <th>Primary Club</th>       
                                                        <th style="width: 10%;">Action</th>                                                 
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php

                                                        $sql = "SELECT * FROM users INNER JOIN bycycle_club ON bycycle_club.id = users.primary_club";

                                                        $stmt = mysqli_stmt_init($conn);
                                                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                                                            echo "STMP FAILED";
                                                            exit();
                                                        }

                                                        mysqli_stmt_execute($stmt);

                                                        $resultData = mysqli_stmt_get_result($stmt);

                                                        while ($row = mysqli_fetch_assoc($resultData)) {                                                           
                                                            ?>
                                                                <tr>
                                                                <td><?php echo $row['full_name']; ?></td>
                                                                <td><?php echo $row['gender']; ?></td>
                                                                <td><?php echo $row['user_city']; ?></td>
                                                                <td><?php echo $row['club_name']; ?></td>                                                                
                                                                <td>
                                                                    <?php if($row['user_status'] == 1){
                                                                        echo '<a href="user_status.php?id='.$row['uid'].'&status=0" type="button" class="btn btn-primary btn-sm waves-effect w-sm waves-light">Active</a>';
                                                                    } else {
                                                                        echo '<a href="user_status.php?id='.$row['uid'].'&status=1" type="button" class="btn btn-danger btn-sm waves-effect w-sm waves-light">InActive</a>';
                                                                    }
                                                                     ?>
                                                                    </td>                                                            
                                                                </tr>
                                                            <?php   
                                                            }
    
                                                            mysqli_stmt_close($stmt);
                                                        ?>                                  
                                                </tbody>
                                            </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                            
                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

<?php
    require('footer.inc.php');
    ?>