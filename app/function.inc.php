<?php

require('connection.inc.php');


function pr($arr){
	echo '<pre>';
	print_r($arr);
}

function prx($arr){
	echo '<pre>';
	print_r($arr);
	die();
}

function get_safe_value($conn,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($conn,$str);
	}
}

function phoneExist($conn, $phone){	

    $sql = "SELECT * FROM users WHERE phone = ?";
	
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo json_encode(array("statusCode"=>205));
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i" , $phone);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function registerUser($conn, $full_name, $phone, $password, $gender, $date_of_birth){
	
	
	$sql ="INSERT INTO users (full_name, phone, password, gender, date_of_birth) VALUES (?,?,?,?,?)";
	
	$stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo json_encode(array("statusCode"=>205));
        exit();
    }

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss" , $full_name, $phone, $hashed_password, $gender, $date_of_birth);
    mysqli_stmt_execute($stmt);
	echo json_encode(array("statusCode"=>207));
	exit();
}

function loginUser($conn, $phone, $password)
{
    $phoneExist= phoneExist($conn, $phone);

    if($phoneExist === false){
        echo json_encode(array("statusCode"=>201));
	    exit();
    }

    $pwdHashed = $phoneExist["password"];
    $checkedpassword = password_verify($password, $pwdHashed);

    if($checkedpassword === false){
        echo json_encode(array("statusCode"=>202));
	    exit();
    } else if ($checkedpassword === true){

        session_start();

        $_SESSION["id"] = $phoneExist["id"];
        $_SESSION["user"] = "yes";
        $_SESSION["full_name"] = $phoneExist["full_name"];
        
        echo json_encode(array("statusCode"=>206));
	    exit();

    }

}

function clubExist($conn, $club_email){

    $sql = "SELECT * FROM bycycle_club WHERE club_email = ?";
	
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "STMP FAILED";
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s" , $club_email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}


function  clubRegister($conn, $club_name, $club_admin, $club_phone, $club_email, $city , $state, $pincode, $club_meeting_location, $club_latitude, $new_img_name, $club_longitude, $club_facebook, $club_instagram, $club_twitter, $club_desc){

    $sql ="INSERT INTO bycycle_club (club_name, club_admin, club_phone, club_email, city, state, pincode, club_meeting_location, club_latitude, club_logo, club_longitude, club_facebook, club_instagram, club_twitter, club_desc) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	
	$stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "STMP FAILED";
        exit();
    }


    mysqli_stmt_bind_param($stmt, "sssssssssssssss" , $club_name, $club_admin, $club_phone, $club_email, $city , $state, $pincode, $club_meeting_location, $club_latitude, $new_img_name, $club_longitude, $club_facebook, $club_instagram, $club_twitter, $club_desc);
    mysqli_stmt_execute($stmt);
	echo 2;
	exit();
}


