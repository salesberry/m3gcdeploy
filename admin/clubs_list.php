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
                                    <h2 class="card-title">All Clubs</h2>
                                        <p class="card-title-desc mb-0">Find all listed Clubs on M3GC with there city details</code>.
                                        </p>
                                    </div>                                    
                                </div> 
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
        
                                                <thead style="background-color: #eeeeee;">
                                                    <tr>                                                        
                                                        <th style="width: 30%;">Club Name</th>
                                                        <th>Club Admin</th>
                                                        <th>Club Phone</th>
                                                        <th>Club City</th>
                                                        <th>Meeting Location</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php

                                                        $sql = "SELECT * FROM bycycle_club INNER JOIN club_city ON bycycle_club.city = club_city.club_city_id ";

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
                                                            <td><?php echo $row['club_name']; ?></td>
                                                            <td><?php echo $row['club_admin']; ?></td>
                                                            <td><?php echo $row['club_phone']; ?></td>
                                                            <td><?php echo $row['name']; ?></td>
                                                            <td><?php echo $row['club_meeting_location']; ?></td> 
                                                            <td>
                                                                <?php if($row['status'] == 1){
                                                                    echo '<a href="club_status.php?id='.$row['id'].'&status=0" type="button" class="btn btn-primary btn-sm waves-effect w-sm waves-light">Active</a>';
                                                                } else {
                                                                    echo '<a href="club_status.php?id='.$row['id'].'&status=1" type="button" class="btn btn-danger btn-sm waves-effect w-sm waves-light">InActive</a>';
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