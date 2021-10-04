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
                                    <h2 class="card-title">All Events</h2>
                                        <p class="card-title-desc mb-0">Find all listed Events on M3GC with there city details</code>.
                                        </p>
                                    </div>
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Create Event</button>
                                </div> 
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
        
                                                <thead style="background-color: #eeeeee;">
                                                    <tr>                                                        
                                                        <th style="width: 30%;">Event Name</th> 
                                                        <th>Event Type</th>                                                       
                                                        <th>City</th>
                                                        <th>Participated</th>                                                        
                                                        <th style="width: 20%;">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php

                                                        $sql = "SELECT * FROM event_details";

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
                                                            <td><?php echo $row['event_name']; ?></td>
                                                            <td><?php echo $row['event_type']; ?></td>
                                                            <td><?php echo $row['event_city']; ?></td>
                                                            <td><?php if($row['can_participate']== 'yes'){echo $row['participated'];} else{ echo "Nfp";}?></td> 
                                                            <td>
                                                                <?php if($row['status'] == 1){
                                                                    echo '<a href="event_status.php?id='.$row['id'].'&status=0" type="button" class="btn btn-primary btn-sm waves-effect w-sm waves-light">Active</a>';
                                                                } else {
                                                                    echo '<a href="event_status.php?id='.$row['id'].'&status=1" type="button" class="btn btn-danger btn-sm waves-effect w-sm waves-light">InActive</a>';
                                                                }
                                                                 ?>
                                                                 <a href="event_update.php?id=<?php echo $row['id']?>" type="button" class="btn btn-dark btn-sm waves-effect w-sm waves-light">Edit</a>
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