<?php

    require('app/connection.inc.php');
	// initialize variables

	if (isset($_POST['submit'])) {

        $id = $_POST['id'];        
		$event_name = $_POST['event_name'];
		$event_long_title = $_POST['event_long_title'];
		$event_city = $_POST['event_city'];
		$event_type = $_POST['event_type'];
		$can_participate = $_POST['can_participate'];

		mysqli_query($conn, "UPDATE event_details  SET event_name='$event_name', event_long_title='$event_long_title', event_city='$event_city',  event_type='$event_type', can_participate='$can_participate' WHERE id=$id"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: events.php');
	}