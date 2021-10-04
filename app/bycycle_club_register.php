<?php

if(!empty($_POST)){		

    require('connection.inc.php');
    require('function.inc.php');
  
    $club_name= $_POST['club_name'];
    $club_admin= $_POST['club_admin'];
    $club_phone= $_POST['club_phone'];
    $club_email= $_POST['club_email'];
    $city= $_POST['city'];
    $state= $_POST['state'];
    $pincode= $_POST['pincode'];
    $club_meeting_location= $_POST['club_meeting_location'];
    $club_latitude= $_POST['club_latitude'];
    $club_longitude= $_POST['club_longitude'];
    $club_facebook= $_POST['club_facebook'];
    $club_instagram= $_POST['club_instagram'];    
    $club_twitter= $_POST['club_longitude'];
    $club_desc= $_POST['club_facebook'];
    
    if( clubExist($conn, $club_email)!= false) {

        echo "Club is Already Registered";
        exit();
    }


    $img_name = $_FILES['club_logo']['name'];
	$img_size = $_FILES['club_logo']['size'];
	$tmp_name = $_FILES['club_logo']['tmp_name'];
	$error = $_FILES['club_logo']['error'];

    if ($error === 0) {
		if ($img_size > 1250000) {
			echo "Sorry, your file is too large.";
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../assets/uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                clubRegister($conn, $club_name, $club_admin, $club_phone, $club_email, $city , $state, $pincode, $club_meeting_location, $club_latitude, $new_img_name, $club_longitude, $club_facebook, $club_instagram, $club_twitter, $club_desc);
                mysqli_close($conn);				
			}else {
				echo "You cant upload this file type.";
			}
		}
	}else {
		echo "Unknown Error";
	}


} else{
    echo "Unexpected Error";
    die();
}