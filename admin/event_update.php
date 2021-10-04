<?php
require('header.inc.php');
ob_start();

include('event_action.php');

function event_details()
{
    if (isset($_GET['id']) && $_GET['id'] != 0) {

        $id = $_GET['id'];
        require('app/connection.inc.php');

        $sql = "SELECT * FROM event_details WHERE id = ?";

        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "STMP FAILED";
            header("Location: events.php");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            header("Location: events.php");
            exit();
        }

        mysqli_stmt_close($stmt);
    } else {
        header("Location: events.php");
        exit();
    }
}

$event_details = event_details();

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
                            <h5 class="card-title">Update Event</h5>
                            <p class="card-title-desc">Update Details of the Event as per your Requirments </p>



                            <form action="event_action.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $event_details['id'] ?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="event_name" value="<?php echo $event_details['event_name']; ?>" placeholder="Enter Full Name">
                                            <label for="floatingnameInput">Full Name of the Event</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="event_long_title" value="<?php echo $event_details['event_long_title']; ?>" placeholder="Enter Full Name">
                                            <label for="floatingnameInput">Full Name of the Event</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="event_city" value="<?php echo $event_details['event_city']; ?>" placeholder="Event City Name">
                                            <label for="floatingnameInput">City Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="event_type" id="floatingSelectGrid" aria-label="Select type of the event">
                                                <option value="">Type of the Event</option>
                                                <option <?php if ($event_details['event_type'] == 'main') {
                                                            echo "selected";
                                                        } ?> value="main">Main Event</option>
                                                <option <?php if ($event_details['event_type'] == 'sub_event') {
                                                            echo "selected";
                                                        } ?> value="sub_event">Sub Event</option>
                                            </select>
                                            <label for="floatingSelectGrid">Type of the Event</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelectGrid" name="can_participate" aria-label="User Can Participate">
                                                <option value="">Participate by User</option>
                                                <option <?php if ($event_details['can_participate'] == 'yes') {
                                                            echo "selected";
                                                        } ?> value="yes">Yes Can Participate</option>
                                                <option <?php if ($event_details['can_participate'] == 'no') {
                                                            echo "selected";
                                                        } ?> value="no">No User Can't Participate</option>
                                            </select>
                                            <label for="floatingSelectGrid">User Can Participate</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelectGrid" aria-label="Select Parent Event">
                                                <option selected value="">Select Parent Event</option>
                                                <?php

                                                $sql = "SELECT * FROM events WHERE parent_event_id = 0";

                                                $stmt = mysqli_stmt_init($conn);
                                                if (!mysqli_stmt_prepare($stmt, $sql)) {
                                                    echo "STMP FAILED";
                                                    exit();
                                                }

                                                mysqli_stmt_execute($stmt);

                                                $resultData = mysqli_stmt_get_result($stmt);

                                                while ($row = mysqli_fetch_assoc($resultData)) {
                                                ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['event_name']; ?></option>
                                                <?php
                                                }
                                                mysqli_stmt_close($stmt);
                                                ?>
                                            </select>
                                            <label for="floatingSelectGrid">Parent Event</label>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Event Profile Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Event Main Cover Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Event Cover Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-floating mb-3">
                                            <textarea style="height: 132px;" type="text" rows="8" class="form-control" placeholder="Enter Full Name"><?php echo $event_details['event_short_desc']; ?></textarea>
                                            <label for="floatingnameInput">Short description of Event</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea style="height: 132px;" type="text" rows="8" class="form-control" placeholder="Enter Reward Details"><?php echo $event_details['reward_details']; ?></textarea>
                                            <label for="floatingnameInput">Reward Details of Event</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea style="height: 132px;" type="text" rows="8" class="form-control" placeholder="Overview of the Event"><?php echo $event_details['overview']; ?></textarea>
                                            <label for="floatingnameInput">Overview of Event</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea style="height: 132px;" type="text" rows="8" class="form-control" placeholder="Enter Rules of the Event"><?php echo $event_details['rules']; ?></textarea>
                                            <label for="floatingnameInput">Rules of Event</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea style="height: 132px;" type="text" rows="8" class="form-control" placeholder="Enter Address of the Event"><?php echo $event_details['address']; ?></textarea>
                                            <label for="floatingnameInput">Address of Event</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea style="height: 132px;" type="text" rows="8" class="form-control" placeholder="Enter Additional Info"><?php echo $event_details['additional_info']; ?></textarea>
                                            <label for="floatingnameInput">Additional Info of Event</label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" name="submit" class="btn btn-primary w-md">Update Event</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php
    require('footer.inc.php');
    ob_end_flush();
    ?>