<?php

require('app/connection.inc.php');

if(isset($_GET['id']) && isset($_GET['status'])){

    $id = $_GET['id'];
    $status = $_GET['status'];

    $query = "UPDATE users set user_status = $status WHERE uid = $id";

    mysqli_query($conn, $query);
    
    header('location:users.php');






}



?>