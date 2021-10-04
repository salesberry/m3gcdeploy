<?php


// $dbServername = "localhost";
// $dbUsername = "root";
// $dbPassword = "";
// $dbName = "m3gcindia";
// $baseUrl='http://localhost/m3gcindia/';

// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName );


$dbServername = "localhost";
$dbUsername = "m3gcadmin";
$dbPassword = "Gutsy@12book!123B";
$dbName = "m3gcindia";

$baseUrl='https://mysalesberry.com/m3gcindia/';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName );

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }