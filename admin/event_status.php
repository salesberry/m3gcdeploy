<?php

require('app/connection.inc.php');

if(isset($_GET['id']) && isset($_GET['status'])){

    $id = $_GET['id'];
    $status = $_GET['status'];

    $query = "UPDATE event_details set status = $status WHERE id = $id";

    mysqli_query($conn, $query);
    
    header('location:events.php');






}



?>