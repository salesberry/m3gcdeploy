<?php
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);


if(isset($mydata['submit']) && $mydata['type'] == 1){		

    require('connection.inc.php');
    require('function.inc.php');

    $full_name=get_safe_value($conn,$mydata['full_name']);
	$phone=get_safe_value($conn,$mydata['phone']);
    $password=get_safe_value($conn,$mydata['password']);
	$retype_password=get_safe_value($conn,$mydata['retype_password']);
    $date_of_birth= $mydata['date_of_birth'];
	$gender=get_safe_value($conn,$mydata['gender']);
    

    if($password !== $retype_password){

        echo json_encode(array("statusCode"=>201));
        exit();
    }   


    if(phoneExist($conn, $phone) !== false) {

        echo json_encode(array("statusCode"=>203));
        exit();
    }

   
    registerUser($conn, $full_name, $phone, $password, $gender, $date_of_birth);     
    mysqli_close($conn);
	
	
}

if(isset($mydata['submit']) && $mydata['type'] == 2){		

    require('connection.inc.php');
    require('function.inc.php');

    
	$phone=get_safe_value($conn,$mydata['phone']);
    $password=get_safe_value($conn,$mydata['password']);	
    
    
    loginUser($conn, $phone, $password);     

    mysqli_close($conn);
	
	
}



else{
    echo json_encode(array("statusCode"=>200));
    exit();
}
